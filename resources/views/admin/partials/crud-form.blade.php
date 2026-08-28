<form method="POST" action="{{ $action }}" class="crud-form">
  @csrf
  @if(isset($model)) @method('PUT') @endif

  @foreach($meta['fields'] as $f)
    @php
      $name = $f['name'];
      $raw = old($name, isset($model) ? ($model[$name] ?? '') : '');
      if (($f['type'] ?? '') === 'date' && $raw) { $raw = \Carbon\Carbon::parse($raw)->format('Y-m-d'); }
      elseif (($f['type'] ?? '') === 'datetime-local' && $raw) { $raw = \Carbon\Carbon::parse($raw)->format('Y-m-d\TH:i'); }
      elseif (($f['type'] ?? '') === 'time' && $raw) { $raw = \Carbon\Carbon::parse($raw)->format('H:i'); }
      if (($f['type'] ?? '') === 'json' && is_array($raw)) { $raw = implode("\n", $raw); }
      $disp = is_string($raw) ? $raw : '';
    @endphp
    <div class="field">
      <label class="field-label">{{ $f['label'] }}</label>

      @switch($f['type'] ?? 'text')
        @case('textarea')
        @case('json')
          <textarea class="input" name="{{ $name }}" rows="4">{{ $disp }}</textarea>
          @break

        @case('select')
          <select class="input" name="{{ $name }}">
            <option value="">—</option>
            @if(isset($f['relselect']))
              @foreach(($options[$f['relselect']['slug']] ?? []) as $o)
                <option value="{{ $o['value'] }}" {{ old($name, ($model[$name] ?? '')) == $o['value'] ? 'selected' : '' }}>{{ $o['label'] }}</option>
              @endforeach
            @else
              @foreach(($f['options'] ?? []) as $k => $v)
                <option value="{{ $k }}" {{ old($name, ($model[$name] ?? '')) == $k ? 'selected' : '' }}>{{ $v }}</option>
              @endforeach
            @endif
          </select>
          @break

        @case('checkbox')
          <input type="checkbox" name="{{ $name }}" value="1" {{ old($name, ($model[$name] ?? 0)) ? 'checked' : '' }}>
          @break

        @case('password')
          <input type="password" class="input" name="{{ $name }}" placeholder="Leave blank to keep current" autocomplete="new-password">
          @break

        @default
          @php
            $t = $f['type'] === 'number' ? 'number'
               : ($f['type'] === 'email' ? 'email'
               : ($f['type'] === 'date' ? 'date'
               : ($f['type'] === 'datetime-local' ? 'datetime-local'
               : ($f['type'] === 'time' ? 'time' : 'text'))));
          @endphp
          <input class="input" type="{{ $t }}" name="{{ $name }}" value="{{ $disp }}">
      @endswitch
    </div>
  @endforeach

  <div class="form-actions">
    <button type="submit" class="btn btn-accent">{{ isset($model) ? 'Update' : 'Save' }}</button>
    <a href="{{ url('admin/'.$slug) }}" class="btn btn-secondary">Cancel</a>
  </div>
</form>
