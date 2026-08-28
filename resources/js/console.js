import Chart from 'chart.js/auto'

const D = window.DASHBOARD_DATA || {}
const C = {
  brand: '#3b66f5',
  accent: '#06b6d4',
  emerald: '#34d399',
  amber: '#fbbf24',
  violet: '#a78bfa',
  rose: '#fb7185',
  slate: '#64748b',
}

const statusColor = (s) => ({
  paid: C.emerald, pending: C.amber, overdue: C.rose, draft: C.slate,
  active: C.brand, inactive: C.slate, completed: C.accent, in_progress: C.violet,
  scheduled: C.accent, resolved: C.emerald, new: C.brand, 'in-progress': C.amber,
  closed: C.slate, first_time: C.brand, book: C.amber,
}[s] || C.brand)

Chart.defaults.color = '#94a3b8'
Chart.defaults.borderColor = 'rgba(255,255,255,0.06)'
Chart.defaults.font.family = "Inter, ui-sans-serif, system-ui, sans-serif"
Chart.defaults.font.size = 11

function gradient(ctx, color) {
  const g = ctx.createLinearGradient(0, 0, 0, 260)
  g.addColorStop(0, color + '66')
  g.addColorStop(1, color + '00')
  return g
}

function doughnut(id, data, palette) {
  const el = document.getElementById(id)
  if (!el || !data) return
  const colors = data.labels.map((l) => palette[l] || statusColor(l))
  new Chart(el, {
    type: 'doughnut',
    data: { labels: data.labels, datasets: [{ data: data.data, backgroundColor: colors, borderColor: '#0a0f1d', borderWidth: 3, hoverOffset: 6 }] },
    options: {
      cutout: '68%',
      plugins: {
        legend: { position: 'bottom', labels: { boxWidth: 10, boxHeight: 10, padding: 12, usePointStyle: true } },
        tooltip: { callbacks: { label: (c) => ` ${c.label}: ${c.raw}` } },
      },
    },
  })
}

function bars(id, data, color) {
  const el = document.getElementById(id)
  if (!el || !data) return
  new Chart(el, {
    type: 'bar',
    data: {
      labels: data.labels,
      datasets: [{
        data: data.data,
        backgroundColor: data.labels.map((l) => (color || statusColor(l)) + 'cc'),
        borderRadius: 8,
        maxBarThickness: 34,
      }],
    },
    options: {
      plugins: { legend: { display: false } },
      scales: {
        x: { grid: { display: false } },
        y: { beginAtZero: true, grid: { color: 'rgba(255,255,255,0.05)' } },
      },
    },
  })
}

function hbars(id, data, color) {
  const el = document.getElementById(id)
  if (!el || !data) return
  new Chart(el, {
    type: 'bar',
    data: {
      labels: data.labels,
      datasets: [{ data: data.data, backgroundColor: (color || C.brand) + 'cc', borderRadius: 6, maxBarThickness: 18 }],
    },
    options: {
      indexAxis: 'y',
      plugins: { legend: { display: false } },
      scales: { x: { beginAtZero: true, grid: { color: 'rgba(255,255,255,0.05)' } }, y: { grid: { display: false } } },
    },
  })
}

document.addEventListener('DOMContentLoaded', () => {
  // Revenue (area) + new clients (line)
  const rev = document.getElementById('chartRevenue')
  if (rev) {
    const ctx = rev.getContext('2d')
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: D.months,
        datasets: [
          {
            label: 'Revenue',
            data: D.revenue,
            borderColor: C.brand,
            backgroundColor: gradient(ctx, C.brand),
            fill: true, tension: 0.4, borderWidth: 2.5, pointRadius: 0, pointHoverRadius: 5,
          },
          {
            label: 'New Clients',
            data: D.clientsTrend,
            borderColor: C.accent,
            backgroundColor: 'transparent',
            fill: false, tension: 0.4, borderWidth: 2, borderDash: [5, 4], pointRadius: 0, pointHoverRadius: 5,
          },
        ],
      },
      options: {
        interaction: { mode: 'index', intersect: false },
        plugins: {
          legend: { position: 'top', align: 'end', labels: { boxWidth: 8, boxHeight: 8, usePointStyle: true } },
          tooltip: { callbacks: { label: (c) => ` ${c.dataset.label}: ${Number(c.raw).toLocaleString()}` } },
        },
        scales: {
          x: { grid: { display: false } },
          y: { beginAtZero: true, grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { callback: (v) => Number(v).toLocaleString() } },
        },
      },
    })
  }

  doughnut('chartInvoiceStatus', D.invoicesByStatus, {})
  doughnut('chartClients', D.clientsByStatus, {})
  bars('chartProjects', D.projectsByStatus, null)
  bars('chartLeads', D.leadsByStatus, null)
  hbars('chartTopClients', D.topClients, C.emerald)
})
