<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JezdanTech ERP â€” Admin Console</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.4/chart.umd.min.js"></script>
@include('admin.partials.styles')
</head>
<body>

@if(empty($guest))
<div class="app-shell">
  <div class="sidebar-scrim" id="sidebarScrim" onclick="closeMobileSidebar()"></div>

  @include('admin.partials.sidebar')

  <div class="main-wrap" id="mainWrap">
    <header class="topbar">
      <div class="topbar-left">
        <button class="icon-btn" onclick="onSidebarToggleClick()" aria-label="Toggle sidebar">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
        <div class="crumb-wrap">
          <div class="crumb" id="crumbText">Dashboard</div>
          <div class="page-title" id="pageTitleText">Welcome back, Admin</div>
        </div>
      </div>
      <div class="topbar-right">
        <div class="search-box">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
          <input id="globalSearch" placeholder="Search clients, projects, invoices..." oninput="handleGlobalSearch(this.value)" onfocus="openPanel('searchPanel')">
        </div>
        <div style="position:relative">
          <button class="icon-btn" onclick="togglePanel('searchPanel')" title="Search">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
          </button>
          <div class="dropdown-panel" id="searchPanel" style="width:320px"><div class="dropdown-list" id="searchResults"><div class="empty-state" style="padding:30px 18px"><p>Start typing to search across the system.</p></div></div></div>
        </div>
        <div style="position:relative">
          <button class="icon-btn" onclick="togglePanel('quickPanel')" title="Quick actions">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12h14"/></svg>
          </button>
          <div class="dropdown-panel" id="quickPanel" style="width:260px">
            <div class="dropdown-header"><strong>Quick actions</strong></div>
            <div class="dropdown-list" id="quickPanelList"></div>
          </div>
        </div>
        <div style="position:relative">
          <button class="icon-btn" onclick="togglePanel('notifPanel')" title="Notifications">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 10-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.7 21a2 2 0 01-3.4 0"/></svg>
            <span class="badge-dot"></span>
          </button>
          <div class="dropdown-panel" id="notifPanel">
            <div class="dropdown-header"><strong>Notifications</strong><button class="link-btn" onclick="toast('All notifications marked as read','success')">Mark all read</button></div>
            <div class="dropdown-list" id="notifList"></div>
          </div>
        </div>
        <div style="position:relative">
          <button class="user-chip" onclick="togglePanel('userPanel')">
            <div class="avatar">AD</div>
            <div class="u-meta hidden-mobile">
              <div class="u-name">Admin User</div>
              <div class="u-role">Administrator</div>
            </div>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="dropdown-panel" id="userPanel">
            <div class="menu-item" onclick="toast('Opening profile...','info')">Profile</div>
            <div class="menu-item" onclick="navigate('settings','general')">Account Settings</div>
            <div class="menu-item" onclick="navigate('settings','security')">Security</div>
            <div class="menu-divider"></div>
            <div class="menu-item danger" onclick="confirmAction({title:'Sign out?',message:'You will be returned to the login screen.',confirmLabel:'Sign out',onConfirm:()=>toast('Signed out','success')})">Sign out</div>
          </div>
        </div>
      </div>
    </header>

    <main class="page-content" id="pageContent"></main>
  </div>
</div>
@else
<div class="auth-shell">
  @yield('content')
</div>
@endif

<div class="toast-stack" id="toastStack"></div>
<div id="modalRoot"></div>

<script>
/* ============================================================
   JEZDANTECH ERP â€” SHARED SHELL & COMPONENTS
   ============================================================ */
const ICONS={
  dashboard:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg>',
  client:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>',
  people:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.2"/><path d="M2.5 20c0-4 3-6.5 6.5-6.5s6.5 2.5 6.5 6.5"/><circle cx="17.5" cy="8.5" r="2.5"/><path d="M15.5 13.4c2.8.3 5 2.6 5 6.6"/></svg>',
  lead:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4"/><circle cx="12" cy="12" r="1"/></svg>',
  contacts:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.8 19.8 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.13.96.36 1.9.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0122 16.92z"/></svg>',
  project:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>',
  service:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1a2 2 0 11-2.8 2.8l-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.6V21a2 2 0 01-4 0v-.1a1.7 1.7 0 00-1-1.6 1.7 1.7 0 00-1.9.3l-.1.1a2 2 0 11-2.8-2.8l.1-.1a1.7 1.7 0 00.3-1.9 1.7 1.7 0 00-1.6-1H3a2 2 0 010-4h.1a1.7 1.7 0 001.6-1 1.7 1.7 0 00-.3-1.9l-.1-.1a2 2 0 112.8-2.8l.1.1a1.7 1.7 0 001.9.3H9a1.7 1.7 0 001-1.6V3a2 2 0 014 0v.1a1.7 1.7 0 001 1.6 1.7 1.7 0 001.9-.3l.1-.1a2 2 0 112.8 2.8l-.1.1a1.7 1.7 0 00-.3 1.9V9a1.7 1.7 0 001.6 1H21a2 2 0 010 4h-.1a1.7 1.7 0 00-1.6 1z"/></svg>',
  package:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 00-1-1.7l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.7l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><path d="M3.3 6.8L12 12l8.7-5.2M12 22V12"/></svg>',
  pricing:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>',
  offer:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><circle cx="7" cy="7" r="1.2"/></svg>',
  booking:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>',
  invoice:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6M9 9h1"/></svg>',
  expense:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20M6 15h4"/></svg>',
  finance:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v10M15 9.5c0-1.4-1.3-2.5-3-2.5s-3 1-3 2.3c0 3 6 1.4 6 4.3 0 1.4-1.3 2.4-3 2.4s-3-1-3-2.4"/></svg>',
  reports:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><rect x="7" y="12" width="3" height="6"/><rect x="12.5" y="8" width="3" height="10"/><rect x="18" y="5" width="3" height="13"/></svg>',
  comms:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>',
  docs:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 13h6M9 17h6"/></svg>',
  users:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7"/></svg>',
  settings:'<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 00.3 1.9l.1.1a2 2 0 11-2.8 2.8l-.1-.1a1.7 1.7 0 00-1.9-.3 1.7 1.7 0 00-1 1.6V21a2 2 0 01-4 0v-.1a1.7 1.7 0 00-1-1.6 1.7 1.7 0 00-1.9.3l-.1.1a2 2 0 11-2.8-2.8l.1-.1a1.7 1.7 0 00.3-1.9 1.7 1.7 0 00-1.6-1H3a2 2 0 010-4h.1a1.7 1.7 0 001.6-1 1.7 1.7 0 00-.3-1.9l-.1-.1a2 2 0 112.8-2.8l.1.1a1.7 1.7 0 001.9.3H9a1.7 1.7 0 001-1.6V3a2 2 0 014 0v.1a1.7 1.7 0 001 1.6 1.7 1.7 0 001.9-.3l.1-.1a2 2 0 112.8 2.8l-.1.1a1.7 1.7 0 00-.3 1.9V9a1.7 1.7 0 001.6 1H21a2 2 0 010 4h-.1a1.7 1.7 0 00-1.6 1z"/></svg>',
};

let STATE={page:'dashboard', params:{}, tab:null, sidebarCollapsed:false, openGroups:{}, tableState:{}};
let TABLE_RENDERERS={};

/* ---------- Sidebar ---------- */
function buildSidebar(){
  const nav=document.getElementById('sidebarNav');
  let html='';
  NAV.forEach(section=>{
    if(section.single){
      html+=`<div class="tooltip-wrap"><a href="#" class="nav-single ${STATE.page===section.page?'active':''}" onclick="navigate('${section.page}');return false;">
        <span class="nav-icon">${ICONS[section.icon]}</span><span class="nav-label">${section.label}</span>
      </a><span class="tt">${section.label}</span></div>`;
      return;
    }
    html+=`<div class="nav-group"><div class="group-title">${section.group}</div>`;
    section.items.forEach((item,idx)=>{
      const gid=section.group+'-'+idx;
      const isOpen=!!STATE.openGroups[gid];
      html+=`<div class="tooltip-wrap">
        <button class="nav-parent ${isOpen?'expanded':''}" onclick="toggleNavGroup('${gid}')">
          <span class="nav-icon">${ICONS[item.icon]||''}</span>
          <span class="nav-label">${item.label}</span>
          <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M9 18l6-6-6-6"/></svg>
        </button>
        <span class="tt">${item.label}</span>
      </div>
      <div class="nav-children ${isOpen?'open':''}" id="nc-${gid}">
        ${item.children.map(c=>{
          const active = c.page===STATE.page && (!c.params || JSON.stringify(c.params)===JSON.stringify(STATE.params||{}));
          if(c.action){const call=c.action.includes('(')?c.action:(c.action+'()');return `<a href="#" class="nav-child" onclick="${call};closeAllPanels();return false;">${c.label}</a>`;}
          return `<a href="#" class="nav-child ${active?'active':''}" onclick='navigateWithParams("${c.page}", ${JSON.stringify(c.params||{})});return false;'>${c.label}</a>`;
        }).join('')}
      </div>`;
    });
    html+=`</div>`;
  });
  nav.innerHTML=html;
}
function toggleNavGroup(gid){
  STATE.openGroups[gid]=!STATE.openGroups[gid];
  const el=document.getElementById('nc-'+gid);
  el.classList.toggle('open');
  document.querySelectorAll('.nav-parent').forEach(b=>{ if(b.getAttribute('onclick')===`toggleNavGroup('${gid}')`) b.classList.toggle('expanded'); });
}
function navigateWithParams(page,params){ STATE.params=params||{}; navigate(page); }
const ERP_KNOWN_PAGES=['dashboard','clients','leads','contacts','projects','services','packages','pricing','offers','bookings','invoices','expenses','messages','team','files','reports','settings'];
function erpUrl(page){
  if(page==='dashboard') return '/admin/dashboard';
  if(page==='settings' && STATE.params && STATE.params.tab) return '/admin/settings/'+STATE.params.tab;
  return '/admin/'+page;
}
function routeFromPath(){
  let p=(location.pathname||'').replace(/^\/admin\/?/,'').replace(/\/$/,'');
  if(!p){ STATE.page='dashboard'; STATE.params={}; return; }
  const parts=p.split('/'); const seg=parts[0];
  if(ERP_KNOWN_PAGES.includes(seg)){
    STATE.page=seg;
    STATE.params=(seg==='settings' && parts[1])?{tab:parts[1]}:{};
  } else { STATE.page='dashboard'; STATE.params={}; }
}
function navigate(page,tab){
  STATE.page=page; STATE.tab=tab||null;
  if(tab) STATE.params={tab:tab};
  history.pushState({},'',erpUrl(page));
  closeMobileSidebar(); closeAllPanels(); buildSidebar();
  const def=NAV_FLAT && NAV_FLAT[page];
  document.getElementById('crumbText').textContent = def ? def.crumb : 'Dashboard';
  document.getElementById('pageTitleText').textContent = def ? def.title : 'JezdanTech ERP';
  renderPage();
  document.getElementById('pageContent').scrollTop=0;
  window.scrollTo({top:0,behavior:'smooth'});
}
window.addEventListener('popstate',function(){
  routeFromPath(); buildSidebar();
  const def=NAV_FLAT && NAV_FLAT[STATE.page];
  const crumb=document.getElementById('crumbText'); if(crumb) crumb.textContent=def?def.crumb:'Dashboard';
  const ptitle=document.getElementById('pageTitleText'); if(ptitle) ptitle.textContent=def?def.title:'JezdanTech ERP';
  renderPage();
});
function toggleSidebarCollapse(){
  STATE.sidebarCollapsed=!STATE.sidebarCollapsed;
  document.getElementById('sidebar').classList.toggle('collapsed',STATE.sidebarCollapsed);
  document.getElementById('mainWrap').classList.toggle('sidebar-collapsed',STATE.sidebarCollapsed);
}
function onSidebarToggleClick(){ if(window.innerWidth<=860){ openMobileSidebar(); } else { toggleSidebarCollapse(); } }
function openMobileSidebar(){ document.getElementById('sidebar').classList.add('mobile-open'); document.getElementById('sidebarScrim').classList.add('open'); }
function closeMobileSidebar(){ document.getElementById('sidebar').classList.remove('mobile-open'); document.getElementById('sidebarScrim').classList.remove('open'); }

/* ---------- Panels ---------- */
function closeAllPanels(){ document.querySelectorAll('.dropdown-panel').forEach(p=>p.classList.remove('open')); }
function togglePanel(id){ const el=document.getElementById(id); const isOpen=el.classList.contains('open'); closeAllPanels(); if(!isOpen) el.classList.add('open'); }
function openPanel(id){ closeAllPanels(); document.getElementById(id).classList.add('open'); }
document.addEventListener('click',(e)=>{
  if(!e.target.closest('[onclick*="togglePanel"]') && !e.target.closest('.dropdown-panel') && !e.target.closest('#globalSearch')){ closeAllPanels(); }
  if(!e.target.closest('.action-menu-wrap')){ document.querySelectorAll('.action-menu.open').forEach(m=>m.classList.remove('open')); }
});
function toggleActionMenu(id){
  const el=document.getElementById(id); const isOpen=el.classList.contains('open');
  document.querySelectorAll('.action-menu.open').forEach(m=>m.classList.remove('open'));
  if(!isOpen) el.classList.add('open');
}

/* ---------- Notifications / Quick / Search ---------- */
function renderNotifPanel(){
  const items=[
    {ico:'ðŸ’¼',bg:'var(--info-bg)',c:'var(--info)',title:'New project kickoff: Tourism Booking Portal',time:'10 minutes ago'},
    {ico:'ðŸ’°',bg:'var(--success-bg)',c:'var(--success)',title:'Invoice #INV-2042 paid â€” TZS 2,400,000',time:'1 hour ago'},
    {ico:'âš ï¸',bg:'var(--warning-bg)',c:'var(--warning)',title:'Expense awaiting approval: Server upgrade',time:'3 hours ago'},
    {ico:'ðŸ“©',bg:'var(--info-bg)',c:'var(--info)',title:'New demo request from Safari Lodge Co.',time:'5 hours ago'},
    {ico:'ðŸŸ¢',bg:'var(--success-bg)',c:'var(--success)',title:'Project "ERP Phase 2" marked complete',time:'Yesterday'},
  ];
  document.getElementById('notifList').innerHTML=items.map(n=>`
    <div class="notif-item">
      <div class="n-ico" style="background:${n.bg};color:${n.c}">${n.ico}</div>
      <div class="n-body"><p>${n.title}</p><span>${n.time}</span></div>
    </div>`).join('');
}
function renderQuickPanel(){
  const acts=[
    ['New Client',"openResourceModal('client')"],['New Project',"openResourceModal('project')"],['Create Invoice',"openResourceModal('invoice')"],
    ['Record Expense',"openResourceModal('expense')"],['New Demo Request',"openResourceModal('lead')"],['Send Message',"openResourceModal('message')"],
    ['Add Service',"openResourceModal('service')"],['New Package',"openResourceModal('package')"]
  ];
  document.getElementById('quickPanelList').innerHTML=acts.map(a=>`<div class="menu-item" onclick="${a[1].includes('(')?a[1]:a[1]+'()'};closeAllPanels();">${a[0]}</div>`).join('');
}
function handleGlobalSearch(q){
  const box=document.getElementById('searchResults');
  if(!q||q.length<1){ box.innerHTML='<div class="empty-state" style="padding:30px 18px"><p>Start typing to search across the system.</p></div>'; return; }
  const ql=q.toLowerCase(); let results=[];
  (window.__ERP_SEARCH||[]).forEach(r=>{ if(r.label.toLowerCase().includes(ql)) results.push(r); });
  if(results.length===0){ box.innerHTML=`<div class="empty-state" style="padding:30px 18px"><p>No results for "${q}".</p></div>`; return; }
  box.innerHTML=results.slice(0,6).map((r,i)=>`<div class="menu-item" onclick="window.__erpGo${i}()">${r.icon||'â€¢'} ${r.label}<br><span style="font-size:11px;color:var(--text-tertiary);font-weight:600">${r.sub}</span></div>`).join('');
  results.slice(0,6).forEach((r,i)=>window['__erpGo'+i]=()=>{ r.action(); closeAllPanels(); });
}

/* ---------- Toasts ---------- */
function toast(msg,type='success',sub){
  const stack=document.getElementById('toastStack');
  const cfg=({success:{bg:'var(--success-bg)',c:'var(--success)',ico:'âœ“'},error:{bg:'var(--danger-bg)',c:'var(--danger)',ico:'âœ•'},info:{bg:'var(--info-bg)',c:'var(--info)',ico:'â„¹'},warning:{bg:'var(--warning-bg)',c:'var(--warning)',ico:'!'}})[type]||{bg:'var(--info-bg)',c:'var(--info)',ico:'â„¹'};
  const el=document.createElement('div'); el.className='toast';
  el.innerHTML=`<div class="t-ico" style="background:${cfg.bg};color:${cfg.c}">${cfg.ico}</div><div><p>${msg}</p>${sub?`<span>${sub}</span>`:''}</div>`;
  stack.appendChild(el);
  setTimeout(()=>{ el.classList.add('out'); setTimeout(()=>el.remove(),220); },3400);
}

/* ---------- Modal engine ---------- */
function openModal({title,sub,size='md',bodyHtml,footHtml}){
  const root=document.getElementById('modalRoot');
  root.innerHTML=`
    <div class="modal-overlay" id="activeModalOverlay" onmousedown="if(event.target===this)closeModal()">
      <div class="modal-box ${size}">
        <div class="modal-head">
          <div><h3>${title}</h3>${sub?`<p>${sub}</p>`:''}</div>
          <button class="modal-close" onclick="closeModal()"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
        </div>
        <div class="modal-body">${bodyHtml}</div>
        ${footHtml?`<div class="modal-foot">${footHtml}</div>`:''}
      </div>
    </div>`;
  requestAnimationFrame(()=>document.getElementById('activeModalOverlay').classList.add('open'));
  document.addEventListener('keydown',escCloseModal);
}
function escCloseModal(e){ if(e.key==='Escape') closeModal(); }
function closeModal(){
  const ov=document.getElementById('activeModalOverlay'); if(!ov) return;
  ov.classList.remove('open'); document.removeEventListener('keydown',escCloseModal);
  setTimeout(()=>{document.getElementById('modalRoot').innerHTML='';},200);
}
function confirmAction({title="Are you sure?",message="This action cannot be undone.",confirmLabel="Delete",onConfirm}){
  openModal({title:'',size:'sm',bodyHtml:`<div style="text-align:center">
    <div class="confirm-icon"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.9L1.8 18a2 2 0 001.7 3h17a2 2 0 001.7-3L13.7 3.9a2 2 0 00-3.4 0z"/><path d="M12 9v4M12 17h.01"/></svg></div>
    <h3 style="font-size:17px;margin:0 0 8px;">${title}</h3><p style="color:var(--text-secondary);font-size:13.5px;margin:0;">${message}</p></div>`,
    footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-danger" id="confirmBtn">${confirmLabel}</button>`});
  document.getElementById('confirmBtn').onclick=()=>{ onConfirm&&onConfirm(); closeModal(); };
}

/* ---------- Generic data table ---------- */
function dataTable(cfg){
  const key=cfg.id;
  if(!STATE.tableState[key]) STATE.tableState[key]={page:1,sortKey:null,sortDir:1,selected:new Set(),search:''};
  const ts=STATE.tableState[key];
  let rows=cfg.rows.slice();
  if(ts.search){ const q=ts.search.toLowerCase(); rows=rows.filter(r=>Object.values(r).some(v=>String(v).toLowerCase().includes(q))); }
  if(ts.sortKey){ rows.sort((a,b)=>{ let va=a[ts.sortKey],vb=b[ts.sortKey]; if(typeof va==='number') return (va-vb)*ts.sortDir; return String(va).localeCompare(String(vb))*ts.sortDir; }); }
  const pageSize=cfg.pageSize||8;
  const totalPages=Math.max(1,Math.ceil(rows.length/pageSize));
  ts.page=Math.min(ts.page,totalPages);
  const start=(ts.page-1)*pageSize;
  const pageRows=rows.slice(start,start+pageSize);

  if(rows.length===0){
    return `<div class="table-card"><div class="empty-state">
      <div class="es-ico">${ICONS.reports}</div><h3>No records found</h3>
      <p>There are currently no records matching your search or filters.</p>
      ${cfg.emptyAction?`<button class="btn btn-accent" onclick="${cfg.emptyAction}">+ ${cfg.emptyLabel||'Add New'}</button>`:''}
    </div></div>`;
  }

  let head=`<tr>${cfg.bulk?`<th style="width:36px"><input type="checkbox" class="checkbox" onclick="toggleSelectAll('${key}',this.checked)"></th>`:''}`;
  cfg.columns.forEach(c=>{ head+=`<th onclick="${c.sortable!==false?`sortTable('${key}','${c.key}')`:''}">${c.label} ${ts.sortKey===c.key?(ts.sortDir===1?'â†‘':'â†“'):''}</th>`; });
  head+=`<th style="width:60px">Actions</th></tr>`;

  let body='';
  pageRows.forEach((row,i)=>{
    const ridx=start+i;
    body+=`<tr>${cfg.bulk?`<td><input type="checkbox" class="checkbox" data-ridx="${ridx}" onclick="toggleSelectRow('${key}',${ridx},this.checked)" ${ts.selected.has(ridx)?'checked':''}></td>`:''}`;
    cfg.columns.forEach(c=>{ body+=`<td>${c.render?c.render(row):(row[c.key]??'')}</td>`; });
    body+=`<td>${rowActionsMenu(key,ridx,cfg.actions||[],row)}</td></tr>`;
  });

  const bulkBar=(cfg.bulk && ts.selected.size>0)?`<div class="bulk-bar">${ts.selected.size} selected
    <button class="btn btn-sm btn-secondary" onclick="toast('Exported selected','success')">Export</button>
    <button class="btn btn-sm btn-danger" onclick="bulkDeleteConfirm('${key}')">Delete Selected</button>
    <button class="btn btn-sm btn-ghost" onclick="clearSelection('${key}')" style="margin-left:auto">Clear</button></div>`:'';

  let pag=`<div class="pagination"><button class="page-btn" ${ts.page===1?'disabled':''} onclick="changePage('${key}',${ts.page-1})">â€¹</button>`;
  for(let p=1;p<=totalPages;p++){
    if(totalPages>7 && Math.abs(p-ts.page)>2 && p!==1 && p!==totalPages){ if(p===2||p===totalPages-1) pag+=`<span style="padding:0 4px;color:var(--text-tertiary)">â€¦</span>`; continue; }
    pag+=`<button class="page-btn ${p===ts.page?'active':''}" onclick="changePage('${key}',${p})">${p}</button>`;
  }
  pag+=`<button class="page-btn" ${ts.page===totalPages?'disabled':''} onclick="changePage('${key}',${ts.page+1})">â€º</button></div>`;

  return `<div class="table-card">${bulkBar}<div class="table-scroll"><table class="data-table"><thead>${head}</thead><tbody>${body}</tbody></table></div>
    <div class="table-footer"><span class="tf-info">Showing ${start+1}â€“${Math.min(start+pageSize,rows.length)} of ${rows.length} records</span>${pag}</div></div>`;
}
function rowActionsMenu(tkey,ridx,actions,row){
  const menuId='am-'+tkey+'-'+ridx; if(!actions.length) return '';
  return `<div class="action-menu-wrap"><button class="action-trigger" onclick="toggleActionMenu('${menuId}')">
    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><circle cx="12" cy="5" r=".6"/><circle cx="12" cy="12" r=".6"/><circle cx="12" cy="19" r=".6"/></svg>
  </button><div class="action-menu" id="${menuId}">${actions.map(a=>`<button class="${a.danger?'danger':''}" onclick='${a.handler}(${JSON.stringify(row.id)})'>${a.label}</button>`).join('')}</div></div>`;
}
function sortTable(key,col){ const ts=STATE.tableState[key]; if(ts.sortKey===col) ts.sortDir*=-1; else {ts.sortKey=col;ts.sortDir=1;} renderPage(); }
function changePage(key,p){ if(p<1) return; STATE.tableState[key].page=p; renderPage(); }
function toggleSelectAll(key,checked){ const ts=STATE.tableState[key]; ts.selected=new Set(); if(checked){ document.querySelectorAll(`#pageContent input[data-ridx]`).forEach(cb=>ts.selected.add(parseInt(cb.dataset.ridx))); } renderPage(); }
function toggleSelectRow(key,idx,checked){ const ts=STATE.tableState[key]; if(checked) ts.selected.add(idx); else ts.selected.delete(idx); renderPage(); }
function clearSelection(key){ STATE.tableState[key].selected=new Set(); renderPage(); }
function bulkDeleteConfirm(key){ confirmAction({title:'Delete selected records?',message:'This will permanently remove the selected records.',confirmLabel:'Delete All',onConfirm:()=>{ STATE.tableState[key].selected=new Set(); toast('Selected records deleted','success'); renderPage(); }}); }
function tableSearch(key,val){ if(!STATE.tableState[key]) STATE.tableState[key]={}; STATE.tableState[key].search=val; if(TABLE_RENDERERS[key]) TABLE_RENDERERS[key](); }
function tableFilter(key,field,val){ if(!STATE.tableState[key]) STATE.tableState[key]={page:1}; STATE.tableState[key][field]=val; STATE.tableState[key].page=1; if(TABLE_RENDERERS[key]) TABLE_RENDERERS[key](); }

/* ---------- Badge + KPI helpers ---------- */
function statusBadge(status){
  const map={Active:'success',Completed:'success',Approved:'success',Paid:'success',Published:'success',Available:'success',Sent:'success',Established:'success',Inactive:'neutral',Draft:'neutral',New:'info',Pending:'warning',Scheduled:'info','First-time':'info',Overdue:'danger',Rejected:'danger','Needs Repair':'danger',Booked:'warning',Urgent:'danger',Normal:'neutral','Prayed For':'success'};
  return `<span class="badge badge-${map[status]||'neutral'} badge-dotted">${status}</span>`;
}
function kpiCard(label,value,trend,dir,icon,bg,color,spark){
  return `<div class="kpi-card">
    <div class="kpi-top"><div class="kpi-icon" style="background:${bg};color:${color}">${ICONS[icon]}</div>
      <div class="kpi-trend ${dir}">${dir==='up'?'â–²':'â–¼'} ${trend}</div></div>
    <div class="kpi-value">${value}</div><div class="kpi-label">${label}</div>
    <canvas class="spark" data-spark='${JSON.stringify(spark)}' data-color="${color}"></canvas></div>`;
}
function quickBtn(label,icon,fn){ return `<button class="qa-btn" onclick="${fn}()"><div class="qa-ico">${ICONS[icon]}</div><span>${label}</span></button>`; }
function money(n){ return 'TZS '+Number(n).toLocaleString('en-US'); }

/* ---------- Charts ---------- */
let chartInstances=[];
function destroyCharts(){ chartInstances.forEach(c=>{ try{c.destroy();}catch(e){} }); chartInstances=[]; }
function renderSparks(){
  document.querySelectorAll('canvas[data-spark]').forEach(cv=>{
    const data=JSON.parse(cv.dataset.spark); const color=cv.dataset.color;
    const ch=new Chart(cv,{type:'line',data:{labels:data.map((_,i)=>i),datasets:[{data,borderColor:color,borderWidth:2,tension:.4,pointRadius:0,fill:true,backgroundColor:color+'22'}]},
      options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false},tooltip:{enabled:false}},scales:{x:{display:false},y:{display:false}}}});
    chartInstances.push(ch);
  });
}
function lineChart(id,labels,datasets,opts){
  const cv=document.getElementById(id); if(!cv) return;
  chartInstances.push(new Chart(cv,{type:'line',data:{labels,datasets},options:Object.assign({responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'bottom',labels:{usePointStyle:true,boxWidth:8,font:{family:'Manrope',weight:600,size:11}}}},scales:{y:{grid:{color:'rgba(15,23,42,.06)'}},x:{grid:{display:false}}}},opts||{})}));
}
function doughnutChart(id,labels,data,colors){
  const cv=document.getElementById(id); if(!cv) return;
  chartInstances.push(new Chart(cv,{type:'doughnut',data:{labels,datasets:[{data,backgroundColor:colors,borderWidth:0}]},
    options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{position:'right',labels:{boxWidth:9,font:{family:'Manrope',size:10.5,weight:600}}}}}}));
}
function barChart(id,labels,data,color){
  const cv=document.getElementById(id); if(!cv) return;
  chartInstances.push(new Chart(cv,{type:'bar',data:{labels,datasets:[{label:'Amount',data,backgroundColor:color||'#2563EB',borderRadius:6}]},
    options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{y:{grid:{color:'rgba(15,23,42,.06)'}},x:{grid:{display:false}}}}}));
}

@yield('app_scripts')
</script>
</body>
</html>
