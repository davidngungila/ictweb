<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JezdanTech ERP — Command Center</title>
  @vite(['resources/css/console.css'])
</head>
<body class="bg-ink-950 text-slate-100 antialiased">
<div class="flex min-h-screen">

  <!-- ============ SIDEBAR ============ -->
  <aside class="hidden lg:flex w-64 shrink-0 flex-col border-r border-white/5 bg-ink-900/60 backdrop-blur-xl">
    <div class="flex items-center gap-3 px-6 h-16 border-b border-white/5">
      <div class="h-9 w-9 rounded-xl bg-gradient-to-br from-brand-400 to-accent-500 grid place-items-center font-bold text-white shadow-lg shadow-brand-500/30">J</div>
      <div>
        <div class="text-sm font-semibold tracking-tight">JezdanTech</div>
        <div class="text-[11px] text-slate-400 -mt-0.5">ERP Console</div>
      </div>
    </div>

    <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-1 text-sm">
      <a href="{{ url('admin/console') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-brand-500/15 text-brand-300 font-medium">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12h7l2 5 4-12 2 7h3"/></svg>
        Command Center
      </a>

      @php $nav = [
        ['client','Clients','M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
        ['lead','Leads','M9 17v-6h13M9 5v6M3 5h6M3 19h6'],
        ['contact','Contacts','M3 8l9 6 9-6M3 8v8a1 1 0 001 1h16a1 1 0 001-1V8M3 8l9-5 9 5'],
        ['project','Projects','M3 7h18M3 12h18M3 17h18'],
        ['service','Services','M4 6h16M4 12h16M4 18h16'],
        ['package','Packages','M20 7l-8-5-8 5v10l8 5 8-5V7z'],
        ['pricing','Pricing','M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6'],
        ['offer','Offers','M20 12V8H6a2 2 0 01-2-2c0-1.1.9-2 2-2h14v8'],
        ['booking','Bookings','M8 2v4M16 2v4M3 10h18M5 4h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z'],
        ['invoice','Invoices','M9 14l2 2 4-4M7 2h10a2 2 0 012 2v16a2 2 0 01-2 2H7a2 2 0 01-2-2V4a2 2 0 012-2z'],
        ['expense','Expenses','M3 6h18v12H3zM3 10h18'],
        ['message','Messages','M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z'],
        ['user','Team','M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'],
        ['file','Files','M3 7h6l2 2h10v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7z'],
      ]; @endphp

      <div class="pt-3 pb-1 text-[11px] uppercase tracking-wider text-slate-500 px-3">Modules</div>
      @foreach ($nav as $n)
        <a href="{{ url('admin/'.$n[0]) }}" class="group flex items-center gap-3 px-3 py-2 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition">
          <svg class="w-4 h-4 text-slate-500 group-hover:text-brand-400 transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="{{ $n[2] }}"/></svg>
          {{ $n[1] }}
        </a>
      @endforeach

      <div class="pt-4 pb-1 text-[11px] uppercase tracking-wider text-slate-500 px-3">Workspace</div>
      <a href="{{ url('admin/dashboard') }}" class="flex items-center gap-3 px-3 py-2 rounded-xl text-slate-300 hover:bg-white/5 hover:text-white transition">
        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        Classic SPA
      </a>
    </nav>

    <div class="p-3 border-t border-white/5">
      <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-white/5">
        <div class="h-8 w-8 rounded-full bg-gradient-to-br from-violet-400 to-brand-500 grid place-items-center text-xs font-bold">AD</div>
        <div class="min-w-0">
          <div class="text-xs font-medium truncate">{{ optional(auth('admin')->user())->name ?? 'Admin' }}</div>
          <div class="text-[11px] text-slate-400 truncate">Administrator</div>
        </div>
      </div>
    </div>
  </aside>

  <!-- ============ MAIN ============ -->
  <div class="flex-1 flex flex-col min-w-0">

    <!-- TOPBAR -->
    <header class="sticky top-0 z-20 flex items-center gap-4 px-4 sm:px-6 h-16 border-b border-white/5 bg-ink-950/80 backdrop-blur-xl">
      <div>
        <h1 class="text-lg font-semibold tracking-tight">Command Center</h1>
        <p class="text-xs text-slate-400 -mt-0.5">Real-time overview of your business</p>
      </div>

      <div class="ml-auto flex items-center gap-2 sm:gap-3">
        <div class="hidden md:flex items-center gap-2 px-3 h-9 rounded-xl bg-white/5 border border-white/5 text-sm text-slate-400 w-64">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4-4"/></svg>
          <input class="bg-transparent outline-none w-full placeholder:text-slate-500" placeholder="Search clients, invoices…" />
        </div>
        <button class="relative h-9 w-9 grid place-items-center rounded-xl bg-white/5 border border-white/5 hover:bg-white/10 transition">
          <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 8a6 6 0 00-12 0c0 7-3 9-3 9h18s-3-2-3-9M13.7 21a2 2 0 01-3.4 0"/></svg>
          <span class="absolute top-2 right-2 h-2 w-2 rounded-full bg-rose-400"></span>
        </button>
        <a href="{{ url('admin/client/create') }}" class="hidden sm:inline-flex items-center gap-2 h-9 px-4 rounded-xl bg-brand-500 hover:bg-brand-600 text-white text-sm font-medium shadow-lg shadow-brand-500/30 transition">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
          New
        </a>
        <form method="POST" action="{{ url('admin/logout') }}" class="inline">
          @csrf
          <button class="h-9 w-9 grid place-items-center rounded-xl bg-white/5 border border-white/5 hover:bg-rose-500/20 hover:text-rose-300 transition" title="Sign out">
            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4M16 17l5-5-5-5M21 12H9"/></svg>
          </button>
        </form>
      </div>
    </header>

    <!-- CONTENT -->
    <main class="grid-glow flex-1 p-4 sm:p-6 space-y-6">

      <!-- KPI STRIP -->
      <section class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-4">
        @php
          $kpi = [
            ['Clients', number_format($kpis['clientsTotal']), $kpis['clientsActive'].' active', 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'brand'],
            ['Active Projects', $kpis['projectsActive'], $kpis['avgProgress'].'% avg progress', 'M3 7h18M3 12h18M3 17h18', 'accent'],
            ['Revenue (Paid)', number_format($kpis['revenuePaid']), $kpis['invoicesTotal'].' invoices', 'M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6', 'emerald'],
            ['Outstanding', number_format($kpis['outstanding']), 'awaiting payment', 'M9 14l2 2 4-4M7 2h10a2 2 0 012 2v16a2 2 0 01-2 2H7a2 2 0 01-2-2V4a2 2 0 012-2z', 'amber'],
            ['Leads', number_format($kpis['leadsTotal']), number_format($kpis['pipelineValue']).' pipeline', 'M9 17v-6h13M9 5v6M3 5h6M3 19h6', 'violet'],
            ['Conversion', $kpis['conversion'].'%', 'lead → client', 'M13 2L3 14h7l-1 8 10-12h-7l1-8z', 'rose'],
          ];
          $tone = ['brand'=>'from-brand-500/20 text-brand-300','accent'=>'from-accent-500/20 text-accent-400','emerald'=>'from-emerald-500/20 text-emerald-400','amber'=>'from-amber-500/20 text-amber-400','violet'=>'from-violet-500/20 text-violet-400','rose'=>'from-rose-500/20 text-rose-400'];
        @endphp
        @foreach ($kpi as $k)
          <div class="card animate-float p-4">
            <div class="flex items-center justify-between">
              <span class="text-[11px] uppercase tracking-wide text-slate-400">{{ $k[0] }}</span>
              <span class="h-8 w-8 rounded-lg bg-gradient-to-br {{ $tone[$k[4]] }} grid place-items-center">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="{{ $k[3] }}"/></svg>
              </span>
            </div>
          <div class="mt-3 text-2xl font-semibold tracking-tight">{{ $k[1] }}</div>
          <div class="text-xs text-slate-400 mt-1">{{ $k[2] }}</div>
          </div>
        @endforeach
      </section>

      <!-- CHARTS ROW 1 -->
      <section class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="card p-5 xl:col-span-2 animate-float">
          <div class="flex items-center justify-between mb-4">
            <div>
              <h3 class="font-semibold">Revenue Overview</h3>
              <p class="text-xs text-slate-400">Paid invoices, last 12 months</p>
            </div>
            <span class="text-xs px-2.5 py-1 rounded-lg bg-emerald-500/15 text-emerald-400">+{{ $kpis['conversion'] }}% conversion</span>
          </div>
          <div class="h-72"><canvas id="chartRevenue"></canvas></div>
        </div>

        <div class="card p-5 animate-float">
          <h3 class="font-semibold mb-1">Invoices by Status</h3>
          <p class="text-xs text-slate-400 mb-4">Collection health</p>
          <div class="h-64 grid place-items-center"><canvas id="chartInvoiceStatus"></canvas></div>
          <div id="invoiceLegend" class="grid grid-cols-2 gap-2 mt-2 text-xs text-slate-300"></div>
        </div>
      </section>

      <!-- CHARTS ROW 2 -->
      <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="card p-5 animate-float">
          <h3 class="font-semibold mb-1">Projects by Status</h3>
          <p class="text-xs text-slate-400 mb-4">Delivery pipeline</p>
          <div class="h-56"><canvas id="chartProjects"></canvas></div>
        </div>
        <div class="card p-5 animate-float">
          <h3 class="font-semibold mb-1">Leads Pipeline</h3>
          <p class="text-xs text-slate-400 mb-4">By stage</p>
          <div class="h-56"><canvas id="chartLeads"></canvas></div>
        </div>
        <div class="card p-5 animate-float">
          <h3 class="font-semibold mb-1">Clients by Status</h3>
          <p class="text-xs text-slate-400 mb-4">Engagement</p>
          <div class="h-56 grid place-items-center"><canvas id="chartClients"></canvas></div>
        </div>
        <div class="card p-5 animate-float">
          <h3 class="font-semibold mb-1">Top Clients</h3>
          <p class="text-xs text-slate-400 mb-4">By paid revenue</p>
          <div class="h-56"><canvas id="chartTopClients"></canvas></div>
        </div>
      </section>

      <!-- RECENT + QUICK -->
      <section class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="card p-5 xl:col-span-2 animate-float">
          <div class="flex items-center justify-between mb-4">
            <h3 class="font-semibold">Recent Activity</h3>
            <span class="text-xs text-slate-400">Live from database</span>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <div class="text-[11px] uppercase tracking-wider text-slate-500 mb-2">New Clients</div>
              @foreach ($recent['clients'] as $c)
                <div class="flex items-center gap-3 py-2 border-b border-white/5 last:border-0">
                  <div class="h-8 w-8 rounded-full bg-brand-500/20 text-brand-300 grid place-items-center text-xs font-bold">{{ substr($c->name,0,1) }}</div>
                  <div class="min-w-0 flex-1">
                    <div class="text-sm truncate">{{ $c->name }}</div>
                    <div class="text-xs text-slate-400 truncate">{{ $c->company ?: $c->email }}</div>
                  </div>
                  <span class="text-[11px] px-2 py-0.5 rounded-md {{ $c->status==='active' ? 'bg-emerald-500/15 text-emerald-400' : ($c->status==='pending' ? 'bg-amber-500/15 text-amber-400' : 'bg-slate-500/15 text-slate-400') }}">{{ ucfirst($c->status) }}</span>
                </div>
              @endforeach
            </div>
            <div>
              <div class="text-[11px] uppercase tracking-wider text-slate-500 mb-2">Latest Invoices</div>
              @foreach ($recent['invoices'] as $inv)
                <div class="flex items-center gap-3 py-2 border-b border-white/5 last:border-0">
                  <div class="h-8 w-8 rounded-lg bg-accent-500/15 text-accent-400 grid place-items-center text-[11px] font-bold">#{{ $inv->id }}</div>
                  <div class="min-w-0 flex-1">
                    <div class="text-sm truncate">{{ $inv->client_name }}</div>
                    <div class="text-xs text-slate-400">{{ $inv->invoice_number }}</div>
                  </div>
                  <div class="text-right">
                    <div class="text-sm">{{ number_format($inv->total ?: $inv->amount, 0) }}</div>
                    <span class="text-[11px] px-2 py-0.5 rounded-md {{ $inv->status==='paid' ? 'bg-emerald-500/15 text-emerald-400' : 'bg-amber-500/15 text-amber-400' }}">{{ ucfirst($inv->status) }}</span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="card p-5 animate-float">
          <h3 class="font-semibold mb-4">Quick Actions</h3>
          <div class="grid grid-cols-2 gap-3">
            @foreach ([['client','New Client'],['lead','New Lead'],['project','New Project'],['invoice','New Invoice'],['expense','Add Expense'],['message','Message']] as $q)
              <a href="{{ url('admin/'.$q[0].'/create') }}" class="group flex flex-col items-start gap-2 p-3 rounded-xl bg-white/5 hover:bg-brand-500/15 border border-white/5 hover:border-brand-500/30 transition">
                <span class="h-8 w-8 rounded-lg bg-brand-500/15 text-brand-300 group-hover:bg-brand-500/30 grid place-items-center">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 5v14M5 12h14"/></svg>
                </span>
                <span class="text-sm">{{ $q[1] }}</span>
              </a>
            @endforeach
          </div>

          <div class="mt-5">
            <div class="text-[11px] uppercase tracking-wider text-slate-500 mb-2">Leads / Messages</div>
            @foreach ($recent['leads']->take(3) as $l)
              <div class="flex items-center gap-2 py-1.5 text-sm">
                <span class="h-1.5 w-1.5 rounded-full bg-violet-400"></span>
                <span class="truncate flex-1">{{ $l->company_name }}</span>
                <span class="text-xs text-slate-400">{{ ucfirst($l->status) }}</span>
              </div>
            @endforeach
          </div>
        </div>
      </section>

      <footer class="text-center text-xs text-slate-600 pt-2">JezdanTech ERP · Command Center · data refreshed on load</footer>
    </main>
  </div>
</div>

<script>window.DASHBOARD_DATA = @json($chart);</script>
@vite(['resources/js/console.js'])
</body>
</html>
