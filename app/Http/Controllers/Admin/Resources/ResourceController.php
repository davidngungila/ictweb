<?php

namespace App\Http\Controllers\Admin\Resources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class ResourceController extends Controller
{
    protected $resource;

    protected function def()
    {
        $d = Config::get('admin_resources')[$this->resource] ?? null;
        abort_if(!$d, 404, 'Unknown resource');
        return $d;
    }

    protected function model()
    {
        return $this->def()['model'];
    }

    protected function hasColumn($model, $col)
    {
        return Schema::hasColumn((new $model)->getTable(), $col);
    }

    public function index(Request $r)
    {
        $def = $this->def();
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
            $rows = $query->forPage($page, $perPage)->get()->map(fn($row) => $this->decorate($row, $def))->all();
            return response()->json(['data' => $rows, 'total' => $total, 'page' => $page, 'per_page' => $perPage]);
        }

        return response()->json(['data' => $query->get()->map(fn($row) => $this->decorate($row, $def))->all()]);
    }

    public function store(Request $r)
    {
        $def = $this->def();
        $rules = $this->rules($def);
        $data = $r->validate($rules);
        $data = $this->prep($data, true);
        $model = $def['model'];
        $inst = new $model;
        $inst->forceFill($data);
        $inst->save();
        return response()->json(['data' => $this->decorate($inst, $def), 'message' => 'Created']);
    }

    public function update(Request $r, $id)
    {
        $def = $this->def();
        $rules = $this->rules($def);
        $data = $r->validate($rules);
        $data = $this->prep($data, false);
        $model = $def['model'];
        $inst = $model::findOrFail($id);
        $inst->forceFill($data);
        $inst->save();
        return response()->json(['data' => $this->decorate($inst, $def), 'message' => 'Updated']);
    }

    protected function rules($def)
    {
        $rules = $def['rules'] ?? [];
        foreach ($rules as $k => $v) {
            $rules[$k] = preg_replace('/^required\b/', 'sometimes|required', $v);
        }
        if (array_key_exists('password', $rules)) {
            $rules['password'] = request()->isMethod('post') ? 'required|min:6' : 'nullable|min:6';
        }
        return $rules;
    }

    public function destroy($id)
    {
        $model = $this->model();
        $inst = $model::findOrFail($id);
        $inst->delete();
        return response()->json(['message' => 'Deleted']);
    }

    protected function decorate($row, $def)
    {
        $arr = $row->toArray();
        unset($arr['password'], $arr['remember_token']);
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

    protected function prep($data, $isCreate)
    {
        $model = $this->model();
        foreach ($data as $k => $v) {
            if ($v === '' || $v === null) {
                $data[$k] = null;
            }
        }
        $def = $this->def();
        foreach ($def['fields'] as $f) {
            $n = $f['name'];
            if ($f['type'] === 'checkbox') {
                $data[$n] = isset($data[$n]) ? 1 : 0;
                continue;
            }
            if ($f['type'] === 'json') {
                if (empty($data[$n])) {
                    $data[$n] = '[]';
                } elseif (is_string($data[$n]) && !in_array(substr(trim($data[$n]), 0, 1), ['[', '{'])) {
                    $parts = array_values(array_filter(preg_split('/[\r\n,]+/', $data[$n]), 'strlen'));
                    $data[$n] = json_encode($parts, JSON_UNESCAPED_SLASHES);
                }
                continue;
            }
            if (array_key_exists('default', $f)) {
                $cur = $data[$n] ?? null;
                if (empty($cur) && $cur !== 0 && $cur !== '0') {
                    $data[$n] = $f['default'];
                }
            }
        }
        if ($isCreate && $this->hasColumn($model, 'uploaded_by') && empty($data['uploaded_by'])) {
            $data['uploaded_by'] = auth('admin')->id() ?? 1;
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
