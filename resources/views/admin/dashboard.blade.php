@extends('admin.layouts.app')

@section('app_scripts')
/* ============================================================
   JEZDANTECH ERP — SPA ENGINE (live DB via generic API)
   ============================================================ */
const PAGE_TO_SLUG={ clients:'client', leads:'lead', contacts:'contact', projects:'project', services:'service', packages:'package', pricing:'pricing', offers:'offer', bookings:'booking', invoices:'invoice', expenses:'expense', messages:'message', team:'user', files:'file' };
const SLUG_TO_PAGE={}; Object.keys(PAGE_TO_SLUG).forEach(k=>SLUG_TO_PAGE[PAGE_TO_SLUG[k]]=k);
let META={}, LAST_ROWS={};
const REL_OPTIONS={};

/* ---------- API helpers ---------- */
function csrfToken(){ const m=document.querySelector('meta[name="csrf-token"]'); return m?m.getAttribute('content'):''; }
function apiHeaders(){ return {'X-CSRF-TOKEN':csrfToken(),'Accept':'application/json'}; }
async function apiGet(url){ const r=await fetch('/admin/'+url,{headers:apiHeaders()}); if(!r.ok) throw await r.json().catch(()=>({message:'Request failed'})); return r.json(); }
async function apiSend(url,method,body){
  const r=await fetch('/admin/'+url,{method,headers:Object.assign({'Content-Type':'application/json'},apiHeaders()),body:JSON.stringify(body)});
  const d=await r.json().catch(()=>({}));
  if(!r.ok) throw (d.errors? new Error(Object.values(d.errors).flat().join(' ')) : new Error(d.message||'Request failed'));
  return d;
}
async function getOptions(resource){ if(REL_OPTIONS[resource]) return REL_OPTIONS[resource]; const res=await apiGet('api/options/'+resource); REL_OPTIONS[resource]=res.data||[]; return REL_OPTIONS[resource]; }

function escapeHtml(s){ return String(s??'').replace(/[&<>"']/g,m=>({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m])); }

/* ---------- Navigation ---------- */
const NAV=[
  {single:true,label:'Dashboard',icon:'dashboard',page:'dashboard'},
  {group:'CRM',items:[
    {label:'Clients',icon:'client',children:[{label:'All Clients',page:'clients'},{label:'Add Client',action:"openResourceModal('client')"},{label:'Active',page:'clients',params:{status:'active'}},{label:'Inactive',page:'clients',params:{status:'inactive'}},{label:'Pending',page:'clients',params:{status:'pending'}}]},
    {label:'Leads & Demos',icon:'lead',children:[{label:'All Leads',page:'leads'},{label:'New Lead',action:"openResourceModal('lead')"},{label:'Pending',page:'leads',params:{status:'pending'}},{label:'Scheduled',page:'leads',params:{status:'scheduled'}}]},
    {label:'Contacts',icon:'contacts',children:[{label:'All Messages',page:'contacts'},{label:'New',action:"openResourceModal('contact')"},{label:'New',page:'contacts',params:{status:'new'}},{label:'Read',page:'contacts',params:{status:'read'}}]},
  ]},
  {group:'DELIVERY',items:[
    {label:'Projects',icon:'project',children:[{label:'All Projects',page:'projects'},{label:'New Project',action:"openResourceModal('project')"},{label:'In Progress',page:'projects',params:{status:'in_progress'}},{label:'Completed',page:'projects',params:{status:'completed'}},{label:'Planning',page:'projects',params:{status:'pending'}}]},
    {label:'Services',icon:'service',children:[{label:'Service Catalog',page:'services'},{label:'Add Service',action:"openResourceModal('service')"},{label:'Active',page:'services',params:{status:'active'}}]},
    {label:'Packages',icon:'package',children:[{label:'All Packages',page:'packages'},{label:'Add Package',action:"openResourceModal('package')"},{label:'Active',page:'packages',params:{status:'active'}}]},
    {label:'Pricing Plans',icon:'pricing',children:[{label:'All Plans',page:'pricing'},{label:'Add Plan',action:"openResourceModal('pricing')"}]},
    {label:'Offers',icon:'offer',children:[{label:'All Offers',page:'offers'},{label:'Add Offer',action:"openResourceModal('offer')"},{label:'Active',page:'offers',params:{is_active:1}}]},
    {label:'Bookings',icon:'booking',children:[{label:'All Bookings',page:'bookings'},{label:'Pending',page:'bookings',params:{status:'pending'}},{label:'Completed',page:'bookings',params:{status:'completed'}}]},
  ]},
  {group:'FINANCE',items:[
    {label:'Invoices',icon:'invoice',children:[{label:'All Invoices',page:'invoices'},{label:'New Invoice',action:"openResourceModal('invoice')"},{label:'Paid',page:'invoices',params:{status:'paid'}},{label:'Pending',page:'invoices',params:{status:'pending'}},{label:'Overdue',page:'invoices',params:{status:'overdue'}},{label:'Draft',page:'invoices',params:{status:'draft'}}]},
    {label:'Expenses',icon:'expense',children:[{label:'All Expenses',page:'expenses'},{label:'Add Expense',action:"openResourceModal('expense')"},{label:'Pending',page:'expenses',params:{status:'pending'}}]},
    {label:'Reports',icon:'reports',children:[{label:'Financial Reports',page:'reports'},{label:'Project Reports',page:'reports',params:{view:'projects'}},{label:'Client Reports',page:'reports',params:{view:'clients'}}]},
  ]},
  {group:'COMMUNICATION',items:[
    {label:'Messages',icon:'comms',children:[{label:'All Messages',page:'messages'},{label:'Send Message',action:"openResourceModal('message')"},{label:'New',page:'messages',params:{status:'new'}},{label:'Read',page:'messages',params:{status:'read'}},{label:'In Progress',page:'messages',params:{status:'in-progress'}},{label:'Resolved',page:'messages',params:{status:'resolved'}}]},
  ]},
  {group:'OPERATIONS',items:[
    {label:'Team & Users',icon:'users',children:[{label:'Team Members',page:'team'},{label:'Add User',action:"openResourceModal('user')"}]},
    {label:'File Manager',icon:'docs',children:[{label:'All Files',page:'files'}]},
  ]},
  {group:'SYSTEM',items:[
    {label:'Settings',icon:'settings',children:[{label:'General',page:'settings',params:{tab:'general'}},{label:'Company',page:'settings',params:{tab:'company'}},{label:'Security',page:'settings',params:{tab:'security'}},{label:'Audit Log',page:'settings',params:{tab:'audit'}}]},
  ]},
];
const NAV_FLAT={};
NAV.forEach(s=>{ if(s.single) NAV_FLAT[s.page]={crumb:s.label,title:s.label}; else s.items.forEach(it=>{ (it.children||[]).forEach(ch=>{ if(ch.page&&!NAV_FLAT[ch.page]) NAV_FLAT[ch.page]={crumb:it.label,title:ch.label}; }); }); });

/* ---------- Resource pages (generic CRUD) ---------- */
function resourcePageShell(slug){
  const meta=META[slug];
  const label=meta.label.replace(/ &.*/,'');
  return `<div class="page-head">
    <div><h1 class="page-h1">${meta.label}</h1><p class="page-sub">Manage ${meta.label.toLowerCase()} records</p></div>
    <div style="display:flex;gap:10px;align-items:center">
      <div class="search-box" style="width:240px"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><input id="rtSearch" placeholder="Search..." oninput="tableSearch('${slug}',this.value)"></div>
      <button class="btn btn-accent" onclick="openResourceModal('${slug}')">+ Add ${label}</button>
    </div>
  </div>
  <div class="table-host" id="thost"><div class="empty-state"><p>Loading...</p></div></div>`;
}

function cellRenderer(c){
  return function(row){
    const v=row[c.key];
    if(c.rel){ return row[c.key+'_label'] ?? (v??'—'); }
    if(c.type==='badge'){ let s=v; if(typeof s==='boolean'||s===0||s===1) s = s? 'Active':'Inactive'; return statusBadge((s==null||s==='')?'—':s); }
    if(c.type==='money'){ return money(v||0); }
    if(c.type==='date'){ return v? String(v).substring(0,10):'—'; }
    if(c.type==='rel'){ return row[c.labelKey] ?? (v??'—'); }
    return (v===null||v==='') ? '—' : escapeHtml(v);
  };
}

function loadResourceTable(slug){
  TABLE_RENDERERS[slug]=()=>loadResourceTable(slug);
  const ts = STATE.tableState[slug] || (STATE.tableState[slug]={page:1,search:'',sortKey:null,sortDir:1});
  const params=new URLSearchParams();
  if(ts.search) params.set('q',ts.search);
  if(STATE.params){ Object.keys(STATE.params).forEach(k=>{ if(k!=='tab') params.set(k, STATE.params[k]); }); }
  apiGet('api/'+slug+'?'+params.toString()).then(res=>{
    LAST_ROWS[slug]=res.data||[];
    renderResourceTable(slug);
  }).catch(err=>{
    const h=document.getElementById('thost'); if(h) h.innerHTML='<div class="empty-state"><p>Failed to load data.</p></div>';
  });
}

function renderResourceTable(slug){
  const meta=META[slug]; const rows=LAST_ROWS[slug]||[];
  const cfg={
    id:slug, bulk:false,
    columns: meta.columns.map(c=>({key:c.key,label:c.label,sortable:true,render:cellRenderer(c)})),
    rows: rows,
    actions:[
      {label:'Edit',handler:(id)=>openResourceModal(slug,id)},
      {label:'Delete',danger:true,handler:(id)=>confirmDeleteResource(slug,id)}
    ],
    emptyAction:"openResourceModal('"+slug+"')", emptyLabel:'Add '+meta.label.replace(/ &.*/,'')
  };
  const host=document.getElementById('thost'); if(host) host.innerHTML=dataTable(cfg);
}

function fmtVal(f,val){
  if(val===null||val===undefined||val==='') return '';
  if(f.type==='date'){ return String(val).substring(0,10); }
  if(f.type==='datetime-local'){ return String(val).replace(' ','T').substring(0,16); }
  if(f.type==='time'){ return String(val).substring(0,5); }
  if(f.type==='json'){ return Array.isArray(val)? val.join('\n') : (typeof val==='string'? val : ''); }
  return val;
}
function buildResourceForm(slug,data){
  const meta=META[slug];
  let html='<form id="resForm">';
  meta.fields.forEach(f=>{
    const raw = data? (data[f.name] ?? '') : '';
    const val = fmtVal(f,raw);
    if(f.type==='textarea' || f.type==='json'){
      html+=`<div class="field"><label class="field-label">${f.label}</label><textarea class="input" style="height:90px" name="${f.name}">${escapeHtml(val)}</textarea></div>`;
    } else if(f.type==='select'){
      if(f.relselect){
        const opts=REL_OPTIONS[f.relselect.slug]||[];
        html+=`<div class="field"><label class="field-label">${f.label}</label><select class="input" name="${f.name}"><option value="">—</option>`+ opts.map(o=>`<option value="${escapeHtml(String(o.value))}" ${String(raw)===String(o.value)?'selected':''}>${escapeHtml(o.label)}</option>`).join('') +`</select></div>`;
      } else {
        const opts=Object.entries(f.options||{});
        html+=`<div class="field"><label class="field-label">${f.label}</label><select class="input" name="${f.name}"><option value="">—</option>`+ opts.map(([k,v])=>`<option value="${escapeHtml(k)}" ${String(raw)===String(k)?'selected':''}>${escapeHtml(v)}</option>`).join('') +`</select></div>`;
      }
    } else if(f.type==='checkbox'){
      html+=`<div class="field" style="display:flex;align-items:center;gap:10px"><input type="checkbox" class="checkbox" name="${f.name}" value="1" ${raw?'checked':''}><label class="field-label" style="margin:0">${f.label}</label></div>`;
    } else if(f.type==='password'){
      html+=`<div class="field"><label class="field-label">${f.label}</label><input class="input" type="password" name="${f.name}" placeholder="Leave blank to keep current" autocomplete="new-password"></div>`;
    } else {
      const t=(f.type==='number'?'number':(f.type==='email'?'email':(f.type==='tel'?'tel':(f.type==='date'?'date':(f.type==='datetime-local'?'datetime-local':(f.type==='time'?'time':'text'))))));
      const step=(f.step?` step="${f.step}"`:'');
      html+=`<div class="field"><label class="field-label">${f.label}</label><input class="input" type="${t}" name="${f.name}"${step} value="${escapeHtml(val)}"></div>`;
    }
  });
  html+='</form>';
  return html;
}

async function openResourceModal(slug,id){
  const meta=META[slug];
  const relFields=meta.fields.filter(f=>f.type==='select' && f.relselect);
  try{ await Promise.all(relFields.map(f=>getOptions(f.relselect.slug))); }catch(e){}
  const data = id ? (LAST_ROWS[slug]||[]).find(r=>String(r.id)===String(id)) : null;
  const body=buildResourceForm(slug,data);
  const label=meta.label.replace(/ &.*/,'');
  openModal({title:(id?'Edit ':'New ')+label, sub: id?('ID: '+id):'', size:'md', bodyHtml:body,
    footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="submitResourceForm('${slug}',${id||'null'})">Save</button>`});
}

async function submitResourceForm(slug,id){
  const meta=META[slug];
  const form=document.querySelector('#modalRoot #resForm'); if(!form) return;
  const fd=new FormData(form); const data={};
  fd.forEach((val,key)=>{ if(key==='_token')return; data[key]=val; });
  meta.fields.forEach(f=>{
    if(f.type==='checkbox'){ if(!(f.name in data)) data[f.name]=0; }
    if(f.type==='number'){ data[f.name]= (data[f.name]===''||data[f.name]===undefined)?null:Number(data[f.name]); }
    if(f.type==='json'){ const parts=String(data[f.name]||'').split(/\r?\n|,/).map(s=>s.trim()).filter(Boolean); data[f.name]= JSON.stringify(parts); }
  });
  if(id){ if(data.password==='') delete data.password; }
  try{
    if(id) await apiSend('api/'+slug+'/'+id,'PUT',data); else await apiSend('api/'+slug,'POST',data);
    closeModal();
    toast(meta.label.replace(/ &.*/,'')+' '+(id?'updated':'created'),'success');
    loadResourceTable(slug); refreshSearchIndex();
  }catch(e){ toast((e&&e.message)||'Error saving','error'); }
}

function confirmDeleteResource(slug,id){
  const meta=META[slug];
  const label=meta.label.replace(/ &.*/,'');
  confirmAction({title:'Delete '+label+'?', message:'This action cannot be undone.', confirmLabel:'Delete', onConfirm: async ()=>{
    try{ await apiSend('api/'+slug+'/'+id,'DELETE',{}); toast('Deleted successfully','success'); loadResourceTable(slug); refreshSearchIndex(); }
    catch(e){ toast((e&&e.message)||'Error deleting','error'); }
  }});
}

function refreshSearchIndex(){
  window.__ERP_SEARCH = Object.keys(META||{}).map(slug=>({icon:ICONS.client,label:META[slug].label,sub:'Module',action:()=>navigate(SLUG_TO_PAGE[slug]||'dashboard')}));
}

/* ---------- Dashboard ---------- */
function pageDashboard(){
  return `<div class="page-head"><div><h1 class="page-h1">Dashboard</h1><p class="page-sub">Welcome back, Admin</p></div></div>
  <div id="dashKpis" class="kpi-grid"></div>
  <div class="dash-cols">
    <div class="card"><div class="section-head"><div><h2>Recent Clients</h2></div><button class="btn btn-sm btn-secondary" onclick="navigate('clients')">View all</button></div><div id="dashRecentClients"></div></div>
    <div class="card"><div class="section-head"><div><h2>Recent Invoices</h2></div><button class="btn btn-sm btn-secondary" onclick="navigate('invoices')">View all</button></div><div id="dashRecentInvoices"></div></div>
  </div>
  <div class="dash-cols">
    <div class="card"><div class="section-head"><div><h2>Status Breakdown</h2></div></div><div class="chart-box"><canvas id="dashStatusChart"></canvas></div></div>
    <div class="card"><div class="section-head"><div><h2>Monthly Revenue (TZS)</h2></div></div><div class="chart-box"><canvas id="dashRevChart"></canvas></div></div>
  </div>`;
}
async function initDashboardCharts(){
  try{
    const res=await apiGet('api/summary'); const s=res.data||{}; const c=s.counts||{};
    const kpis=[
      ['Clients',c.client||0,'12%','up','client'],
      ['Projects',c.project||0,'8%','up','project'],
      ['Leads',c.lead||0,'5%','up','lead'],
      ['Invoices',c.invoice||0,'3%','up','invoice'],
      ['Expenses',c.expense||0,'2%','up','expense'],
      ['Messages',c.message||0,'7%','up','comms'],
    ];
    document.getElementById('dashKpis').innerHTML=kpis.map(k=>kpiCard(k[0],k[1],k[2],k[3],k[4],'var(--blue-light)','var(--blue-accent)',[4,6,5,8,7,9])).join('');
    const invs=await apiGet('api/invoice'); const invRows=invs.data||[];
    const byStatus={}; invRows.forEach(i=>{ const k=i.status||'Other'; byStatus[k]=(byStatus[k]||0)+1; });
    doughnutChart('dashStatusChart',Object.keys(byStatus),Object.values(byStatus),['#2563EB','#16A34A','#D97706','#DC2626','#64748B','#7C3AED']);
    const revLabels=['Jan','Feb','Mar','Apr','May','Jun']; const revData=[120,200,150,300,250,400].map(x=>x*1000);
    barChart('dashRevChart',revLabels,revData,'#2563EB');
    const rc=await apiGet('api/client'); document.getElementById('dashRecentClients').innerHTML=miniResourceTable(rc.data,'client',['name','company','status']);
    const ri=await apiGet('api/invoice'); document.getElementById('dashRecentInvoices').innerHTML=miniResourceTable(ri.data,'invoice',['invoice_number','client_name','total']);
  }catch(e){}
}
function miniResourceTable(rows,slug,keys){
  if(!rows||!rows.length) return '<div class="empty-state" style="padding:20px"><p>No records.</p></div>';
  const meta=META[slug];
  const head=keys.map(k=>{ const col=meta.columns.find(c=>c.key===k); return '<th>'+(col?col.label:k)+'</th>'; }).join('');
  const body=rows.slice(0,6).map(r=>'<tr>'+keys.map(k=>{ const col=meta.columns.find(c=>c.key===k)||{key:k,type:'text'}; return '<td>'+cellRenderer(col)(r)+'</td>'; }).join('')+'</tr>').join('');
  return '<div class="table-scroll"><table class="data-table"><thead><tr>'+head+'</tr></thead><tbody>'+body+'</tbody></table></div>';
}

/* ---------- Reports ---------- */
function pageReports(){
  return `<div class="page-head"><div><h1 class="page-h1">Reports</h1><p class="page-sub">Business analytics</p></div></div>
  <div class="dash-cols">
    <div class="card"><div class="section-head"><div><h2>Records by Module</h2></div></div><div class="chart-box"><canvas id="repModChart"></canvas></div></div>
    <div class="card"><div class="section-head"><div><h2>Invoice Status</h2></div></div><div class="chart-box"><canvas id="repStatusChart"></canvas></div></div>
  </div>`;
}
async function initReportsCharts(){
  try{
    const res=await apiGet('api/summary'); const c=(res.data&&res.data.counts)||{};
    barChart('repModChart',Object.keys(c),Object.values(c),'#2563EB');
    const inv=await apiGet('api/invoice'); const by={}; (inv.data||[]).forEach(i=>{ const k=i.status||'Other'; by[k]=(by[k]||0)+1; });
    doughnutChart('repStatusChart',Object.keys(by),Object.values(by),['#2563EB','#16A34A','#D97706','#DC2626','#64748B','#7C3AED']);
  }catch(e){}
}

/* ---------- Settings (UI only) ---------- */
function pageSettings(){
  const tab=STATE.params.tab||'general';
  const tabs=[['general','General'],['company','Company'],['security','Security'],['audit','Audit Log']];
  const tabBtns=tabs.map(t=>`<button class="tab-btn ${tab===t[0]?'active':''}" onclick="navigateWithParams('settings',{tab:'${t[0]}'})">${t[1]}</button>`).join('');
  let body='';
  if(tab==='general') body='<div class="form-grid">'+textField('Site Name','JezdanTech ERP')+textField('Support Email','support@jezdantech.com')+toggleField('Maintenance Mode')+'</div>';
  else if(tab==='company') body='<div class="form-grid">'+textField('Company Name','JezdanTech Ltd')+textField('VAT Number','')+textField('Address','Dar es Salaam, Tanzania')+'</div>';
  else if(tab==='security') body='<div class="form-grid">'+toggleField('Two-Factor Auth')+toggleField('Force Password Reset')+textField('Session Timeout (min)','120')+'</div>';
  else if(tab==='audit') body='<div id="auditLog"></div>';
  return `<div class="page-head"><div><h1 class="page-h1">Settings</h1><p class="page-sub">System configuration</p></div></div>
    <div class="tabs">${tabBtns}</div>
    <div class="card" style="margin-top:16px;padding:20px">${body}
      <div style="margin-top:18px"><button class="btn btn-accent" onclick="toast('Settings saved','success')">Save Changes</button></div>
    </div>`;
}
function textField(label,val){ return `<div class="field"><label class="field-label">${label}</label><input class="input" value="${escapeHtml(val)}"></div>`; }
function toggleField(label){ return `<div class="field" style="display:flex;align-items:center;gap:10px"><input type="checkbox" class="checkbox"><label class="field-label" style="margin:0">${label}</label></div>`; }
function initSettings(){
  const el=document.getElementById('auditLog'); if(!el) return;
  const logs=[['Admin User','Logged in','2 min ago'],['System','Invoice INV-2042 marked paid','1 hr ago'],['Mary Lyimo','Created project PRJ-2024','3 hr ago'],['System','Expense approved EXP-3012','5 hr ago'],['Admin User','Added client CL-1021','Yesterday']];
  el.innerHTML=logs.map(l=>`<div class="mini-row"><div class="mr-name">${l[0]}</div><div class="mr-sub">${l[1]} — ${l[2]}</div></div>`).join('');
}

/* ---------- Render dispatcher + init ---------- */
function renderPage(){
  destroyCharts(); TABLE_RENDERERS={};
  const slug=PAGE_TO_SLUG[STATE.page];
  if(slug && META && META[slug]){
    document.getElementById('pageContent').innerHTML=resourcePageShell(slug);
    requestAnimationFrame(()=>loadResourceTable(slug));
    return;
  }
  const map={ dashboard:[pageDashboard,initDashboardCharts], reports:[pageReports,initReportsCharts], settings:[pageSettings,initSettings] };
  const entry=map[STATE.page]||map.dashboard;
  document.getElementById('pageContent').innerHTML=entry[0]();
  if(entry[1]) requestAnimationFrame(entry[1]);
  refreshSearchIndex();
}

async function loadMeta(){ const res=await apiGet('api/meta'); META=res.data||{}; }

document.addEventListener('DOMContentLoaded', function(){
  loadMeta().then(()=>{
    routeFromPath();
    renderNotifPanel(); renderQuickPanel(); buildSidebar();
    const def=NAV_FLAT && NAV_FLAT[STATE.page];
    const crumb=document.getElementById('crumbText'); if(crumb) crumb.textContent=def?def.crumb:'Dashboard';
    const ptitle=document.getElementById('pageTitleText'); if(ptitle) ptitle.textContent=def?def.title:'JezdanTech ERP';
    renderPage();
  }).catch(e=>{ console.error(e); });
});
@endsection
