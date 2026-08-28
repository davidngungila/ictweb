@php
$ic = '<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M8 9h8M8 13h5"/></svg>';
@endphp
<aside class="sidebar">
  <div class="sidebar-brand">
    <div class="brand-mark">J</div>
    <div class="brand-text">JezdanTech<span>ERP</span></div>
  </div>

  <nav class="sidebar-nav">
    <a class="nav-item" href="{{ url('admin/dashboard') }}"><span class="nav-icon">{!! $ic !!}</span><span>Dashboard</span></a>

    <div class="nav-group">CRM</div>
    <a class="nav-item" href="{{ url('admin/client') }}"><span class="nav-icon">{!! $ic !!}</span><span>Clients</span></a>
    <a class="nav-item" href="{{ url('admin/lead') }}"><span class="nav-icon">{!! $ic !!}</span><span>Leads &amp; Demos</span></a>
    <a class="nav-item" href="{{ url('admin/contact') }}"><span class="nav-icon">{!! $ic !!}</span><span>Contacts</span></a>

    <div class="nav-group">Delivery</div>
    <a class="nav-item" href="{{ url('admin/project') }}"><span class="nav-icon">{!! $ic !!}</span><span>Projects</span></a>
    <a class="nav-item" href="{{ url('admin/service') }}"><span class="nav-icon">{!! $ic !!}</span><span>Services</span></a>
    <a class="nav-item" href="{{ url('admin/package') }}"><span class="nav-icon">{!! $ic !!}</span><span>Packages</span></a>
    <a class="nav-item" href="{{ url('admin/pricing') }}"><span class="nav-icon">{!! $ic !!}</span><span>Pricing Plans</span></a>
    <a class="nav-item" href="{{ url('admin/offer') }}"><span class="nav-icon">{!! $ic !!}</span><span>Offers</span></a>
    <a class="nav-item" href="{{ url('admin/booking') }}"><span class="nav-icon">{!! $ic !!}</span><span>Bookings</span></a>

    <div class="nav-group">Finance</div>
    <a class="nav-item" href="{{ url('admin/invoice') }}"><span class="nav-icon">{!! $ic !!}</span><span>Invoices</span></a>
    <a class="nav-item" href="{{ url('admin/expense') }}"><span class="nav-icon">{!! $ic !!}</span><span>Expenses</span></a>
    <a class="nav-item" href="{{ url('admin/reports') }}"><span class="nav-icon">{!! $ic !!}</span><span>Reports</span></a>

    <div class="nav-group">Communication</div>
    <a class="nav-item" href="{{ url('admin/message') }}"><span class="nav-icon">{!! $ic !!}</span><span>Messages</span></a>

    <div class="nav-group">Operations</div>
    <a class="nav-item" href="{{ url('admin/user') }}"><span class="nav-icon">{!! $ic !!}</span><span>Team &amp; Users</span></a>
    <a class="nav-item" href="{{ url('admin/file') }}"><span class="nav-icon">{!! $ic !!}</span><span>File Manager</span></a>

    <div class="nav-group">System</div>
    <a class="nav-item" href="{{ url('admin/settings') }}"><span class="nav-icon">{!! $ic !!}</span><span>Settings</span></a>
  </nav>
</aside>
