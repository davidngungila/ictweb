@extends('admin.layouts.app')

@section('app_scripts')
<script>
/* ============================================================
   JEZDANTECH ERP — DATA, NAV & PAGES
   ============================================================ */
const TZ=['Juma','Neema','Asha','Baraka','Said','Zainab','Mwajuma','Khalfan','Mariam','Ibrahim','Hassan','Fatma','Joseph','Grace','Peter','Mary','John','Elizabeth','Anna','Michael','Rose','Emmanuel','Agnes','Paul'];
const LN=['Mushi','Kileo','Mwakalinga','Massawe','Kimaro','Shayo','Lyimo','Ndosi','Temba','Mrema','Kessy','Swai','Urio','Mallya','Kimambo','Mbwambo','Sanga','Materu','Nnko','Kileo'];
function rnd(a){return a[Math.floor(Math.random()*a.length)];}
function rndInt(min,max){return Math.floor(Math.random()*(max-min+1))+min;}
function pad(n){return n<10?'0'+n:n;}
function initials(name){return name.split(' ').map(w=>w[0]).slice(0,2).join('').toUpperCase();}
function fmtDate(d){return d.toLocaleDateString('en-GB',{day:'2-digit',month:'short',year:'numeric'});}
function daysAgo(n){const d=new Date();d.setDate(d.getDate()-n);return d;}
function money(n){return 'TZS '+Number(n).toLocaleString('en-US');}

/* ---------- Mock data ---------- */
let CLIENTS=[],PROJECTS=[],LEADS=[],CONTACTS=[],SERVICES=[],PACKAGES=[],PRICING=[],OFFERS=[],BOOKINGS=[],INVOICES=[],EXPENSES=[],MESSAGES=[],TEAM=[],FILES=[];
(function seed(){
  const cstat=['Active','Active','Active','Lead','Lead','Inactive'];
  for(let i=1;i<=26;i++){const fn=rnd(TZ),ln=rnd(LN);CLIENTS.push({id:'CL-'+(1000+i),name:fn+' '+ln,company:rnd(['Safari Lodge Co.','Kilimanjaro Tours','Bongo Media','Twiga Logistics','Mawingu Schools','Pamoja Bank','Zanzi Resort','Duka Plus','Afya Clinic','Simba Energy']),email:fn.toLowerCase()+'[at]example.co.tz',phone:'+255 7'+rndInt(10,99)+' '+rndInt(100,999)+' '+rndInt(100,999),status:rnd(cstat),projects:rndInt(0,6),totalSpent:rndInt(2,80)*100000,joined:fmtDate(daysAgo(rndInt(10,1600)))});}
  const ptypes=['Web Development','Mobile App','System Development','Network Install','Cybersecurity','Cloud Services','IT Support'];
  const pstat=['Planning','In Progress','In Progress','On Hold','Completed','Completed'];
  for(let i=1;i<=22;i++){const c=rnd(CLIENTS);PROJECTS.push({id:'PRJ-'+(2000+i),name:rnd(['Booking Portal','ERP Suite','E-learning App','Inventory System','Marketing Site','POS System','CRM Tool','Analytics Dashboard'])+' '+rndInt(1,99),client:c.name,type:rnd(ptypes),status:rnd(pstat),progress:rndInt(5,100),deadline:fmtDate(daysAgo(-rndInt(5,120))),value:rndInt(3,90)*100000});}
  const lstat=['New','New','Contacted','Qualified','Won','Lost'];
  for(let i=1;i<=18;i++){const fn=rnd(TZ),ln=rnd(LN);LEADS.push({id:'DR-'+(3000+i),name:fn+' '+ln,company:rnd(['HighView Hotels','Toto Farms','Mlimani Tech','Coast Line Ltd','Ubuntu NGO']),service:rnd(ptypes),budget:rndInt(2,60)*100000,status:rnd(lstat),date:fmtDate(daysAgo(rndInt(0,60)))});}
  const cstat2=['New','New','Replied','Replied','Archived'];
  for(let i=1;i<=14;i++){const fn=rnd(TZ),ln=rnd(LN);CONTACTS.push({id:'CT-'+(4000+i),name:fn+' '+ln,email:fn.toLowerCase()+'[at]mail.com',subject:rnd(['Quote request','Partnership','Support issue','Website redesign','Mobile app idea']),status:rnd(cstat2),date:fmtDate(daysAgo(rndInt(0,40)))});}
  const scat=['Web','Mobile','Systems','Network','Security','Cloud','Consultancy'];
  for(let i=1;i<=12;i++){SERVICES.push({id:'SV-'+(5000+i),name:rnd(['Custom Web App','Android App','iOS App','ERP System','CCTV Install','LAN Setup','Cloud Migration','IT Audit']),category:rnd(scat),price:rndInt(2,50)*100000,active:i%7!==0});}
  for(let i=1;i<=9;i++){PACKAGES.push({id:'PK-'+(6000+i),name:rnd(['Starter Site','Business Web','Pro Web','E-commerce','Mobile MVP','Enterprise System','Support Plus','Security Pack']),price:rndInt(5,200)*100000,features:rndInt(3,12),active:i%8!==0});}
  for(let i=1;i<=6;i++){PRICING.push({id:'PP-'+(7000+i),name:rnd(['Basic','Standard','Professional','Premium','Enterprise','Custom']),price:rndInt(3,120)*100000,period:rnd(['month','month','month','year','year','project']),popular:i===3});}
  for(let i=1;i<=8;i++){OFFERS.push({id:'OF-'+(8000+i),title:rnd(['Q3 Discount','Loyalty Bonus','New Client 20%','Referral Rewards']),client:rnd(CLIENTS).name,discount:rndInt(5,30),status:rnd(['Active','Active','Expired','Draft']),validUntil:fmtDate(daysAgo(-rndInt(5,60)))});}
  const bstat=['Pending','Confirmed','Completed','Cancelled'];
  for(let i=1;i<=16;i++){const c=rnd(CLIENTS);BOOKINGS.push({id:'BK-'+(9000+i),client:c.name,package:rnd(PACKAGES).name,amount:rndInt(5,200)*100000,status:rnd(bstat),date:fmtDate(daysAgo(rndInt(0,90)))});}
  const istat=['Draft','Sent','Paid','Paid','Overdue'];
  for(let i=1;i<=24;i++){const c=rnd(CLIENTS);INVOICES.push({id:'INV-'+(2000+i),client:c.name,amount:rndInt(3,90)*100000,status:rnd(istat),issued:fmtDate(daysAgo(rndInt(0,120))),due:fmtDate(daysAgo(-rndInt(0,30)))});}
  const expcat=['Utilities','Salaries','Software','Hardware','Transport','Marketing','Hosting','Office'];
  const estat=['Pending','Approved','Paid','Rejected'];
  for(let i=1;i<=20;i++){EXPENSES.push({id:'EXP-'+(3000+i),category:rnd(expcat),description:rnd(expcat)+' expense',amount:rndInt(1,40)*100000,method:rnd(['Cash','Bank Transfer','Card']),status:rnd(estat),date:fmtDate(daysAgo(rndInt(0,120)))});}
  const mchan=['SMS','Email','WhatsApp'];
  for(let i=1;i<=12;i++){MESSAGES.push({id:'MSG-'+(4000+i),name:rnd(CLIENTS).name,channel:rnd(mchan),content:rnd(['Project update sent','Invoice reminder','Meeting confirmation','Welcome message']),status:rnd(['Sent','Sent','Draft','Failed']),date:fmtDate(daysAgo(rndInt(0,30)))});}
  const roles=['Administrator','Project Manager','Developer','Designer','Sales Rep','Support Agent','Accountant','Auditor'];
  for(let i=1;i<=12;i++){const fn=rnd(TZ),ln=rnd(LN);TEAM.push({id:'USR-'+(5000+i),name:fn+' '+ln,email:fn.toLowerCase()+'[at]jezdantech.com',role:i===1?'Administrator':rnd(roles),status:i%9===0?'Suspended':'Active',lastLogin:fmtDate(daysAgo(rndInt(0,30)))});}
  const ftypes=['Contract','Design','Report','Invoice','Image','Spec'];
  for(let i=1;i<=14;i++){FILES.push({id:'FL-'+(6000+i),name:rnd(['SOW','Proposal','Wireframe','Contract','UAT Report'])+'-'+rndInt(10,99)+'.'+rnd(['pdf','png','docx','xlsx']),type:rnd(ftypes),size:(rndInt(80,4000))+' KB',uploaded:fmtDate(daysAgo(rndInt(1,300))),access:i%4===0?'Restricted':'Team'});}
})();

/* ---------- Navigation ---------- */
const NAV=[
 {single:true,label:'Dashboard',icon:'dashboard',page:'dashboard'},
 {group:'CRM',items:[
   {label:'Clients',icon:'client',children:[{label:'All Clients',page:'clients'},{label:'Add Client',action:'openClientModal'},{label:'Active',page:'clients',params:{status:'Active'}},{label:'Leads',page:'clients',params:{status:'Lead'}},{label:'Inactive',page:'clients',params:{status:'Inactive'}}]},
   {label:'Leads & Demos',icon:'lead',children:[{label:'All Leads',page:'leads'},{label:'New Lead',action:'openDemoModal'},{label:'Contacted',page:'leads',params:{status:'Contacted'}},{label:'Won',page:'leads',params:{status:'Won'}},{label:'Lost',page:'leads',params:{status:'Lost'}}]},
   {label:'Contacts',icon:'contacts',children:[{label:'All Messages',page:'contacts'},{label:'New',page:'contacts',params:{status:'New'}},{label:'Replied',page:'contacts',params:{status:'Replied'}}]},
 ]},
 {group:'DELIVERY',items:[
   {label:'Projects',icon:'project',children:[{label:'All Projects',page:'projects'},{label:'New Project',action:'openProjectModal'},{label:'In Progress',page:'projects',params:{status:'In Progress'}},{label:'Planning',page:'projects',params:{status:'Planning'}},{label:'Completed',page:'projects',params:{status:'Completed'}}]},
   {label:'Services',icon:'service',children:[{label:'Service Catalog',page:'services'},{label:'Add Service',action:'openServiceModal'},{label:'Active',page:'services',params:{active:true}}]},
   {label:'Packages',icon:'package',children:[{label:'All Packages',page:'packages'},{label:'Add Package',action:'openPackageModal'},{label:'Active',page:'packages',params:{active:true}}]},
   {label:'Pricing Plans',icon:'pricing',children:[{label:'All Plans',page:'pricing'},{label:'Add Plan',action:'openPricingModal'}]},
   {label:'Offers',icon:'offer',children:[{label:'All Offers',page:'offers'},{label:'Add Offer',action:'openOfferModal'},{label:'Active',page:'offers',params:{status:'Active'}}]},
   {label:'Bookings',icon:'booking',children:[{label:'All Bookings',page:'bookings'},{label:'Pending',page:'bookings',params:{status:'Pending'}},{label:'Confirmed',page:'bookings',params:{status:'Confirmed'}}]},
 ]},
 {group:'FINANCE',items:[
   {label:'Invoices',icon:'invoice',children:[{label:'All Invoices',page:'invoices'},{label:'New Invoice',action:'openInvoiceModal'},{label:'Paid',page:'invoices',params:{status:'Paid'}},{label:'Overdue',page:'invoices',params:{status:'Overdue'}},{label:'Draft',page:'invoices',params:{status:'Draft'}}]},
   {label:'Expenses',icon:'expense',children:[{label:'All Expenses',page:'expenses'},{label:'Add Expense',action:'openExpenseModal'},{label:'Pending',page:'expenses',params:{status:'Pending'}}]},
   {label:'Reports',icon:'reports',children:[{label:'Financial Reports',page:'reports'},{label:'Project Reports',page:'reports',params:{view:'projects'}},{label:'Client Reports',page:'reports',params:{view:'clients'}}]},
 ]},
 {group:'COMMUNICATION',items:[
   {label:'Messages',icon:'comms',children:[{label:'All Messages',page:'messages'},{label:'Send Message',action:'openMessageModal'},{label:'Sent',page:'messages',params:{status:'Sent'}}]},
 ]},
 {group:'OPERATIONS',items:[
   {label:'Team & Users',icon:'users',children:[{label:'Team Members',page:'team'},{label:'Active',page:'team',params:{status:'Active'}},{label:'Suspended',page:'team',params:{status:'Suspended'}}]},
   {label:'File Manager',icon:'docs',children:[{label:'All Files',page:'files'}]},
 ]},
 {group:'SYSTEM',items:[
   {label:'Settings',icon:'settings',children:[{label:'General',page:'settings',params:{tab:'general'}},{label:'Company',page:'settings',params:{tab:'company'}},{label:'Security',page:'settings',params:{tab:'security'}},{label:'Audit Log',page:'settings',params:{tab:'audit'}}]},
 ]},
];
const NAV_FLAT={};
NAV.forEach(s=>{ if(s.single) NAV_FLAT[s.page]={crumb:s.label,title:s.label}; else s.items.forEach(it=>{ (it.children||[]).forEach(ch=>{ if(ch.page&&!NAV_FLAT[ch.page]) NAV_FLAT[ch.page]={crumb:it.label,title:ch.label}; }); }); });

/* ---------- Shared detail modal ---------- */
function detailModal(title,rows){
  openModal({title:title,size:'md',bodyHtml:'<div style="padding:4px">'+rows.map(r=>`<div class="info-row"><span>${r[0]}</span><b>${r[1]}</b></div>`).join('')+'</div>'});
}
function avatarCell(name,sub){ return `<div class="cell-user"><div class="cell-avatar">${initials(name)}</div><div><div class="cu-name">${name}</div>${sub?`<div class="cu-sub">${sub}</div>`:''}</div></div>`; }

/* ============================================================
   PAGE: DASHBOARD
   ============================================================ */
function pageDashboard(){
  const totalClients=CLIENTS.length, activeProjects=PROJECTS.filter(p=>p.status==='In Progress').length;
  const revenue=INVOICES.filter(i=>i.status==='Paid').reduce((s,i)=>s+i.amount,0);
  const outstanding=INVOICES.filter(i=>i.status==='Overdue'||i.status==='Draft').reduce((s,i)=>s+i.amount,0);
  const expenses=EXPENSES.filter(e=>e.status==='Paid'||e.status==='Approved').reduce((s,e)=>s+e.amount,0);
  const leads=LEADS.length, completed=PROJECTS.filter(p=>p.status==='Completed').length;
  const m=()=>rndInt(10,40);
  return `<div class="fade-in">
    <div class="welcome-block"><h1>Welcome back, Admin 👋</h1><p>Here's what's happening across JezdanTech — clients, projects, and finances at a glance.</p></div>
    <div class="kpi-grid">
      ${kpiCard('Total Clients',totalClients,'+3 this wk','up','client','var(--blue-light)','var(--blue-accent)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Active Projects',activeProjects,'+2 this wk','up','project','var(--purple-bg)','var(--purple)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Revenue (Paid)',money(revenue),'+14.2%','up','finance','var(--success-bg)','var(--success)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Outstanding',money(outstanding),'-4.1%','down','invoice','var(--warning-bg)','var(--warning)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Expenses',money(expenses),'+6.8%','up','expense','var(--danger-bg)','var(--danger)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Open Leads',leads,'+5 new','up','lead','var(--info-bg)','var(--info)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Completed Projects',completed,'This quarter','up','project','var(--success-bg)','var(--success)',[m(),m(),m(),m(),m(),m(),m()])}
      ${kpiCard('Team Members',TEAM.length,'All active','up','users','var(--blue-light)','var(--blue-accent)',[m(),m(),m(),m(),m(),m(),m()])}
    </div>
    <div class="two-col">
      <div class="glass-card">
        <div class="section-head" style="margin-bottom:14px"><div><h2>Revenue Trend</h2><div class="sub">Paid invoices over recent months</div></div></div>
        <div class="chart-wrap"><canvas id="mainChart"></canvas></div>
      </div>
      <div class="glass-card">
        <div class="section-head" style="margin-bottom:14px"><div><h2>Projects by Status</h2><div class="sub">Current delivery pipeline</div></div></div>
        <div class="chart-wrap" style="height:280px"><canvas id="statusChart"></canvas></div>
      </div>
    </div>
    <div class="two-col" style="grid-template-columns:1fr 1fr">
      <div class="glass-card">
        <div class="section-head"><div><h2>Recent Projects</h2></div><button class="btn btn-sm btn-secondary" onclick="navigate('projects')">View all</button></div>
        <div id="dashProjects"></div>
      </div>
      <div class="glass-card">
        <div class="section-head"><div><h2>Top Expenses</h2></div><button class="btn btn-sm btn-secondary" onclick="navigate('expenses')">View all</button></div>
        <div id="dashExpenses"></div>
      </div>
    </div>
  </div>`;
}
function initDashboardCharts(){
  renderSparks();
  lineChart('mainChart',['Jan','Feb','Mar','Apr','May','Jun','Jul'],[
    {label:'Revenue',data:[8,11,9,13,15,14,18].map(x=>x*100000),borderColor:'#2563EB',backgroundColor:'rgba(37,99,235,.08)',fill:true,tension:.4,pointRadius:3},
    {label:'Expenses',data:[5,6,6,7,8,7,9].map(x=>x*100000),borderColor:'#DC2626',backgroundColor:'rgba(220,38,38,.05)',fill:true,tension:.4,pointRadius:3}
  ]);
  const ps=['Planning','In Progress','On Hold','Completed'];
  doughnutChart('statusChart',ps,ps.map(s=>PROJECTS.filter(p=>p.status===s).length),['#7C3AED','#2563EB','#D97706','#16A34A']);
  const pj=PROJECTS.slice(0,5).map(p=>`<div class="mini-row"><div class="m-ico" style="background:var(--blue-light);color:var(--blue-accent)">${ICONS.project}</div><div class="m-body"><p>${p.name}</p><span>${p.client} · ${p.type}</span></div>${statusBadge(p.status)}</div>`).join('');
  const exp=EXPENSES.slice().sort((a,b)=>b.amount-a.amount).slice(0,5).map(e=>`<div class="mini-row"><div class="m-ico" style="background:var(--danger-bg);color:var(--danger)">${ICONS.expense}</div><div class="m-body"><p>${e.description}</p><span>${e.category}</span></div><b style="font-size:13px">${money(e.amount)}</b></div>`).join('');
  const dp=document.getElementById('dashProjects'); if(dp) dp.innerHTML=pj;
  const de=document.getElementById('dashExpenses'); if(de) de.innerHTML=exp;
}

/* ============================================================
   PAGE: CLIENTS
   ============================================================ */
function pageClients(){
  let rows=CLIENTS.slice();
  if(STATE.params.status) rows=rows.filter(c=>c.status===STATE.params.status);
  return `<div class="fade-in">
    <div class="section-head"><div><h2>Clients</h2><div class="sub">${rows.length} client records</div></div>
      <button class="btn btn-accent" onclick="openClientModal()">+ New Client</button></div>
    <div class="toolbar">
      <div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
        <input placeholder="Search clients..." oninput="tableSearch('clients',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('clients','fStatus',this.value)"><option value="">All Status</option><option ${STATE.params.status==='Active'?'selected':''}>Active</option><option ${STATE.params.status==='Lead'?'selected':''}>Lead</option><option ${STATE.params.status==='Inactive'?'selected':''}>Inactive</option></select>
    </div>
    <div id="tbl-clients"></div>
  </div>`;
}
function renderClientsTable(){
  let rows=CLIENTS.slice();
  const f=STATE.tableState.clients||{}; if(f.fStatus) rows=rows.filter(c=>c.status===f.fStatus);
  document.getElementById('tbl-clients').innerHTML=dataTable({id:'clients',rows,pageSize:8,columns:[
    {key:'name',label:'Client',render:r=>avatarCell(r.name,r.company)},
    {key:'email',label:'Email',render:r=>r.email},
    {key:'phone',label:'Phone'},
    {key:'projects',label:'Projects',render:r=>`<b>${r.projects}</b>`},
    {key:'totalSpent',label:'Total Spent',render:r=>money(r.totalSpent)},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
  ],actions:[
    {label:'View',handler:'viewClient'},{label:'Edit',handler:'editClient'},{label:'Delete',danger:true,handler:'deleteClient'}
  ]});
}
function openClientModal(){
  openModal({title:'New Client',sub:'Add a client to the CRM',size:'md',
    bodyHtml:`<div class="form-grid">
      <div class="field"><label>Full name</label><input id="c_name" placeholder="Jane Mushi"></div>
      <div class="field"><label>Company</label><input id="c_company" placeholder="Acme Ltd"></div>
      <div class="field"><label>Email</label><input id="c_email" placeholder="jane[at]acme.co.tz"></div>
      <div class="field"><label>Phone</label><input id="c_phone" placeholder="+255 7..."></div>
      <div class="field full"><label>Notes</label><textarea id="c_notes" placeholder="Context about this client..."></textarea></div>
    </div>`,
    footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveClient()">Save Client</button>`});
}
function saveClient(){
  const name=document.getElementById('c_name').value||'New Client';
  CLIENTS.push({id:'CL-'+(1000+CLIENTS.length+1),name,company:document.getElementById('c_company').value,email:document.getElementById('c_email').value,phone:document.getElementById('c_phone').value,status:'Lead',projects:0,totalSpent:0,joined:fmtDate(new Date())});
  closeModal(); toast('Client added successfully','success'); navigate('clients');
}
function viewClient(id){ const c=CLIENTS.find(x=>x.id===id); if(!c) return; detailModal(c.name,[['Client ID',c.id],['Company',c.company],['Email',c.email],['Phone',c.phone],['Status',c.status],['Projects',c.projects],['Total Spent',money(c.totalSpent)],['Joined',c.joined]]); }
function editClient(id){ toast('Opening editor for '+id,'info'); }
function deleteClient(id){ confirmAction({title:'Delete client?',message:'This will remove the client record permanently.',confirmLabel:'Delete',onConfirm:()=>{ CLIENTS=CLIENTS.filter(x=>x.id!==id); toast('Client deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: LEADS / DEMO REQUESTS
   ============================================================ */
function pageLeads(){
  let rows=LEADS.slice(); if(STATE.params.status) rows=rows.filter(r=>r.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Leads & Demo Requests</h2><div class="sub">${rows.length} leads</div></div>
    <button class="btn btn-accent" onclick="openDemoModal()">+ New Lead</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search leads..." oninput="tableSearch('leads',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('leads','fStatus',this.value)"><option value="">All Status</option><option>New</option><option>Contacted</option><option>Qualified</option><option>Won</option><option>Lost</option></select></div>
    <div id="tbl-leads"></div></div>`;
}
function renderLeadsTable(){
  let rows=LEADS.slice(); const f=STATE.tableState.leads||{}; if(f.fStatus) rows=rows.filter(r=>r.status===f.fStatus);
  document.getElementById('tbl-leads').innerHTML=dataTable({id:'leads',rows,pageSize:8,columns:[
    {key:'name',label:'Contact',render:r=>avatarCell(r.name,r.company)},
    {key:'service',label:'Service Interest'},
    {key:'budget',label:'Budget',render:r=>money(r.budget)},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'date',label:'Received'},
  ],actions:[{label:'View',handler:'viewLead'},{label:'Convert',handler:'convertLead'},{label:'Delete',danger:true,handler:'deleteLead'}]});
}
function openDemoModal(){ openModal({title:'New Lead / Demo Request',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Contact name</label><input id="d_name" placeholder="John Kimaro"></div>
  <div class="field"><label>Company</label><input id="d_company" placeholder="Company Ltd"></div>
  <div class="field"><label>Service</label><select id="d_service"><option>Web Development</option><option>Mobile App</option><option>System Development</option><option>Network</option><option>Cybersecurity</option></select></div>
  <div class="field"><label>Budget (TZS)</label><input id="d_budget" type="number" placeholder="5000000"></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveLead()">Add Lead</button>`}); }
function saveLead(){ const name=document.getElementById('d_name').value||'New Lead'; LEADS.push({id:'DR-'+(3000+LEADS.length+1),name,company:document.getElementById('d_company').value,service:document.getElementById('d_service').value,budget:parseInt(document.getElementById('d_budget').value||0),status:'New',date:fmtDate(new Date())}); closeModal(); toast('Lead captured','success'); navigate('leads'); }
function viewLead(id){ const r=LEADS.find(x=>x.id===id); if(!r) return; detailModal(r.name,[['Lead ID',r.id],['Company',r.company],['Service',r.service],['Budget',money(r.budget)],['Status',r.status],['Received',r.date]]); }
function convertLead(id){ const r=LEADS.find(x=>x.id===id); if(r){ r.status='Won'; toast('Lead marked as Won','success'); renderPage(); } }
function deleteLead(id){ confirmAction({title:'Delete lead?',confirmLabel:'Delete',onConfirm:()=>{ LEADS=LEADS.filter(x=>x.id!==id); toast('Lead deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: CONTACTS
   ============================================================ */
function pageContacts(){
  let rows=CONTACTS.slice(); if(STATE.params.status) rows=rows.filter(c=>c.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Contact Messages</h2><div class="sub">${rows.length} messages</div></div>
    <button class="btn btn-accent" onclick="openMessageModal()">+ Reply / Message</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search messages..." oninput="tableSearch('contacts',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('contacts','fStatus',this.value)"><option value="">All</option><option>New</option><option>Replied</option><option>Archived</option></select></div>
    <div id="tbl-contacts"></div></div>`;
}
function renderContactsTable(){
  let rows=CONTACTS.slice(); const f=STATE.tableState.contacts||{}; if(f.fStatus) rows=rows.filter(c=>c.status===f.fStatus);
  document.getElementById('tbl-contacts').innerHTML=dataTable({id:'contacts',rows,pageSize:8,columns:[
    {key:'name',label:'From',render:r=>avatarCell(r.name,r.email)},
    {key:'subject',label:'Subject'},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'date',label:'Date'},
  ],actions:[{label:'View',handler:'viewContact'},{label:'Reply',handler:'replyContact'},{label:'Delete',danger:true,handler:'deleteContact'}]});
}
function viewContact(id){ const c=CONTACTS.find(x=>x.id===id); if(!c) return; detailModal(c.name,[['Message ID',c.id],['Email',c.email],['Subject',c.subject],['Status',c.status],['Date',c.date]]); }
function replyContact(id){ openMessageModal(); }
function deleteContact(id){ confirmAction({title:'Delete message?',confirmLabel:'Delete',onConfirm:()=>{ CONTACTS=CONTACTS.filter(x=>x.id!==id); toast('Message deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: PROJECTS
   ============================================================ */
function pageProjects(){
  let rows=PROJECTS.slice(); if(STATE.params.status) rows=rows.filter(p=>p.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Projects</h2><div class="sub">${rows.length} projects</div></div>
    <button class="btn btn-accent" onclick="openProjectModal()">+ New Project</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search projects..." oninput="tableSearch('projects',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('projects','fStatus',this.value)"><option value="">All Status</option><option>Planning</option><option>In Progress</option><option>On Hold</option><option>Completed</option></select></div>
    <div id="tbl-projects"></div></div>`;
}
function renderProjectsTable(){
  let rows=PROJECTS.slice(); const f=STATE.tableState.projects||{}; if(f.fStatus) rows=rows.filter(p=>p.status===f.fStatus);
  document.getElementById('tbl-projects').innerHTML=dataTable({id:'projects',rows,pageSize:8,columns:[
    {key:'name',label:'Project',render:r=>avatarCell(r.name,r.type)},
    {key:'client',label:'Client'},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'progress',label:'Progress',render:r=>`<div class="progress-track" style="width:90px"><div class="progress-fill" style="width:${r.progress}%"></div></div><span style="font-size:11px;color:var(--text-tertiary)">${r.progress}%</span>`},
    {key:'value',label:'Value',render:r=>money(r.value)},
    {key:'deadline',label:'Deadline'},
  ],actions:[{label:'View',handler:'viewProject'},{label:'Edit',handler:'editProject'},{label:'Delete',danger:true,handler:'deleteProject'}]});
}
function openProjectModal(){ openModal({title:'New Project',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Project name</label><input id="p_name" placeholder="Booking Portal"></div>
  <div class="field"><label>Client</label><select id="p_client">${CLIENTS.map(c=>`<option>${c.name}</option>`).join('')}</select></div>
  <div class="field"><label>Type</label><select id="p_type"><option>Web Development</option><option>Mobile App</option><option>System Development</option><option>Network</option><option>Cybersecurity</option></select></div>
  <div class="field"><label>Value (TZS)</label><input id="p_value" type="number" placeholder="8000000"></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveProject()">Create Project</button>`}); }
function saveProject(){ const name=document.getElementById('p_name').value||'New Project'; PROJECTS.push({id:'PRJ-'+(2000+PROJECTS.length+1),name,client:document.getElementById('p_client').value,type:document.getElementById('p_type').value,status:'Planning',progress:0,deadline:fmtDate(daysAgo(-rndInt(10,90))),value:parseInt(document.getElementById('p_value').value||0)}); closeModal(); toast('Project created','success'); navigate('projects'); }
function viewProject(id){ const p=PROJECTS.find(x=>x.id===id); if(!p) return; detailModal(p.name,[['Project ID',p.id],['Client',p.client],['Type',p.type],['Status',p.status],['Progress',p.progress+'%'],['Value',money(p.value)],['Deadline',p.deadline]]); }
function editProject(id){ toast('Opening editor for '+id,'info'); }
function deleteProject(id){ confirmAction({title:'Delete project?',confirmLabel:'Delete',onConfirm:()=>{ PROJECTS=PROJECTS.filter(x=>x.id!==id); toast('Project deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: SERVICES
   ============================================================ */
function pageServices(){
  let rows=SERVICES.slice(); if(STATE.params.active) rows=rows.filter(s=>s.active);
  return `<div class="fade-in"><div class="section-head"><div><h2>Service Catalog</h2><div class="sub">${rows.length} services</div></div>
    <button class="btn btn-accent" onclick="openServiceModal()">+ Add Service</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search services..." oninput="tableSearch('services',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('services','fCat',this.value)"><option value="">All Categories</option><option>Web</option><option>Mobile</option><option>Systems</option><option>Network</option><option>Security</option><option>Cloud</option><option>Consultancy</option></select></div>
    <div id="tbl-services"></div></div>`;
}
function renderServicesTable(){
  let rows=SERVICES.slice(); const f=STATE.tableState.services||{}; if(f.fCat) rows=rows.filter(s=>s.category===f.fCat);
  document.getElementById('tbl-services').innerHTML=dataTable({id:'services',rows,pageSize:8,columns:[
    {key:'name',label:'Service',render:r=>avatarCell(r.name,r.category)},
    {key:'category',label:'Category',render:r=>`<span class="badge badge-info">${r.category}</span>`},
    {key:'price',label:'From',render:r=>money(r.price)},
    {key:'active',label:'Status',render:r=>statusBadge(r.active?'Active':'Inactive')},
  ],actions:[{label:'Edit',handler:'editService'},{label:'Delete',danger:true,handler:'deleteService'}]});
}
function openServiceModal(){ openModal({title:'Add Service',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Service name</label><input id="s_name" placeholder="Custom Web App"></div>
  <div class="field"><label>Category</label><select id="s_cat"><option>Web</option><option>Mobile</option><option>Systems</option><option>Network</option><option>Security</option><option>Cloud</option><option>Consultancy</option></select></div>
  <div class="field"><label>Starting price (TZS)</label><input id="s_price" type="number" placeholder="2000000"></div>
  <div class="field"><label>Status</label><select id="s_active"><option value="1">Active</option><option value="0">Inactive</option></select></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveService()">Save Service</button>`}); }
function saveService(){ SERVICES.push({id:'SV-'+(5000+SERVICES.length+1),name:document.getElementById('s_name').value||'New Service',category:document.getElementById('s_cat').value,price:parseInt(document.getElementById('s_price').value||0),active:document.getElementById('s_active').value==='1'}); closeModal(); toast('Service added','success'); navigate('services'); }
function editService(id){ toast('Opening editor for '+id,'info'); }
function deleteService(id){ confirmAction({title:'Delete service?',confirmLabel:'Delete',onConfirm:()=>{ SERVICES=SERVICES.filter(x=>x.id!==id); toast('Service deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: PACKAGES
   ============================================================ */
function pagePackages(){
  let rows=PACKAGES.slice(); if(STATE.params.active) rows=rows.filter(p=>p.active);
  return `<div class="fade-in"><div class="section-head"><div><h2>Packages</h2><div class="sub">${rows.length} packages</div></div>
    <button class="btn btn-accent" onclick="openPackageModal()">+ Add Package</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search packages..." oninput="tableSearch('packages',this.value)"></div></div>
    <div id="tbl-packages"></div></div>`;
}
function renderPackagesTable(){
  document.getElementById('tbl-packages').innerHTML=dataTable({id:'packages',rows:PACKAGES.slice(),pageSize:8,columns:[
    {key:'name',label:'Package',render:r=>avatarCell(r.name,'Package')},
    {key:'features',label:'Features',render:r=>`<b>${r.features}</b>`},
    {key:'price',label:'Price',render:r=>money(r.price)},
    {key:'active',label:'Status',render:r=>statusBadge(r.active?'Active':'Inactive')},
  ],actions:[{label:'Edit',handler:'editPackage'},{label:'Delete',danger:true,handler:'deletePackage'}]});
}
function openPackageModal(){ openModal({title:'Add Package',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Package name</label><input id="pk_name" placeholder="Business Web"></div>
  <div class="field"><label>Price (TZS)</label><input id="pk_price" type="number" placeholder="9500000"></div>
  <div class="field"><label>Features count</label><input id="pk_feat" type="number" placeholder="8"></div>
  <div class="field"><label>Status</label><select id="pk_active"><option value="1">Active</option><option value="0">Inactive</option></select></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="savePackage()">Save Package</button>`}); }
function savePackage(){ PACKAGES.push({id:'PK-'+(6000+PACKAGES.length+1),name:document.getElementById('pk_name').value||'New Package',price:parseInt(document.getElementById('pk_price').value||0),features:parseInt(document.getElementById('pk_feat').value||0),active:document.getElementById('pk_active').value==='1'}); closeModal(); toast('Package added','success'); navigate('packages'); }
function editPackage(id){ toast('Opening editor for '+id,'info'); }
function deletePackage(id){ confirmAction({title:'Delete package?',confirmLabel:'Delete',onConfirm:()=>{ PACKAGES=PACKAGES.filter(x=>x.id!==id); toast('Package deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: PRICING
   ============================================================ */
function pagePricing(){
  return `<div class="fade-in"><div class="section-head"><div><h2>Pricing Plans</h2><div class="sub">${PRICING.length} plans</div></div>
    <button class="btn btn-accent" onclick="openPricingModal()">+ Add Plan</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search plans..." oninput="tableSearch('pricing',this.value)"></div></div>
    <div id="tbl-pricing"></div></div>`;
}
function renderPricingTable(){
  document.getElementById('tbl-pricing').innerHTML=dataTable({id:'pricing',rows:PRICING.slice(),pageSize:8,columns:[
    {key:'name',label:'Plan',render:r=>`<div class="cell-user"><div class="cell-avatar" style="background:${r.popular?'var(--blue-accent)':'linear-gradient(135deg,var(--navy-800),var(--blue-accent))'}">${r.popular?'★':'•'}</div><div><div class="cu-name">${r.name}</div>${r.popular?'<div class="cu-sub">Popular</div>':''}</div></div>`},
    {key:'price',label:'Price',render:r=>money(r.price)},
    {key:'period',label:'Billing',render:r=>`<span class="badge badge-neutral">${r.period}</span>`},
    {key:'popular',label:'Featured',render:r=>statusBadge(r.popular?'Active':'Inactive')},
  ],actions:[{label:'Edit',handler:'editPricing'},{label:'Delete',danger:true,handler:'deletePricing'}]});
}
function openPricingModal(){ openModal({title:'Add Pricing Plan',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Plan name</label><input id="pr_name" placeholder="Professional"></div>
  <div class="field"><label>Price (TZS)</label><input id="pr_price" type="number" placeholder="4500000"></div>
  <div class="field"><label>Billing</label><select id="pr_period"><option>month</option><option>year</option><option>project</option></select></div>
  <div class="field"><label>Featured</label><select id="pr_pop"><option value="1">Yes</option><option value="0">No</option></select></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="savePricing()">Save Plan</button>`}); }
function savePricing(){ PRICING.push({id:'PP-'+(7000+PRICING.length+1),name:document.getElementById('pr_name').value||'New Plan',price:parseInt(document.getElementById('pr_price').value||0),period:document.getElementById('pr_period').value,popular:document.getElementById('pr_pop').value==='1'}); closeModal(); toast('Plan added','success'); navigate('pricing'); }
function editPricing(id){ toast('Opening editor for '+id,'info'); }
function deletePricing(id){ confirmAction({title:'Delete plan?',confirmLabel:'Delete',onConfirm:()=>{ PRICING=PRICING.filter(x=>x.id!==id); toast('Plan deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: OFFERS
   ============================================================ */
function pageOffers(){
  let rows=OFFERS.slice(); if(STATE.params.status) rows=rows.filter(o=>o.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Offers & Promotions</h2><div class="sub">${rows.length} offers</div></div>
    <button class="btn btn-accent" onclick="openOfferModal()">+ Add Offer</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search offers..." oninput="tableSearch('offers',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('offers','fStatus',this.value)"><option value="">All Status</option><option>Active</option><option>Expired</option><option>Draft</option></select></div>
    <div id="tbl-offers"></div></div>`;
}
function renderOffersTable(){
  let rows=OFFERS.slice(); const f=STATE.tableState.offers||{}; if(f.fStatus) rows=rows.filter(o=>o.status===f.fStatus);
  document.getElementById('tbl-offers').innerHTML=dataTable({id:'offers',rows,pageSize:8,columns:[
    {key:'title',label:'Offer',render:r=>`<div class="cell-user"><div class="cell-avatar" style="background:var(--purple-bg);color:var(--purple)">${ICONS.offer}</div><div class="cu-name">${r.title}</div></div>`},
    {key:'client',label:'Client'},
    {key:'discount',label:'Discount',render:r=>`<b style="color:var(--success)">-${r.discount}%</b>`},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'validUntil',label:'Valid Until'},
  ],actions:[{label:'Edit',handler:'editOffer'},{label:'Delete',danger:true,handler:'deleteOffer'}]});
}
function openOfferModal(){ openModal({title:'Add Offer',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Title</label><input id="o_title" placeholder="Q3 Discount"></div>
  <div class="field"><label>Client</label><select id="o_client">${CLIENTS.map(c=>`<option>${c.name}</option>`).join('')}</select></div>
  <div class="field"><label>Discount %</label><input id="o_disc" type="number" placeholder="20"></div>
  <div class="field"><label>Status</label><select id="o_status"><option>Active</option><option>Draft</option><option>Expired</option></select></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveOffer()">Save Offer</button>`}); }
function saveOffer(){ OFFERS.push({id:'OF-'+(8000+OFFERS.length+1),title:document.getElementById('o_title').value||'New Offer',client:document.getElementById('o_client').value,discount:parseInt(document.getElementById('o_disc').value||0),status:document.getElementById('o_status').value,validUntil:fmtDate(daysAgo(-rndInt(5,60)))}); closeModal(); toast('Offer added','success'); navigate('offers'); }
function editOffer(id){ toast('Opening editor for '+id,'info'); }
function deleteOffer(id){ confirmAction({title:'Delete offer?',confirmLabel:'Delete',onConfirm:()=>{ OFFERS=OFFERS.filter(x=>x.id!==id); toast('Offer deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: BOOKINGS
   ============================================================ */
function pageBookings(){
  let rows=BOOKINGS.slice(); if(STATE.params.status) rows=rows.filter(b=>b.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Bookings & Orders</h2><div class="sub">${rows.length} bookings</div></div></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search bookings..." oninput="tableSearch('bookings',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('bookings','fStatus',this.value)"><option value="">All Status</option><option>Pending</option><option>Confirmed</option><option>Completed</option><option>Cancelled</option></select></div>
    <div id="tbl-bookings"></div></div>`;
}
function renderBookingsTable(){
  let rows=BOOKINGS.slice(); const f=STATE.tableState.bookings||{}; if(f.fStatus) rows=rows.filter(b=>b.status===f.fStatus);
  document.getElementById('tbl-bookings').innerHTML=dataTable({id:'bookings',rows,pageSize:8,columns:[
    {key:'client',label:'Client',render:r=>avatarCell(r.client,'')},
    {key:'package',label:'Package',render:r=>`<span class="badge badge-info">${r.package}</span>`},
    {key:'amount',label:'Amount',render:r=>money(r.amount)},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'date',label:'Date'},
  ],actions:[{label:'View',handler:'viewBooking'},{label:'Delete',danger:true,handler:'deleteBooking'}]});
}
function viewBooking(id){ const b=BOOKINGS.find(x=>x.id===id); if(!b) return; detailModal('Booking '+b.id,[['Client',b.client],['Package',b.package],['Amount',money(b.amount)],['Status',b.status],['Date',b.date]]); }
function deleteBooking(id){ confirmAction({title:'Delete booking?',confirmLabel:'Delete',onConfirm:()=>{ BOOKINGS=BOOKINGS.filter(x=>x.id!==id); toast('Booking deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: INVOICES
   ============================================================ */
function pageInvoices(){
  let rows=INVOICES.slice(); if(STATE.params.status) rows=rows.filter(i=>i.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Invoices</h2><div class="sub">${rows.length} invoices</div></div>
    <button class="btn btn-accent" onclick="openInvoiceModal()">+ New Invoice</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search invoices..." oninput="tableSearch('invoices',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('invoices','fStatus',this.value)"><option value="">All Status</option><option>Draft</option><option>Sent</option><option>Paid</option><option>Overdue</option></select></div>
    <div id="tbl-invoices"></div></div>`;
}
function renderInvoicesTable(){
  let rows=INVOICES.slice(); const f=STATE.tableState.invoices||{}; if(f.fStatus) rows=rows.filter(i=>i.status===f.fStatus);
  document.getElementById('tbl-invoices').innerHTML=dataTable({id:'invoices',rows,pageSize:8,columns:[
    {key:'id',label:'Invoice',render:r=>`<b>${r.id}</b>`},
    {key:'client',label:'Client',render:r=>avatarCell(r.client,'')},
    {key:'amount',label:'Amount',render:r=>money(r.amount)},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'due',label:'Due Date'},
  ],actions:[{label:'View',handler:'viewInvoice'},{label:'Mark Paid',handler:'payInvoice'},{label:'Delete',danger:true,handler:'deleteInvoice'}]});
}
function openInvoiceModal(){ openModal({title:'New Invoice',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Client</label><select id="i_client">${CLIENTS.map(c=>`<option>${c.name}</option>`).join('')}</select></div>
  <div class="field"><label>Amount (TZS)</label><input id="i_amount" type="number" placeholder="3000000"></div>
  <div class="field"><label>Status</label><select id="i_status"><option>Draft</option><option>Sent</option><option>Paid</option><option>Overdue</option></select></div>
  <div class="field"><label>Due date</label><input id="i_due" type="date"></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveInvoice()">Create Invoice</button>`}); }
function saveInvoice(){ INVOICES.push({id:'INV-'+(2000+INVOICES.length+1),client:document.getElementById('i_client').value,amount:parseInt(document.getElementById('i_amount').value||0),status:document.getElementById('i_status').value,issued:fmtDate(new Date()),due:document.getElementById('i_due').value||fmtDate(daysAgo(-15))}); closeModal(); toast('Invoice created','success'); navigate('invoices'); }
function viewInvoice(id){ const i=INVOICES.find(x=>x.id===id); if(!i) return; detailModal('Invoice '+i.id,[['Client',i.client],['Amount',money(i.amount)],['Status',i.status],['Issued',i.issued],['Due',i.due]]); }
function payInvoice(id){ const i=INVOICES.find(x=>x.id===id); if(i){ i.status='Paid'; toast('Invoice marked as paid','success'); renderPage(); } }
function deleteInvoice(id){ confirmAction({title:'Delete invoice?',confirmLabel:'Delete',onConfirm:()=>{ INVOICES=INVOICES.filter(x=>x.id!==id); toast('Invoice deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: EXPENSES
   ============================================================ */
function pageExpenses(){
  let rows=EXPENSES.slice(); if(STATE.params.status) rows=rows.filter(e=>e.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Expenses</h2><div class="sub">${rows.length} expenses</div></div>
    <button class="btn btn-accent" onclick="openExpenseModal()">+ Add Expense</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search expenses..." oninput="tableSearch('expenses',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('expenses','fStatus',this.value)"><option value="">All Status</option><option>Pending</option><option>Approved</option><option>Paid</option><option>Rejected</option></select></div>
    <div id="tbl-expenses"></div></div>`;
}
function renderExpensesTable(){
  let rows=EXPENSES.slice(); const f=STATE.tableState.expenses||{}; if(f.fStatus) rows=rows.filter(e=>e.status===f.fStatus);
  document.getElementById('tbl-expenses').innerHTML=dataTable({id:'expenses',rows,pageSize:8,columns:[
    {key:'description',label:'Description',render:r=>avatarCell(r.description,r.category)},
    {key:'amount',label:'Amount',render:r=>money(r.amount)},
    {key:'method',label:'Method'},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'date',label:'Date'},
  ],actions:[{label:'Approve',handler:'approveExpense'},{label:'Delete',danger:true,handler:'deleteExpense'}]});
}
function openExpenseModal(){ openModal({title:'Add Expense',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Category</label><select id="e_cat"><option>Utilities</option><option>Salaries</option><option>Software</option><option>Hardware</option><option>Transport</option><option>Marketing</option><option>Hosting</option><option>Office</option></select></div>
  <div class="field"><label>Amount (TZS)</label><input id="e_amount" type="number" placeholder="500000"></div>
  <div class="field"><label>Method</label><select id="e_method"><option>Cash</option><option>Bank Transfer</option><option>Card</option></select></div>
  <div class="field"><label>Status</label><select id="e_status"><option>Pending</option><option>Approved</option><option>Paid</option><option>Rejected</option></select></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveExpense()">Save Expense</button>`}); }
function saveExpense(){ EXPENSES.push({id:'EXP-'+(3000+EXPENSES.length+1),category:document.getElementById('e_cat').value,description:document.getElementById('e_cat').value+' expense',amount:parseInt(document.getElementById('e_amount').value||0),method:document.getElementById('e_method').value,status:document.getElementById('e_status').value,date:fmtDate(new Date())}); closeModal(); toast('Expense recorded','success'); navigate('expenses'); }
function approveExpense(id){ const e=EXPENSES.find(x=>x.id===id); if(e){ e.status='Approved'; toast('Expense approved','success'); renderPage(); } }
function deleteExpense(id){ confirmAction({title:'Delete expense?',confirmLabel:'Delete',onConfirm:()=>{ EXPENSES=EXPENSES.filter(x=>x.id!==id); toast('Expense deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: MESSAGES
   ============================================================ */
function pageMessages(){
  let rows=MESSAGES.slice(); if(STATE.params.status) rows=rows.filter(m=>m.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Messages</h2><div class="sub">${rows.length} messages</div></div>
    <button class="btn btn-accent" onclick="openMessageModal()">+ Send Message</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search messages..." oninput="tableSearch('messages',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('messages','fStatus',this.value)"><option value="">All</option><option>Sent</option><option>Draft</option><option>Failed</option></select></div>
    <div id="tbl-messages"></div></div>`;
}
function renderMessagesTable(){
  let rows=MESSAGES.slice(); const f=STATE.tableState.messages||{}; if(f.fStatus) rows=rows.filter(m=>m.status===f.fStatus);
  document.getElementById('tbl-messages').innerHTML=dataTable({id:'messages',rows,pageSize:8,columns:[
    {key:'name',label:'Recipient',render:r=>avatarCell(r.name,r.channel)},
    {key:'content',label:'Content'},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'date',label:'Date'},
  ],actions:[{label:'View',handler:'viewMessage'},{label:'Delete',danger:true,handler:'deleteMessage'}]});
}
function openMessageModal(){ openModal({title:'Send Message',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Recipient</label><select id="m_name">${CLIENTS.map(c=>`<option>${c.name}</option>`).join('')}</select></div>
  <div class="field"><label>Channel</label><select id="m_chan"><option>SMS</option><option>Email</option><option>WhatsApp</option></select></div>
  <div class="field full"><label>Message</label><textarea id="m_body" placeholder="Type your message..."></textarea></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="sendMessage()">Send</button>`}); }
function sendMessage(){ MESSAGES.unshift({id:'MSG-'+(4000+MESSAGES.length+1),name:document.getElementById('m_name').value,channel:document.getElementById('m_chan').value,content:document.getElementById('m_body').value||'No content',status:'Sent',date:fmtDate(new Date())}); closeModal(); toast('Message sent','success'); navigate('messages'); }
function viewMessage(id){ const m=MESSAGES.find(x=>x.id===id); if(!m) return; detailModal('Message to '+m.name,[['Channel',m.channel],['Content',m.content],['Status',m.status],['Date',m.date]]); }
function deleteMessage(id){ confirmAction({title:'Delete message?',confirmLabel:'Delete',onConfirm:()=>{ MESSAGES=MESSAGES.filter(x=>x.id!==id); toast('Message deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: TEAM
   ============================================================ */
function pageTeam(){
  let rows=TEAM.slice(); if(STATE.params.status) rows=rows.filter(u=>u.status===STATE.params.status);
  return `<div class="fade-in"><div class="section-head"><div><h2>Team & Users</h2><div class="sub">${rows.length} members</div></div>
    <button class="btn btn-accent" onclick="openTeamModal()">+ Add Member</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search team..." oninput="tableSearch('team',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('team','fStatus',this.value)"><option value="">All Status</option><option>Active</option><option>Suspended</option></select></div>
    <div id="tbl-team"></div></div>`;
}
function renderTeamTable(){
  let rows=TEAM.slice(); const f=STATE.tableState.team||{}; if(f.fStatus) rows=rows.filter(u=>u.status===f.fStatus);
  document.getElementById('tbl-team').innerHTML=dataTable({id:'team',rows,pageSize:8,columns:[
    {key:'name',label:'Member',render:r=>avatarCell(r.name,r.role)},
    {key:'email',label:'Email',render:r=>r.email},
    {key:'role',label:'Role',render:r=>`<span class="badge badge-purple">${r.role}</span>`},
    {key:'status',label:'Status',render:r=>statusBadge(r.status)},
    {key:'lastLogin',label:'Last Login'},
  ],actions:[{label:'View',handler:'viewMember'},{label:'Edit',handler:'editMember'},{label:'Delete',danger:true,handler:'deleteMember'}]});
}
function openTeamModal(){ openModal({title:'Add Team Member',size:'md',bodyHtml:`<div class="form-grid">
  <div class="field"><label>Full name</label><input id="t_name" placeholder="Mary Lyimo"></div>
  <div class="field"><label>Email</label><input id="t_email" placeholder="mary[at]jezdantech.com"></div>
  <div class="field"><label>Role</label><select id="t_role"><option>Developer</option><option>Designer</option><option>Project Manager</option><option>Sales Rep</option><option>Support Agent</option><option>Accountant</option></select></div>
  <div class="field"><label>Status</label><select id="t_status"><option>Active</option><option>Suspended</option></select></div>
  </div>`,footHtml:`<button class="btn btn-secondary" onclick="closeModal()">Cancel</button><button class="btn btn-accent" onclick="saveMember()">Add Member</button>`}); }
function saveMember(){ TEAM.push({id:'USR-'+(5000+TEAM.length+1),name:document.getElementById('t_name').value||'New Member',email:document.getElementById('t_email').value,role:document.getElementById('t_role').value,status:document.getElementById('t_status').value,lastLogin:fmtDate(new Date())}); closeModal(); toast('Member added','success'); navigate('team'); }
function viewMember(id){ const u=TEAM.find(x=>x.id===id); if(!u) return; detailModal(u.name,[['User ID',u.id],['Email',u.email],['Role',u.role],['Status',u.status],['Last Login',u.lastLogin]]); }
function editMember(id){ toast('Opening editor for '+id,'info'); }
function deleteMember(id){ confirmAction({title:'Remove member?',confirmLabel:'Remove',onConfirm:()=>{ TEAM=TEAM.filter(x=>x.id!==id); toast('Member removed','success'); renderPage(); }}); }

/* ============================================================
   PAGE: FILES
   ============================================================ */
function pageFiles(){
  return `<div class="fade-in"><div class="section-head"><div><h2>File Manager</h2><div class="sub">${FILES.length} files</div></div>
    <button class="btn btn-accent" onclick="toast('Upload dialog would open','info')">+ Upload</button></div>
    <div class="toolbar"><div class="tfield grow"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg>
      <input placeholder="Search files..." oninput="tableSearch('files',this.value)"></div>
      <select class="filter-select" onchange="tableFilter('files','fType',this.value)"><option value="">All Types</option><option>Contract</option><option>Design</option><option>Report</option><option>Invoice</option><option>Image</option><option>Spec</option></select></div>
    <div id="tbl-files"></div></div>`;
}
function renderFilesTable(){
  let rows=FILES.slice(); const f=STATE.tableState.files||{}; if(f.fType) rows=rows.filter(x=>x.type===f.fType);
  document.getElementById('tbl-files').innerHTML=dataTable({id:'files',rows,pageSize:8,columns:[
    {key:'name',label:'File',render:r=>`<div class="cell-user"><div class="cell-avatar" style="background:var(--blue-light);color:var(--blue-accent)">${ICONS.docs}</div><div class="cu-name">${r.name}</div></div>`},
    {key:'type',label:'Type',render:r=>`<span class="badge badge-info">${r.type}</span>`},
    {key:'size',label:'Size'},
    {key:'access',label:'Access',render:r=>statusBadge(r.access==='Restricted'?'Rejected':'Active')},
    {key:'uploaded',label:'Uploaded'},
  ],actions:[{label:'Download',handler:'downloadFile'},{label:'Delete',danger:true,handler:'deleteFile'}]});
}
function downloadFile(id){ toast('Downloading file...','info'); }
function deleteFile(id){ confirmAction({title:'Delete file?',confirmLabel:'Delete',onConfirm:()=>{ FILES=FILES.filter(x=>x.id!==id); toast('File deleted','success'); renderPage(); }}); }

/* ============================================================
   PAGE: REPORTS
   ============================================================ */
function pageReports(){
  const view=STATE.params.view||'finance';
  const revByMonth=[8,11,9,13,15,14,18].map(x=>x*100000);
  const expByCat=['Utilities','Salaries','Software','Hardware','Transport','Marketing','Hosting','Office'].map(c=>EXPENSES.filter(e=>e.category===c).reduce((s,e)=>s+e.amount,0));
  const projByStatus=['Planning','In Progress','On Hold','Completed'].map(s=>PROJECTS.filter(p=>p.status===s).length);
  return `<div class="fade-in">
    <div class="section-head"><div><h2>Reports & Analytics</h2><div class="sub">Business performance overview</div></div></div>
    <div class="tabs-bar">
      <button class="tab-btn ${view==='finance'?'active':''}" onclick="navigateWithParams('reports',{view:'finance'})">Finance</button>
      <button class="tab-btn ${view==='projects'?'active':''}" onclick="navigateWithParams('reports',{view:'projects'})">Projects</button>
      <button class="tab-btn ${view==='clients'?'active':''}" onclick="navigateWithParams('reports',{view:'clients'})">Clients</button>
    </div>
    <div class="two-col">
      <div class="glass-card"><div class="section-head"><div><h2>${view==='finance'?'Revenue vs Expenses':view==='projects'?'Projects by Status':'Clients by Status'}</h2></div></div>
        <div class="chart-wrap"><canvas id="repChart1"></canvas></div></div>
      <div class="glass-card"><div class="section-head"><div><h2>${view==='finance'?'Expense Breakdown':'Status Distribution'}</h2></div></div>
        <div class="chart-wrap" style="height:280px"><canvas id="repChart2"></canvas></div></div>
    </div>
    <div class="solid-card" style="margin-top:20px">
      <h2 style="font-size:15px;margin:0 0 14px">Key Metrics</h2>
      <div class="kpi-grid" style="margin:0">
        ${kpiCard('Total Revenue',money(INVOICES.filter(i=>i.status==='Paid').reduce((s,i)=>s+i.amount,0)),'','up','finance','var(--success-bg)','var(--success)',revByMonth)}
        ${kpiCard('Total Expenses',money(expByCat.reduce((a,b)=>a+b,0)),'','up','expense','var(--danger-bg)','var(--danger)',revByMonth)}
        ${kpiCard('Active Clients',CLIENTS.filter(c=>c.status==='Active').length,'','up','client','var(--blue-light)','var(--blue-accent)',revByMonth)}
        ${kpiCard('Projects',PROJECTS.length,'','up','project','var(--purple-bg)','var(--purple)',revByMonth)}
      </div>
    </div>
  </div>`;
}
function initReportsCharts(){
  renderSparks();
  const view=STATE.params.view||'finance';
  if(view==='finance'){
    lineChart('repChart1',['Jan','Feb','Mar','Apr','May','Jun','Jul'],[{label:'Revenue',data:[8,11,9,13,15,14,18].map(x=>x*100000),borderColor:'#16A34A',backgroundColor:'rgba(22,163,74,.08)',fill:true,tension:.4,pointRadius:3},{label:'Expenses',data:[5,6,6,7,8,7,9].map(x=>x*100000),borderColor:'#DC2626',backgroundColor:'rgba(220,38,38,.05)',fill:true,tension:.4,pointRadius:3}]);
    doughnutChart('repChart2',['Utilities','Salaries','Software','Hardware','Transport','Marketing','Hosting','Office'],[5,18,7,9,4,6,8,3].map(x=>x*100000),['#2563EB','#7C3AED','#16A34A','#D97706','#0B1F3A','#DC2626','#4C86F5','#94A3B8']);
  } else if(view==='projects'){
    barChart('repChart1',['Planning','In Progress','On Hold','Completed'],['Planning','In Progress','On Hold','Completed'].map(s=>PROJECTS.filter(p=>p.status===s).length),'#2563EB');
    doughnutChart('repChart2',['Planning','In Progress','On Hold','Completed'],['Planning','In Progress','On Hold','Completed'].map(s=>PROJECTS.filter(p=>p.status===s).length),['#7C3AED','#2563EB','#D97706','#16A34A']);
  } else {
    barChart('repChart1',['Active','Lead','Inactive'],['Active','Lead','Inactive'].map(s=>CLIENTS.filter(c=>c.status===s).length),'#16A34A');
    doughnutChart('repChart2',['Active','Lead','Inactive'],['Active','Lead','Inactive'].map(s=>CLIENTS.filter(c=>c.status===s).length),['#2563EB','#7C3AED','#94A3B8']);
  }
}

/* ============================================================
   PAGE: SETTINGS
   ============================================================ */
function pageSettings(){
  const tab=STATE.params.tab||'general';
  return `<div class="fade-in"><div class="section-head"><div><h2>Settings</h2><div class="sub">Configure your ERP workspace</div></div></div>
    <div class="settings-layout">
      <div class="settings-nav">
        <button class="${tab==='general'?'active':''}" onclick="navigateWithParams('settings',{tab:'general'})">${ICONS.settings} General</button>
        <button class="${tab==='company'?'active':''}" onclick="navigateWithParams('settings',{tab:'company'})">${ICONS.client} Company Profile</button>
        <button class="${tab==='security'?'active':''}" onclick="navigateWithParams('settings',{tab:'security'})">${ICONS.users} Security</button>
        <button class="${tab==='audit'?'active':''}" onclick="navigateWithParams('settings',{tab:'audit'})">${ICONS.reports} Audit Log</button>
      </div>
      <div class="solid-card">
        ${tab==='general'?`<h2 style="font-size:16px;margin:0 0 16px">General Settings</h2>
          <div class="settings-row"><div class="sr-text"><p>Business name</p><span>Display name across the console</span></div><input class="field" style="width:240px" value="JezdanTech"></div>
          <div class="settings-row"><div class="sr-text"><p>Default currency</p><span>Used for invoices and reports</span></div><select class="filter-select" style="min-width:160px"><option>TZS</option><option>USD</option><option>EUR</option></select></div>
          <div class="settings-row"><div class="sr-text"><p>Email notifications</p><span>Receive updates on new leads</span></div><div class="switch"><input type="checkbox" checked><span class="slider"></span></div></div>`:''}
        ${tab==='company'?`<h2 style="font-size:16px;margin:0 0 16px">Company Profile</h2>
          <div class="form-grid"><div class="field"><label>Company</label><input value="JezdanTech"></div><div class="field"><label>Email</label><input value="admin[at]jezdantech.com"></div><div class="field"><label>Phone</label><input value="+255 685 847 002"></div><div class="field"><label>Location</label><input value="Moshi, Kilimanjaro, Tanzania"></div></div>
          <div class="field full" style="margin-top:14px"><label>Address</label><textarea>Moshi, Kilimanjaro, United Republic of Tanzania</textarea></div>`:''}
        ${tab==='security'?`<h2 style="font-size:16px;margin:0 0 16px">Security</h2>
          <div class="settings-row"><div class="sr-text"><p>Two-factor authentication</p><span>Add an extra layer of security</span></div><div class="switch"><input type="checkbox"><span class="slider"></span></div></div>
          <div class="settings-row"><div class="sr-text"><p>Session timeout</p><span>Auto-logout after inactivity</span></div><select class="filter-select" style="min-width:160px"><option>15 minutes</option><option>30 minutes</option><option>1 hour</option></select></div>
          <div class="settings-row"><div class="sr-text"><p>Login alerts</p><span>Notify on new device login</span></div><div class="switch"><input type="checkbox" checked><span class="slider"></span></div></div>`:''}
        ${tab==='audit'?`<h2 style="font-size:16px;margin:0 0 16px">Audit Log</h2>
          <div id="auditLog"></div>`:''}
      </div>
    </div>
  </div>`;
}
function initSettings(){
  const el=document.getElementById('auditLog'); if(!el) return;
  const logs=[['Admin User','Logged in','2 min ago'],['System','Invoice INV-2042 marked paid','1 hr ago'],['Mary Lyimo','Created project PRJ-2024','3 hr ago'],['System','Expense approved EXP-3012','5 hr ago'],['Admin User','Added client CL-1021','Yesterday']];
  el.innerHTML=logs.map(l=>`<div class="mini-row"><div class="m-ico" style="background:var(--blue-light);color:var(--blue-accent)">${ICONS.users}</div><div class="m-body"><p>${l[0]} — ${l[1]}</p><span>${l[2]}</span></div></div>`).join('');
}

/* ============================================================
   RENDER DISPATCHER + INIT
   ============================================================ */
function renderPage(){
  destroyCharts(); TABLE_RENDERERS={};
  const map={
    dashboard:[pageDashboard,initDashboardCharts], clients:[pageClients,renderClientsTable],
    leads:[pageLeads,renderLeadsTable], contacts:[pageContacts,renderContactsTable],
    projects:[pageProjects,renderProjectsTable], services:[pageServices,renderServicesTable],
    packages:[pagePackages,renderPackagesTable], pricing:[pagePricing,renderPricingTable],
    offers:[pageOffers,renderOffersTable], bookings:[pageBookings,renderBookingsTable],
    invoices:[pageInvoices,renderInvoicesTable], expenses:[pageExpenses,renderExpensesTable],
    messages:[pageMessages,renderMessagesTable], team:[pageTeam,renderTeamTable],
    files:[pageFiles,renderFilesTable], reports:[pageReports,initReportsCharts],
    settings:[pageSettings,initSettings]
  };
  const entry=map[STATE.page]||map.dashboard;
  document.getElementById('pageContent').innerHTML=entry[0]();
  if(entry[1]) requestAnimationFrame(entry[1]);
  window.__ERP_SEARCH=[
    ...CLIENTS.slice(0,6).map(c=>({icon:ICONS.client,label:c.name,sub:'Client · '+c.company,action:()=>navigate('clients')})),
    ...PROJECTS.slice(0,6).map(p=>({icon:ICONS.project,label:p.name,sub:'Project · '+p.status,action:()=>navigate('projects')})),
    ...INVOICES.slice(0,6).map(i=>({icon:ICONS.invoice,label:i.id,sub:'Invoice · '+i.client,action:()=>navigate('invoices')})),
  ];
}

document.addEventListener('DOMContentLoaded',function(){
  routeFromPath();
  renderNotifPanel(); renderQuickPanel(); buildSidebar();
  const def=NAV_FLAT && NAV_FLAT[STATE.page];
  const crumb=document.getElementById('crumbText'); if(crumb) crumb.textContent=def?def.crumb:'Dashboard';
  const ptitle=document.getElementById('pageTitleText'); if(ptitle) ptitle.textContent=def?def.title:'JezdanTech ERP';
  renderPage();
});
</script>
@endsection
