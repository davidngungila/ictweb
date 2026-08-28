<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JezdanTech ERP — Admin Console</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.4/chart.umd.min.js"></script>
<style>
:root{
  --navy-900:#0B1F3A;
  --navy-800:#0E2647;
  --navy-700:#123A63;
  --blue-accent:#2563EB;
  --blue-accent-dark:#1D4ED8;
  --blue-light:#EAF2FF;
  --bg:#F6F8FB;
  --white:#FFFFFF;
  --text-primary:#172033;
  --text-secondary:#64748B;
  --text-tertiary:#94A3B8;
  --border:rgba(15,23,42,.08);
  --border-strong:rgba(15,23,42,.14);
  --glass-bg:rgba(255,255,255,.70);
  --glass-bg-solid:rgba(255,255,255,.92);
  --glass-border:rgba(255,255,255,.55);
  --success:#16A34A;
  --success-bg:#ECFDF3;
  --warning:#D97706;
  --warning-bg:#FFFBEB;
  --danger:#DC2626;
  --danger-bg:#FEF2F2;
  --info:#2563EB;
  --info-bg:#EFF6FF;
  --purple:#7C3AED;
  --purple-bg:#F5F3FF;
  --radius-sm:10px;
  --radius-md:14px;
  --radius-lg:20px;
  --radius-xl:26px;
  --shadow-sm:0 2px 8px rgba(11,31,58,.06);
  --shadow-md:0 8px 24px rgba(11,31,58,.08);
  --shadow-lg:0 20px 48px rgba(11,31,58,.14);
  --shadow-glass:0 10px 34px rgba(11,31,58,.10);
  --sidebar-w:280px;
  --sidebar-w-collapsed:82px;
  --topbar-h:72px;
}

*,*::before,*::after{box-sizing:border-box;}
html,body{height:100%;}
body{
  margin:0;
  font-family:'Manrope',-apple-system,BlinkMacSystemFont,sans-serif;
  background:
    radial-gradient(1200px 600px at 100% -10%, rgba(37,99,235,.06), transparent 60%),
    radial-gradient(900px 500px at -10% 10%, rgba(11,31,58,.05), transparent 55%),
    var(--bg);
  color:var(--text-primary);
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
}
::-webkit-scrollbar{width:8px;height:8px;}
::-webkit-scrollbar-track{background:transparent;}
::-webkit-scrollbar-thumb{background:rgba(15,23,42,.15);border-radius:10px;}
::-webkit-scrollbar-thumb:hover{background:rgba(15,23,42,.25);}
a{color:inherit;text-decoration:none;}
button{font-family:inherit;cursor:pointer;}
input,select,textarea{font-family:inherit;}
:focus-visible{outline:2px solid var(--blue-accent);outline-offset:2px;}
svg{display:block;}
@media (prefers-reduced-motion: reduce){*{animation-duration:.01ms !important;transition-duration:.01ms !important;}}

.app-shell{display:flex;min-height:100vh;}

.sidebar{
  width:var(--sidebar-w);
  flex-shrink:0;
  background:linear-gradient(185deg, var(--navy-900) 0%, #0A1B33 100%);
  position:fixed;top:0;left:0;bottom:0;
  z-index:60;
  display:flex;flex-direction:column;
  transition:width .28s cubic-bezier(.4,0,.2,1), transform .28s cubic-bezier(.4,0,.2,1);
  box-shadow:4px 0 30px rgba(0,0,0,.12);
}
.sidebar.collapsed{width:var(--sidebar-w-collapsed);}
.sidebar-brand{
  display:flex;align-items:center;gap:12px;
  padding:22px 20px;
  border-bottom:1px solid rgba(255,255,255,.08);
  min-height:var(--topbar-h);
}
.sidebar-brand .brand-mark{
  width:42px;height:42px;flex-shrink:0;border-radius:12px;
  background:linear-gradient(135deg, var(--blue-accent), #4C86F5);
  display:flex;align-items:center;justify-content:center;
  box-shadow:0 6px 16px rgba(37,99,235,.4);font-weight:900;color:#fff;font-size:18px;
}
.sidebar-brand .brand-text{overflow:hidden;white-space:nowrap;transition:opacity .2s;}
.sidebar.collapsed .brand-text{opacity:0;width:0;}
.sidebar-brand .brand-text strong{display:block;color:#fff;font-size:15.5px;font-weight:800;letter-spacing:.2px;line-height:1.25;}
.sidebar-brand .brand-text span{display:block;color:rgba(255,255,255,.55);font-size:11.5px;font-weight:500;letter-spacing:.4px;}

.sidebar-scroll{flex:1;overflow-y:auto;overflow-x:hidden;padding:14px 12px 24px;}
.sidebar-scroll::-webkit-scrollbar-thumb{background:rgba(255,255,255,.15);}

.nav-single{
  display:flex;align-items:center;gap:12px;
  padding:11px 12px;margin-bottom:6px;border-radius:12px;
  color:rgba(255,255,255,.82);font-weight:600;font-size:14px;
  transition:background .15s, color .15s;position:relative;
}
.nav-single:hover{background:rgba(255,255,255,.06);color:#fff;}
.nav-single.active{background:rgba(255,255,255,.12);color:#fff;box-shadow:inset 0 0 0 1px rgba(255,255,255,.08);}
.nav-single .nav-icon{width:20px;height:20px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.nav-single .nav-label{white-space:nowrap;overflow:hidden;transition:opacity .2s;}
.sidebar.collapsed .nav-label,.sidebar.collapsed .group-title,.sidebar.collapsed .chevron{opacity:0;width:0;}

.nav-group{margin-top:14px;}
.group-title{
  padding:0 12px 8px;font-size:10.5px;font-weight:700;letter-spacing:1.4px;
  color:rgba(255,255,255,.32);white-space:nowrap;overflow:hidden;
}
.nav-parent{
  display:flex;align-items:center;gap:12px;width:100%;
  padding:11px 12px;margin-bottom:2px;border-radius:12px;border:none;background:transparent;
  color:rgba(255,255,255,.82);font-weight:600;font-size:14px;text-align:left;
  transition:background .15s,color .15s;
}
.nav-parent:hover{background:rgba(255,255,255,.06);color:#fff;}
.nav-parent .nav-icon{width:20px;height:20px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.nav-parent .nav-label{flex:1;white-space:nowrap;overflow:hidden;}
.chevron{width:14px;height:14px;flex-shrink:0;transition:transform .22s;opacity:.6;}
.nav-parent.expanded .chevron{transform:rotate(90deg);}
.nav-children{
  max-height:0;overflow:hidden;transition:max-height .28s ease;
  padding-left:20px;position:relative;
}
.nav-children.open{max-height:600px;}
.nav-children::before{content:'';position:absolute;left:31px;top:2px;bottom:8px;width:1px;background:rgba(255,255,255,.1);}
.nav-child{
  display:block;padding:9px 12px 9px 20px;margin:1px 0;border-radius:10px;
  color:rgba(255,255,255,.62);font-size:13.5px;font-weight:500;position:relative;
}
.nav-child:hover{color:#fff;background:rgba(255,255,255,.05);}
.nav-child.active{color:#fff;background:rgba(37,99,235,.28);font-weight:700;box-shadow:inset 0 0 0 1px rgba(255,255,255,.1);}

.sidebar-footer{padding:14px 12px;border-top:1px solid rgba(255,255,255,.08);}
.collapse-btn{
  width:100%;display:flex;align-items:center;justify-content:center;gap:8px;
  padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,.12);
  background:rgba(255,255,255,.04);color:rgba(255,255,255,.7);font-size:12.5px;font-weight:600;
}
.collapse-btn:hover{background:rgba(255,255,255,.08);color:#fff;}
.collapse-btn svg{transition:transform .25s;}
.sidebar.collapsed .collapse-btn svg{transform:rotate(180deg);}
.sidebar.collapsed .collapse-btn span{display:none;}

.tooltip-wrap{position:relative;}
.sidebar.collapsed .tooltip-wrap:hover .tt{
  opacity:1;visibility:visible;transform:translateX(0);
}
.tt{
  position:absolute;left:calc(100% + 14px);top:50%;transform:translateY(-50%) translateX(-6px);
  background:var(--navy-900);color:#fff;padding:7px 12px;border-radius:8px;font-size:12.5px;font-weight:600;
  white-space:nowrap;opacity:0;visibility:hidden;transition:.15s;pointer-events:none;z-index:80;
  box-shadow:var(--shadow-lg);
}

.main-wrap{flex:1;margin-left:var(--sidebar-w);transition:margin-left .28s cubic-bezier(.4,0,.2,1);min-width:0;}
.main-wrap.sidebar-collapsed{margin-left:var(--sidebar-w-collapsed);}

.topbar{
  height:var(--topbar-h);position:sticky;top:0;z-index:50;
  background:rgba(255,255,255,.78);backdrop-filter:blur(18px);-webkit-backdrop-filter:blur(18px);
  border-bottom:1px solid var(--border);
  display:flex;align-items:center;justify-content:space-between;
  padding:0 28px;gap:16px;
}
.topbar-left{display:flex;align-items:center;gap:16px;min-width:0;}
.icon-btn{
  width:40px;height:40px;border-radius:11px;border:1px solid var(--border);background:var(--white);
  display:flex;align-items:center;justify-content:center;color:var(--text-secondary);flex-shrink:0;
  transition:.15s;position:relative;
}
.icon-btn:hover{background:var(--blue-light);color:var(--blue-accent);border-color:rgba(37,99,235,.25);}
.crumb-wrap{min-width:0;}
.crumb{font-size:12px;color:var(--text-tertiary);font-weight:600;display:flex;align-items:center;gap:6px;margin-bottom:2px;}
.page-title{font-size:19px;font-weight:800;color:var(--text-primary);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.topbar-right{display:flex;align-items:center;gap:10px;flex-shrink:0;}
.search-box{
  display:flex;align-items:center;gap:8px;background:var(--white);border:1px solid var(--border);
  border-radius:11px;padding:0 14px;height:40px;width:260px;transition:.15s;
}
.search-box:focus-within{border-color:var(--blue-accent);box-shadow:0 0 0 3px rgba(37,99,235,.12);}
.search-box input{border:none;outline:none;background:transparent;font-size:13.5px;width:100%;color:var(--text-primary);}
.search-box svg{flex-shrink:0;color:var(--text-tertiary);}
.badge-dot{position:absolute;top:7px;right:7px;width:8px;height:8px;border-radius:50%;background:var(--danger);border:2px solid var(--white);}
.avatar{
  width:40px;height:40px;border-radius:11px;background:linear-gradient(135deg,var(--navy-800),var(--blue-accent));
  color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:14px;flex-shrink:0;
}
.user-chip{display:flex;align-items:center;gap:10px;padding:6px 8px 6px 6px;border-radius:12px;border:1px solid transparent;position:relative;}
.user-chip:hover{background:var(--white);border-color:var(--border);}
.user-chip .u-meta{text-align:left;}
.user-chip .u-name{font-size:13px;font-weight:700;color:var(--text-primary);line-height:1.2;}
.user-chip .u-role{font-size:11.5px;color:var(--text-tertiary);font-weight:600;}

.dropdown-panel{
  position:absolute;top:calc(100% + 10px);right:0;width:340px;
  background:var(--glass-bg-solid);backdrop-filter:blur(20px);
  border:1px solid var(--glass-border);border-radius:var(--radius-lg);box-shadow:var(--shadow-lg);
  z-index:90;overflow:hidden;opacity:0;transform:translateY(-8px);pointer-events:none;transition:.18s ease;
}
.dropdown-panel.open{opacity:1;transform:translateY(0);pointer-events:auto;}
.dropdown-header{padding:16px 18px;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;}
.dropdown-header strong{font-size:14.5px;font-weight:800;}
.link-btn{background:none;border:none;color:var(--blue-accent);font-size:12.5px;font-weight:700;padding:4px;}
.dropdown-list{max-height:360px;overflow-y:auto;}
.notif-item{display:flex;gap:12px;padding:13px 18px;border-bottom:1px solid var(--border);}
.notif-item:hover{background:rgba(37,99,235,.04);}
.notif-item .n-ico{width:36px;height:36px;border-radius:10px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.notif-item .n-body p{margin:0 0 3px;font-size:13px;font-weight:600;color:var(--text-primary);}
.notif-item .n-body span{font-size:11.5px;color:var(--text-tertiary);font-weight:600;}
.menu-item{display:flex;align-items:center;gap:10px;padding:12px 18px;font-size:13.5px;font-weight:600;color:var(--text-primary);}
.menu-item:hover{background:rgba(37,99,235,.06);color:var(--blue-accent);}
.menu-item.danger:hover{background:var(--danger-bg);color:var(--danger);}
.menu-divider{height:1px;background:var(--border);margin:4px 0;}

.page-content{padding:26px 28px 60px;max-width:1500px;}
.fade-in{animation:fadeIn .35s ease both;}
@keyframes fadeIn{from{opacity:0;transform:translateY(6px);}to{opacity:1;transform:translateY(0);}}

.welcome-block{margin-bottom:22px;}
.welcome-block h1{font-size:24px;font-weight:800;margin:0 0 4px;}
.welcome-block p{margin:0;color:var(--text-secondary);font-size:14px;font-weight:500;}

.section-head{display:flex;align-items:center;justify-content:space-between;gap:14px;margin-bottom:16px;flex-wrap:wrap;}
.section-head h2{font-size:17px;font-weight:800;margin:0;}
.section-head .sub{font-size:12.5px;color:var(--text-tertiary);font-weight:600;margin-top:2px;}

.glass-card{
  background:var(--glass-bg);backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px);
  border:1px solid var(--glass-border);border-radius:var(--radius-lg);
  box-shadow:var(--shadow-glass);padding:20px;
}
.solid-card{background:var(--white);border:1px solid var(--border);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);padding:20px;}

.kpi-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;margin-bottom:22px;}
.kpi-card{
  background:var(--glass-bg);backdrop-filter:blur(16px);border:1px solid var(--glass-border);
  border-radius:var(--radius-lg);box-shadow:var(--shadow-glass);padding:20px;position:relative;overflow:hidden;
  transition:transform .2s, box-shadow .2s;
}
.kpi-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-lg);}
.kpi-top{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:14px;}
.kpi-icon{width:44px;height:44px;border-radius:13px;display:flex;align-items:center;justify-content:center;}
.kpi-trend{font-size:11.5px;font-weight:800;padding:4px 8px;border-radius:8px;display:flex;align-items:center;gap:3px;}
.kpi-trend.up{background:var(--success-bg);color:var(--success);}
.kpi-trend.down{background:var(--danger-bg);color:var(--danger);}
.kpi-value{font-size:26px;font-weight:800;margin:0 0 2px;letter-spacing:-.5px;}
.kpi-label{font-size:12.5px;color:var(--text-secondary);font-weight:600;margin-bottom:10px;}
.spark{height:32px;width:100%;}

.two-col{display:grid;grid-template-columns:1.6fr 1fr;gap:20px;margin-bottom:22px;align-items:start;}
.chart-tabs{display:flex;gap:6px;background:rgba(15,23,42,.05);padding:4px;border-radius:10px;}
.chart-tabs button{border:none;background:transparent;padding:6px 12px;border-radius:7px;font-size:12px;font-weight:700;color:var(--text-secondary);}
.chart-tabs button.active{background:var(--white);color:var(--blue-accent);box-shadow:var(--shadow-sm);}
.chart-wrap{height:280px;position:relative;}

.quick-actions-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;}
.qa-btn{
  display:flex;flex-direction:column;align-items:center;gap:8px;padding:16px 8px;border-radius:14px;
  border:1px solid var(--border);background:rgba(255,255,255,.6);transition:.18s;text-align:center;
}
.qa-btn:hover{background:var(--white);border-color:rgba(37,99,235,.3);transform:translateY(-2px);box-shadow:var(--shadow-md);}
.qa-btn .qa-ico{width:42px;height:42px;border-radius:12px;background:var(--blue-light);color:var(--blue-accent);display:flex;align-items:center;justify-content:center;}
.qa-btn span{font-size:12px;font-weight:700;color:var(--text-primary);}

.list-card{margin-bottom:0;}
.mini-row{display:flex;align-items:center;gap:12px;padding:11px 0;border-bottom:1px solid var(--border);}
.mini-row:last-child{border-bottom:none;}
.mini-row .m-ico{width:38px;height:38px;border-radius:10px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.mini-row .m-body{flex:1;min-width:0;}
.mini-row .m-body p{margin:0;font-size:13px;font-weight:700;color:var(--text-primary);}
.mini-row .m-body span{font-size:11.5px;color:var(--text-tertiary);font-weight:600;}

.btn{
  display:inline-flex;align-items:center;justify-content:center;gap:8px;
  padding:10px 18px;border-radius:11px;font-size:13.5px;font-weight:700;border:1px solid transparent;
  transition:.15s;white-space:nowrap;
}
.btn-primary{background:var(--navy-900);color:#fff;box-shadow:0 4px 14px rgba(11,31,58,.25);}
.btn-primary:hover{background:var(--navy-800);transform:translateY(-1px);}
.btn-accent{background:var(--blue-accent);color:#fff;box-shadow:0 4px 14px rgba(37,99,235,.3);}
.btn-accent:hover{background:var(--blue-accent-dark);transform:translateY(-1px);}
.btn-secondary{background:var(--white);color:var(--text-primary);border-color:var(--border-strong);}
.btn-secondary:hover{background:var(--blue-light);border-color:rgba(37,99,235,.3);}
.btn-danger{background:var(--danger);color:#fff;}
.btn-danger:hover{background:#B91C1C;}
.btn-ghost{background:transparent;color:var(--text-secondary);}
.btn-ghost:hover{background:rgba(15,23,42,.05);color:var(--text-primary);}
.btn-sm{padding:7px 12px;font-size:12.5px;border-radius:9px;}
.btn:disabled{opacity:.5;cursor:not-allowed;transform:none !important;}

.toolbar{display:flex;align-items:center;gap:10px;flex-wrap:wrap;margin-bottom:16px;}
.toolbar .grow{flex:1;min-width:180px;}
.tfield{position:relative;}
.tfield input, .tfield select{
  width:100%;height:40px;border-radius:11px;border:1px solid var(--border);background:var(--white);
  padding:0 14px 0 38px;font-size:13px;font-weight:600;color:var(--text-primary);
}
.tfield.no-icon input,.tfield.no-icon select{padding-left:14px;}
.tfield svg{position:absolute;left:13px;top:50%;transform:translateY(-50%);color:var(--text-tertiary);}
.filter-select{height:40px;border-radius:11px;border:1px solid var(--border);background:var(--white);padding:0 12px;font-size:13px;font-weight:600;color:var(--text-secondary);min-width:130px;}

.table-card{background:var(--glass-bg);backdrop-filter:blur(16px);border:1px solid var(--glass-border);border-radius:var(--radius-lg);box-shadow:var(--shadow-glass);overflow:hidden;}
.table-scroll{overflow-x:auto;}
table.data-table{width:100%;border-collapse:collapse;min-width:760px;}
.data-table thead th{
  text-align:left;font-size:11px;font-weight:800;letter-spacing:.6px;text-transform:uppercase;
  color:var(--text-tertiary);padding:14px 18px;border-bottom:1px solid var(--border);white-space:nowrap;background:rgba(255,255,255,.4);
  cursor:pointer;user-select:none;
}
.data-table thead th:hover{color:var(--blue-accent);}
.data-table tbody td{padding:13px 18px;border-bottom:1px solid var(--border);font-size:13.5px;color:var(--text-primary);vertical-align:middle;}
.data-table tbody tr{transition:background .12s;}
.data-table tbody tr:hover{background:rgba(37,99,235,.035);}
.data-table tbody tr:last-child td{border-bottom:none;}
.cell-user{display:flex;align-items:center;gap:10px;}
.cell-avatar{width:34px;height:34px;border-radius:9px;background:linear-gradient(135deg,var(--navy-800),var(--blue-accent));color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:12px;flex-shrink:0;}
.cell-user .cu-name{font-weight:700;color:var(--text-primary);font-size:13.5px;}
.cell-user .cu-sub{font-size:11.5px;color:var(--text-tertiary);font-weight:600;}
.checkbox{width:17px;height:17px;border-radius:5px;accent-color:var(--blue-accent);cursor:pointer;}

.badge{display:inline-flex;align-items:center;gap:5px;padding:4px 10px;border-radius:20px;font-size:11.5px;font-weight:700;}
.badge-success{background:var(--success-bg);color:var(--success);}
.badge-warning{background:var(--warning-bg);color:var(--warning);}
.badge-danger{background:var(--danger-bg);color:var(--danger);}
.badge-info{background:var(--info-bg);color:var(--info);}
.badge-purple{background:var(--purple-bg);color:var(--purple);}
.badge-neutral{background:rgba(15,23,42,.06);color:var(--text-secondary);}
.badge-dotted::before{content:'';width:6px;height:6px;border-radius:50%;background:currentColor;}

.action-menu-wrap{position:relative;display:inline-block;}
.action-trigger{width:32px;height:32px;border-radius:8px;border:1px solid transparent;background:transparent;display:flex;align-items:center;justify-content:center;color:var(--text-tertiary);}
.action-trigger:hover{background:rgba(15,23,42,.06);color:var(--text-primary);}
.action-menu{
  position:absolute;right:0;top:calc(100% + 4px);min-width:170px;background:var(--glass-bg-solid);
  backdrop-filter:blur(18px);border:1px solid var(--border);border-radius:12px;box-shadow:var(--shadow-lg);
  z-index:70;overflow:hidden;display:none;
}
.action-menu.open{display:block;}
.action-menu button{width:100%;text-align:left;display:flex;align-items:center;gap:8px;padding:9px 14px;font-size:13px;font-weight:600;background:none;border:none;color:var(--text-primary);}
.action-menu button:hover{background:rgba(37,99,235,.07);color:var(--blue-accent);}
.action-menu button.danger:hover{background:var(--danger-bg);color:var(--danger);}

.table-footer{display:flex;align-items:center;justify-content:space-between;padding:14px 18px;border-top:1px solid var(--border);flex-wrap:wrap;gap:10px;}
.table-footer .tf-info{font-size:12.5px;color:var(--text-tertiary);font-weight:600;}
.pagination{display:flex;align-items:center;gap:6px;}
.page-btn{width:32px;height:32px;border-radius:8px;border:1px solid var(--border);background:var(--white);font-size:12.5px;font-weight:700;color:var(--text-secondary);}
.page-btn.active{background:var(--navy-900);color:#fff;border-color:var(--navy-900);}
.page-btn:disabled{opacity:.4;}
.bulk-bar{display:flex;align-items:center;gap:12px;padding:10px 18px;background:var(--blue-light);border-bottom:1px solid rgba(37,99,235,.15);font-size:13px;font-weight:700;color:var(--navy-900);}

.empty-state{display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:70px 24px;}
.empty-state .es-ico{width:72px;height:72px;border-radius:20px;background:var(--blue-light);color:var(--blue-accent);display:flex;align-items:center;justify-content:center;margin-bottom:18px;}
.empty-state h3{font-size:16px;font-weight:800;margin:0 0 6px;}
.empty-state p{font-size:13.5px;color:var(--text-secondary);margin:0 0 18px;max-width:340px;}

.skel{background:linear-gradient(90deg, rgba(15,23,42,.06) 25%, rgba(15,23,42,.11) 37%, rgba(15,23,42,.06) 63%);background-size:400% 100%;animation:skel 1.4s ease infinite;border-radius:8px;}
@keyframes skel{0%{background-position:100% 50%;}100%{background-position:0 50%;}}

.progress-track{height:9px;border-radius:20px;background:rgba(15,23,42,.07);overflow:hidden;}
.progress-fill{height:100%;border-radius:20px;background:linear-gradient(90deg,var(--blue-accent),#4C86F5);transition:width .5s ease;}

.tabs-bar{display:flex;gap:4px;border-bottom:1px solid var(--border);overflow-x:auto;margin-bottom:18px;}
.tab-btn{padding:11px 16px;font-size:13px;font-weight:700;color:var(--text-tertiary);border:none;background:none;border-bottom:2px solid transparent;white-space:nowrap;}
.tab-btn:hover{color:var(--text-primary);}
.tab-btn.active{color:var(--blue-accent);border-bottom-color:var(--blue-accent);}

.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
.form-grid .full{grid-column:1 / -1;}
.field label{display:block;font-size:12.5px;font-weight:700;color:var(--text-secondary);margin-bottom:6px;}
.field input,.field select,.field textarea{
  width:100%;padding:10px 13px;border-radius:10px;border:1px solid var(--border-strong);
  font-size:13.5px;font-weight:600;color:var(--text-primary);background:var(--white);transition:.15s;
}
.field input:focus,.field select:focus,.field textarea:focus{border-color:var(--blue-accent);box-shadow:0 0 0 3px rgba(37,99,235,.12);}
.field textarea{resize:vertical;min-height:80px;font-weight:500;}
.field .hint{font-size:11px;color:var(--text-tertiary);margin-top:5px;font-weight:500;}
.field-check{display:flex;align-items:center;gap:9px;}
.field-check label{margin:0;font-size:13px;font-weight:600;color:var(--text-primary);}
.upload-box{border:1.5px dashed var(--border-strong);border-radius:14px;padding:26px;text-align:center;background:rgba(37,99,235,.02);}
.upload-box svg{color:var(--blue-accent);margin-bottom:8px;}
.upload-box p{margin:0 0 3px;font-size:13px;font-weight:700;}
.upload-box span{font-size:11.5px;color:var(--text-tertiary);}

.modal-overlay{
  position:fixed;inset:0;background:rgba(11,20,38,.55);backdrop-filter:blur(3px);
  display:flex;align-items:center;justify-content:center;z-index:200;padding:24px;
  opacity:0;pointer-events:none;transition:opacity .2s ease;
}
.modal-overlay.open{opacity:1;pointer-events:auto;}
.modal-box{
  background:var(--white);border-radius:var(--radius-xl);box-shadow:0 30px 80px rgba(0,0,0,.28);
  width:100%;max-height:88vh;display:flex;flex-direction:column;overflow:hidden;
  transform:translateY(16px) scale(.98);transition:transform .22s cubic-bezier(.2,.8,.3,1);
}
.modal-overlay.open .modal-box{transform:translateY(0) scale(1);}
.modal-box.sm{max-width:420px;}
.modal-box.md{max-width:560px;}
.modal-box.lg{max-width:820px;}
.modal-box.full{max-width:96vw;width:1200px;max-height:94vh;}
.modal-head{display:flex;align-items:center;justify-content:space-between;padding:20px 24px;border-bottom:1px solid var(--border);flex-shrink:0;}
.modal-head h3{font-size:17px;font-weight:800;margin:0;}
.modal-head p{margin:2px 0 0;font-size:12.5px;color:var(--text-tertiary);font-weight:600;}
.modal-close{width:34px;height:34px;border-radius:10px;border:1px solid var(--border);background:var(--white);display:flex;align-items:center;justify-content:center;color:var(--text-secondary);flex-shrink:0;}
.modal-close:hover{background:var(--danger-bg);color:var(--danger);border-color:transparent;}
.modal-body{padding:24px;overflow-y:auto;flex:1;}
.modal-foot{display:flex;align-items:center;justify-content:flex-end;gap:10px;padding:16px 24px;border-top:1px solid var(--border);flex-shrink:0;background:rgba(248,250,252,.6);}
.modal-foot .foot-left{margin-right:auto;font-size:12px;color:var(--text-tertiary);font-weight:600;}
.confirm-icon{width:56px;height:56px;border-radius:16px;background:var(--danger-bg);color:var(--danger);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;}

.toast-stack{position:fixed;bottom:24px;right:24px;z-index:300;display:flex;flex-direction:column;gap:10px;align-items:flex-end;}
.toast{
  display:flex;align-items:center;gap:12px;background:var(--white);border:1px solid var(--border);
  border-radius:14px;box-shadow:var(--shadow-lg);padding:14px 18px;min-width:300px;max-width:380px;
  animation:toastIn .25s ease both;
}
@keyframes toastIn{from{opacity:0;transform:translateX(24px);}to{opacity:1;transform:translateX(0);}}
.toast.out{animation:toastOut .2s ease forwards;}
@keyframes toastOut{to{opacity:0;transform:translateX(24px);}}
.toast .t-ico{width:34px;height:34px;border-radius:10px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.toast p{margin:0;font-size:13px;font-weight:700;color:var(--text-primary);}
.toast span{font-size:11.5px;color:var(--text-tertiary);font-weight:500;}

.sidebar-scrim{position:fixed;inset:0;background:rgba(11,20,38,.5);z-index:55;opacity:0;pointer-events:none;transition:.2s;}
.sidebar-scrim.open{opacity:1;pointer-events:auto;}

.card-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:16px;}
.entity-card{background:var(--glass-bg);border:1px solid var(--glass-border);backdrop-filter:blur(16px);border-radius:var(--radius-lg);box-shadow:var(--shadow-glass);padding:18px;transition:.18s;}
.entity-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-lg);}
.entity-card .ec-top{display:flex;align-items:center;gap:12px;margin-bottom:12px;}
.entity-card .ec-ico{width:44px;height:44px;border-radius:12px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.entity-card h4{font-size:14.5px;font-weight:800;margin:0;}
.entity-card .ec-sub{font-size:11.5px;color:var(--text-tertiary);font-weight:600;}
.entity-card .ec-stats{display:flex;justify-content:space-between;padding-top:12px;border-top:1px solid var(--border);margin-top:12px;}
.entity-card .ec-stat b{display:block;font-size:15px;font-weight:800;}
.entity-card .ec-stat span{font-size:10.5px;color:var(--text-tertiary);font-weight:700;text-transform:uppercase;letter-spacing:.4px;}

.profile-head{display:flex;align-items:center;gap:18px;margin-bottom:20px;flex-wrap:wrap;}
.profile-avatar{width:82px;height:82px;border-radius:20px;background:linear-gradient(135deg,var(--navy-800),var(--blue-accent));color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:26px;flex-shrink:0;box-shadow:var(--shadow-md);}
.profile-meta h2{margin:0 0 4px;font-size:20px;font-weight:800;}
.profile-meta .p-line{display:flex;align-items:center;gap:14px;flex-wrap:wrap;font-size:12.5px;color:var(--text-secondary);font-weight:600;}
.info-row{display:flex;justify-content:space-between;padding:11px 0;border-bottom:1px solid var(--border);font-size:13px;}
.info-row:last-child{border-bottom:none;}
.info-row span{color:var(--text-tertiary);font-weight:600;}
.info-row b{font-weight:700;color:var(--text-primary);}

.msg-thread{border-radius:14px;border:1px solid var(--border);background:var(--white);padding:16px;margin-bottom:10px;}
.msg-templates{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;}
.tpl-card{border:1px solid var(--border);border-radius:12px;padding:14px;background:var(--white);}
.tpl-card h5{margin:0 0 6px;font-size:13px;font-weight:800;}
.tpl-card p{margin:0;font-size:12px;color:var(--text-secondary);line-height:1.5;}

.flex{display:flex;}
.gap-8{gap:8px;}
.mb-0{margin-bottom:0 !important;}
.text-muted{color:var(--text-tertiary);}
.hidden{display:none !important;}
.avatar-ring{box-shadow:0 0 0 3px var(--white),0 0 0 4px var(--border-strong);}

@media (max-width:1180px){
  .kpi-grid{grid-template-columns:repeat(2,1fr);}
  .two-col{grid-template-columns:1fr;}
  .quick-actions-grid{grid-template-columns:repeat(4,1fr);}
}
@media (max-width:860px){
  .sidebar{transform:translateX(-100%);width:280px !important;}
  .sidebar.mobile-open{transform:translateX(0);}
  .main-wrap,.main-wrap.sidebar-collapsed{margin-left:0;}
  .kpi-grid{grid-template-columns:1fr 1fr;}
  .search-box{display:none;}
  .quick-actions-grid{grid-template-columns:repeat(2,1fr);}
  .form-grid{grid-template-columns:1fr;}
  .page-content{padding:18px 14px 50px;}
  .topbar{padding:0 14px;}
  .modal-box.lg,.modal-box.full{max-width:100%;}
}
@media (max-width:520px){
  .kpi-grid{grid-template-columns:1fr;}
  .dropdown-panel{width:92vw;right:-8px;}
  .card-grid{grid-template-columns:1fr;}
}

/* ---------- Auth / Login ---------- */
.auth-shell{min-height:100vh;display:flex;align-items:center;justify-content:center;padding:32px 18px;background:linear-gradient(135deg,var(--navy-900),var(--navy-700));position:relative;overflow:hidden}
.auth-shell:before{content:"";position:absolute;width:520px;height:520px;border-radius:50%;background:radial-gradient(circle,rgba(37,99,235,.35),transparent 70%);top:-180px;right:-120px}
.auth-shell:after{content:"";position:absolute;width:420px;height:420px;border-radius:50%;background:radial-gradient(circle,rgba(37,99,235,.22),transparent 70%);bottom:-160px;left:-100px}
.auth-card{position:relative;z-index:2;width:100%;max-width:430px;background:var(--white);border-radius:20px;padding:34px 32px;box-shadow:0 30px 80px rgba(3,12,30,.45)}
.auth-brand{display:flex;align-items:center;gap:12px;margin-bottom:22px}
.auth-brand .brand-mark{width:42px;height:42px;border-radius:12px;background:var(--blue-accent);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:20px}
.auth-brand strong{font-size:16px;color:var(--text-primary);display:block;line-height:1}
.auth-brand span{font-size:11px;letter-spacing:.12em;color:var(--text-tertiary);font-weight:700}
.auth-title{font-size:22px;font-weight:800;color:var(--text-primary);margin:0 0 4px}
.auth-sub{color:var(--text-secondary);font-size:13.5px;margin:0 0 22px}
.field{margin-bottom:16px}
.field-label{display:block;font-size:12.5px;font-weight:700;color:var(--text-secondary);margin-bottom:7px}
.input{width:100%;height:44px;padding:0 14px;border:1px solid var(--border-strong);border-radius:11px;font-family:inherit;font-size:14px;color:var(--text-primary);background:var(--white);transition:.18s}
.input:focus{outline:none;border-color:var(--blue-accent);box-shadow:0 0 0 4px var(--blue-light)}
.input-wrap{position:relative}
.input-wrap .input{padding-right:42px}
.inp-eye{position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;color:var(--text-tertiary);cursor:pointer;padding:4px}
.auth-row{display:flex;align-items:center;justify-content:space-between;margin:4px 0 20px;font-size:13px;color:var(--text-secondary)}
.auth-row a{color:var(--blue-accent);font-weight:600;text-decoration:none}
.auth-demo{margin-top:18px;padding:12px 14px;background:var(--blue-light);border-radius:11px;font-size:12.5px;color:var(--text-secondary)}
.auth-demo b{color:var(--text-primary)}
.auth-err{display:none;background:var(--danger-bg);color:var(--danger);padding:10px 14px;border-radius:10px;font-size:13px;margin-bottom:14px}
</style>
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
   JEZDANTECH ERP — SHARED SHELL & COMPONENTS
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
          if(c.action){return `<a href="#" class="nav-child" onclick="${c.action}();closeAllPanels();return false;">${c.label}</a>`;}
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
    {ico:'💼',bg:'var(--info-bg)',c:'var(--info)',title:'New project kickoff: Tourism Booking Portal',time:'10 minutes ago'},
    {ico:'💰',bg:'var(--success-bg)',c:'var(--success)',title:'Invoice #INV-2042 paid — TZS 2,400,000',time:'1 hour ago'},
    {ico:'⚠️',bg:'var(--warning-bg)',c:'var(--warning)',title:'Expense awaiting approval: Server upgrade',time:'3 hours ago'},
    {ico:'📩',bg:'var(--info-bg)',c:'var(--info)',title:'New demo request from Safari Lodge Co.',time:'5 hours ago'},
    {ico:'🟢',bg:'var(--success-bg)',c:'var(--success)',title:'Project "ERP Phase 2" marked complete',time:'Yesterday'},
  ];
  document.getElementById('notifList').innerHTML=items.map(n=>`
    <div class="notif-item">
      <div class="n-ico" style="background:${n.bg};color:${n.c}">${n.ico}</div>
      <div class="n-body"><p>${n.title}</p><span>${n.time}</span></div>
    </div>`).join('');
}
function renderQuickPanel(){
  const acts=[
    ['New Client','openClientModal'],['New Project','openProjectModal'],['Create Invoice','openInvoiceModal'],
    ['Record Expense','openExpenseModal'],['New Demo Request','openDemoModal'],['Send Message','openMessageModal'],
    ['Add Service','openServiceModal'],['New Package','openPackageModal']
  ];
  document.getElementById('quickPanelList').innerHTML=acts.map(a=>`<div class="menu-item" onclick="${a[1]}();closeAllPanels();">${a[0]}</div>`).join('');
}
function handleGlobalSearch(q){
  const box=document.getElementById('searchResults');
  if(!q||q.length<1){ box.innerHTML='<div class="empty-state" style="padding:30px 18px"><p>Start typing to search across the system.</p></div>'; return; }
  const ql=q.toLowerCase(); let results=[];
  (window.__ERP_SEARCH||[]).forEach(r=>{ if(r.label.toLowerCase().includes(ql)) results.push(r); });
  if(results.length===0){ box.innerHTML=`<div class="empty-state" style="padding:30px 18px"><p>No results for "${q}".</p></div>`; return; }
  box.innerHTML=results.slice(0,6).map((r,i)=>`<div class="menu-item" onclick="window.__erpGo${i}()">${r.icon||'•'} ${r.label}<br><span style="font-size:11px;color:var(--text-tertiary);font-weight:600">${r.sub}</span></div>`).join('');
  results.slice(0,6).forEach((r,i)=>window['__erpGo'+i]=()=>{ r.action(); closeAllPanels(); });
}

/* ---------- Toasts ---------- */
function toast(msg,type='success',sub){
  const stack=document.getElementById('toastStack');
  const cfg=({success:{bg:'var(--success-bg)',c:'var(--success)',ico:'✓'},error:{bg:'var(--danger-bg)',c:'var(--danger)',ico:'✕'},info:{bg:'var(--info-bg)',c:'var(--info)',ico:'ℹ'},warning:{bg:'var(--warning-bg)',c:'var(--warning)',ico:'!'}})[type]||{bg:'var(--info-bg)',c:'var(--info)',ico:'ℹ'};
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
  cfg.columns.forEach(c=>{ head+=`<th onclick="${c.sortable!==false?`sortTable('${key}','${c.key}')`:''}">${c.label} ${ts.sortKey===c.key?(ts.sortDir===1?'↑':'↓'):''}</th>`; });
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

  let pag=`<div class="pagination"><button class="page-btn" ${ts.page===1?'disabled':''} onclick="changePage('${key}',${ts.page-1})">‹</button>`;
  for(let p=1;p<=totalPages;p++){
    if(totalPages>7 && Math.abs(p-ts.page)>2 && p!==1 && p!==totalPages){ if(p===2||p===totalPages-1) pag+=`<span style="padding:0 4px;color:var(--text-tertiary)">…</span>`; continue; }
    pag+=`<button class="page-btn ${p===ts.page?'active':''}" onclick="changePage('${key}',${p})">${p}</button>`;
  }
  pag+=`<button class="page-btn" ${ts.page===totalPages?'disabled':''} onclick="changePage('${key}',${ts.page+1})">›</button></div>`;

  return `<div class="table-card">${bulkBar}<div class="table-scroll"><table class="data-table"><thead>${head}</thead><tbody>${body}</tbody></table></div>
    <div class="table-footer"><span class="tf-info">Showing ${start+1}–${Math.min(start+pageSize,rows.length)} of ${rows.length} records</span>${pag}</div></div>`;
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
      <div class="kpi-trend ${dir}">${dir==='up'?'▲':'▼'} ${trend}</div></div>
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
