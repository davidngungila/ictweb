<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'JezdanTech ERP')</title>
  @include('admin.partials.styles')
</head>
<body>
  <div class="app-shell">
    @include('admin.partials.sidebar-links')

    <div class="app-main">
      <header class="topbar">
        <div class="topbar-left">
          <span class="topbar-page">@yield('page_title', 'Management')</span>
        </div>
        <div class="topbar-right">
          <span class="topbar-user">{{ optional(auth('admin')->user())->name ?? 'Admin' }}</span>
          <form method="POST" action="{{ url('admin/logout') }}" style="display:inline">
            @csrf
            <button type="submit" class="btn btn-sm btn-secondary">Logout</button>
          </form>
        </div>
      </header>

      <main class="page-content">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
          <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
