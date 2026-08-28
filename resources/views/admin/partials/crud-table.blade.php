<div class="table-scroll">
  <table class="data-table">
    <thead>
      <tr>
        @foreach($meta['columns'] as $c)<th>{{ $c['label'] }}</th>@endforeach
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($rows as $row)
        <tr>
          @foreach($meta['columns'] as $c)
            <td>
              @if(isset($c['rel']))
                {{ $row[$c['key'].'_label'] ?? ($row[$c['key']] ?? '') }}
              @elseif(($c['type'] ?? '') === 'money')
                TZS {{ number_format((float)($row[$c['key']] ?? 0), 2) }}
              @else
                {{ $row[$c['key']] ?? '' }}
              @endif
            </td>
          @endforeach
          <td class="row-actions">
            <a href="{{ url('admin/'.$slug.'/'.$row['id'].'/edit') }}" class="btn btn-sm btn-secondary">Edit</a>
            <form action="{{ url('admin/'.$slug.'/'.$row['id']) }}" method="POST" class="inline-form" onsubmit="return confirm('Delete this record?');">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger" type="submit">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="{{ count($meta['columns']) + 1 }}" class="empty-cell">No records found.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>
