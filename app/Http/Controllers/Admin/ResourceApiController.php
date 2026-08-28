<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class ResourceApiController extends Controller
{
    protected function defs()
    {
        return Config::get('admin_resources', []);
    }

    protected function def($slug)
    {
        $d = $this->defs()[$slug] ?? null;
        abort_if(!$d, 404, 'Unknown resource');
        return $d;
    }

    protected function model($slug)
    {
        return $this->def($slug)['model'];
    }

    protected function hasColumn($model, $col)
    {
        $table = (new $model)->getTable();
        return Schema::hasColumn($table, $col);
    }

    public function meta()
    {
        $out = [];
        foreach ($this->defs() as $slug => $d) {
            $out[$slug] = [
                'label' => $d['label'],
                'columns' => array_map(function ($c) {
                    $cc = ['key' => $c['key'], 'label' => $c['label'], 'type' => $c['type'] ?? 'text'];
                    if (isset($c['rel'])) {
                        $cc['type'] = 'rel';
                        $cc['labelKey'] = $c['key'] . '_label';
                    }
                    return $cc;
                }, $d['columns']),
                'fields' => array_map(function ($f) {
                    $ff = ['name' => $f['name'], 'label' => $f['label'], 'type' => $f['type'] ?? 'text', 'required' => !empty($f['required'])];
                    if (isset($f['options'])) $ff['options'] = $f['options'];
                    if (isset($f['hint'])) $ff['hint'] = $f['hint'];
                    if (isset($f['relselect'])) {
                        $ff['relselect'] = ['slug' => $f['relselect']['slug'], 'label' => $f['relselect']['label'], 'value' => $f['relselect']['value'] ?? 'id'];
                    }
                    return $ff;
                }, $d['fields']),
            ];
        }
        return response()->json(['data' => $out]);
    }

    public function options($slug)
    {
        $def = $this->def($slug);
        $model = $def['model'];
        $labelCol = $def['option_label'] ?? ($def['fields'][0]['name'] ?? 'id');
        $rows = $model::query()->limit(300)->get([(new $model)->getKeyName(), $labelCol]);
        return response()->json([
            'data' => $rows->map(function ($x) use ($labelCol) {
                return ['value' => $x->getKey(), 'label' => (string) ($x->{$labelCol} ?? $x->getKey())];
            })->all(),
        ]);
    }

    public function index($slug, Request $r)
    {
        $def = $this->def($slug);
        $model = $def['model'];
        $q = $r->input('q');
        $sort = $r->input('sort');
        $dir = $r->input('dir', 'asc');

        $query = $model::query();
        if ($q && !empty($def['search'])) {
            $query->where(function ($wq) use ($def, $q) {
                foreach ($def['search'] as $f) {
                    $wq->orWhere($f, 'like', '%' . $q . '%');
                }
            });
        }
        foreach ($r->except(['q', 'page', 'sort', 'dir', 'per_page']) as $k => $v) {
            if ($v !== '' && $this->hasColumn($model, $k)) {
                $query->where($k, $v);
            }
        }
        if ($sort && $this->hasColumn($model, $sort)) {
            $query->orderBy($sort, $dir);
        } else {
            $query->orderBy((new $model)->getKeyName(), 'desc');
        }

        if ($r->filled('per_page')) {
            $page = (int) $r->input('page', 1);
            $perPage = (int) $r->input('per_page', 12);
            $total = $query->count();
            $rows = $query->forPage($page, $perPage)->get();
            $rows = $rows->map(fn($row) => $this->decorate($row, $def))->all();
            return response()->json(['data' => $rows, 'total' => $total, 'page' => $page, 'per_page' => $perPage]);
        }

        $rows = $query->get()->map(fn($row) => $this->decorate($row, $def))->all();
        return response()->json(['data' => $rows]);
    }

    public function store($slug, Request $r)
    {
        $def = $this->def($slug);
        $data = $r->validate($def['rules'] ?? []);
        $data = $this->prep($slug, $data, true);
        $model = $def['model'];
        $inst = new $model;
        $inst->forceFill($data);
        $inst->save();
        return response()->json(['data' => $this->decorate($inst, $def), 'message' => 'Created']);
    }

    public function update($slug, $id, Request $r)
    {
        $def = $this->def($slug);
        $data = $r->validate($def['rules'] ?? []);
        $data = $this->prep($slug, $data, false);
        $model = $def['model'];
        $inst = $model::findOrFail($id);
        $inst->forceFill($data);
        $inst->save();
        return response()->json(['data' => $this->decorate($inst, $def), 'message' => 'Updated']);
    }

    public function destroy($slug, $id)
    {
        $model = $this->model($slug);
        $inst = $model::findOrFail($id);
        $inst->delete();
        return response()->json(['message' => 'Deleted']);
    }

    public function summary()
    {
        $counts = [];
        foreach ($this->defs() as $slug => $d) {
            try {
                $counts[$slug] = $d['model']::count();
            } catch (\Throwable $e) {
                $counts[$slug] = 0;
            }
        }
        $unpaid = 0;
        try {
            $unpaid = \App\Models\Invoice::where('status', '!=', 'Paid')->sum('total');
        } catch (\Throwable $e) {
        }
        return response()->json(['data' => ['counts' => $counts, 'unpaid_invoices' => $unpaid]]);
    }

    protected function decorate($row, $def)
    {
        $arr = $row->toArray();
        foreach ($def['columns'] as $c) {
            if (isset($c['rel'])) {
                $relModel = $c['rel']['model'];
                $label = $c['rel']['label'];
                $fk = $arr[$c['key']] ?? null;
                $rel = $fk ? (new $relModel)->find($fk) : null;
                $arr[$c['key'] . '_label'] = $rel ? (string) ($rel->{$label} ?? $rel->getKey()) : ($fk ?? '—');
            }
        }
        return $arr;
    }

    protected function prep($slug, $data, $isCreate)
    {
        foreach ($data as $k => $v) {
            if ($v === '' || $v === null) {
                $data[$k] = null;
            }
        }
        $def = $this->def($slug);
        foreach ($def['fields'] as $f) {
            if ($f['type'] === 'checkbox') {
                $data[$f['name']] = isset($data[$f['name']]) ? 1 : 0;
            }
        }
        if (isset($data['password'])) {
            if (empty($data['password'])) {
                unset($data['password']);
            } else {
                $data['password'] = bcrypt($data['password']);
            }
        }
        return $data;
    }
}
