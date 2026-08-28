<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class ModuleCrudController extends Controller
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

    protected function options($def)
    {
        $opts = [];
        foreach ($def['fields'] as $f) {
            if (isset($f['relselect'])) {
                $m = $f['relselect']['model'];
                $label = $f['relselect']['label'];
                $opts[$f['relselect']['slug']] = $m::limit(300)->get()
                    ->map(fn($x) => ['value' => $x->getKey(), 'label' => (string) ($x->{$label} ?? $x->getKey())])
                    ->all();
            }
        }
        return $opts;
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

    public function index()
    {
        $def = $this->def();
        $model = $this->model();
        $rows = $model::orderBy((new $model)->getKeyName(), 'desc')->paginate(15);
        $rows->getCollection()->transform(fn($r) => collect($this->decorate($r, $def)));
        return view('admin.' . $this->resource . '.index', [
            'slug'    => $this->resource,
            'meta'    => $def,
            'rows'    => $rows,
            'options' => $this->options($def),
        ]);
    }

    public function create()
    {
        $def = $this->def();
        return view('admin.' . $this->resource . '.create', [
            'slug'    => $this->resource,
            'meta'    => $def,
            'options' => $this->options($def),
        ]);
    }

    public function store(Request $r)
    {
        $def = $this->def();
        $data = $r->validate($this->rules($def));
        $data = $this->prep($data, true);
        $m = $this->model();
        $inst = new $m;
        $inst->forceFill($data);
        $inst->save();
        return redirect()->route('admin.' . $this->resource . '.index')
            ->with('success', $def['label'] . ' created.');
    }

    public function edit($id)
    {
        $def = $this->def();
        $m = $this->model();
        $inst = $m::findOrFail($id);
        return view('admin.' . $this->resource . '.edit', [
            'slug'    => $this->resource,
            'meta'    => $def,
            'model'   => $inst,
            'options' => $this->options($def),
        ]);
    }

    public function update(Request $r, $id)
    {
        $def = $this->def();
        $data = $r->validate($this->rules($def));
        $data = $this->prep($data, false);
        $m = $this->model();
        $inst = $m::findOrFail($id);
        $inst->forceFill($data);
        $inst->save();
        return redirect()->route('admin.' . $this->resource . '.index')
            ->with('success', $def['label'] . ' updated.');
    }

    public function destroy($id)
    {
        $def = $this->def();
        $m = $this->model();
        $inst = $m::findOrFail($id);
        $inst->delete();
        return redirect()->route('admin.' . $this->resource . '.index')
            ->with('success', $def['label'] . ' deleted.');
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

    protected function prep($data, $isCreate)
    {
        $model = $this->model();
        foreach ($data as $k => $v) {
            if ($v === '' || $v === null) {
                $data[$k] = null;
            }
        }
        foreach ($this->def()['fields'] as $f) {
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
                    $data[$n] = json_encode($parts);
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
