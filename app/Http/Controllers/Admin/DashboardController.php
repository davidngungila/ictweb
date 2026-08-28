<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\DemoRequest;
use App\Models\Project;
use App\Models\Invoice;
use App\Models\Expense;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $months = collect(range(11, 0))->map(function ($i) use ($now) {
            $d = $now->copy()->subMonths($i);
            return [
                'key' => $d->format('Y-m'),
                'label' => $d->format('M'),
            ];
        });
        $monthKeys = $months->pluck('key')->all();

        $clients = Client::select('id', 'name', 'status', 'created_at')->get();
        $projects = Project::select('id', 'title', 'status', 'price', 'progress_percentage', 'created_at')->get();
        $invoices = Invoice::select('id', 'invoice_number', 'client_name', 'amount', 'total', 'status', 'created_at')->get();
        $leads = DemoRequest::select('id', 'company_name', 'status', 'estimated_value', 'created_at')->get();
        $expenses = Expense::select('id', 'amount', 'status', 'expense_date')->get();

        // ---- KPIs ----
        $revenuePaid = $invoices->where('status', 'paid')->sum('total');
        $outstanding = $invoices->where('status', '!=', 'paid')->sum('total');
        $kpis = [
            'clientsTotal' => $clients->count(),
            'clientsActive' => $clients->where('status', 'active')->count(),
            'projectsTotal' => $projects->count(),
            'projectsActive' => $projects->where('status', 'in_progress')->count(),
            'avgProgress' => $projects->count() ? round($projects->avg('progress_percentage')) : 0,
            'invoicesTotal' => $invoices->count(),
            'revenuePaid' => (float) $revenuePaid,
            'outstanding' => (float) $outstanding,
            'leadsTotal' => $leads->count(),
            'pipelineValue' => (float) $leads->sum('estimated_value'),
            'conversion' => $leads->count() ? round($clients->count() / $leads->count() * 100) : 0,
            'messagesOpen' => Message::whereIn('status', ['new', 'in-progress'])->count(),
            'expensesTotal' => (float) $expenses->sum('amount'),
            'teamTotal' => User::count(),
        ];

        // ---- Revenue by month (paid invoices) ----
        $revenueMap = array_fill_keys($monthKeys, 0);
        foreach ($invoices->where('status', 'paid') as $inv) {
            $k = $inv->created_at ? $inv->created_at->format('Y-m') : null;
            if ($k && isset($revenueMap[$k])) {
                $revenueMap[$k] += (float) ($inv->total ?: $inv->amount);
            }
        }

        // ---- New clients trend by month ----
        $clientsMap = array_fill_keys($monthKeys, 0);
        foreach ($clients as $c) {
            $k = $c->created_at ? $c->created_at->format('Y-m') : null;
            if ($k && isset($clientsMap[$k])) {
                $clientsMap[$k]++;
            }
        }

        // ---- Status distributions ----
        $invoicesByStatus = $this->dist($invoices, 'status');
        $projectsByStatus = $this->dist($projects, 'status');
        $leadsByStatus = $this->dist($leads, 'status');
        $clientsByStatus = $this->dist($clients, 'status');

        // ---- Top clients by paid revenue ----
        $byClient = [];
        foreach ($invoices->where('status', 'paid') as $inv) {
            $name = $inv->client_name ?: 'Unknown';
            $byClient[$name] = ($byClient[$name] ?? 0) + (float) ($inv->total ?: $inv->amount);
        }
        arsort($byClient);
        $top = array_slice($byClient, 0, 5, true);
        $topClients = [
            'labels' => array_keys($top),
            'data' => array_values($top),
        ];

        // ---- Recent activity ----
        $recent = [
            'clients' => Client::orderBy('created_at', 'desc')->limit(6)->get(),
            'invoices' => Invoice::orderBy('created_at', 'desc')->limit(6)->get(),
            'leads' => DemoRequest::orderBy('created_at', 'desc')->limit(6)->get(),
            'messages' => Message::orderBy('created_at', 'desc')->limit(6)->get(),
        ];

        $chart = [
            'months' => $months->pluck('label')->all(),
            'revenue' => array_values($revenueMap),
            'clientsTrend' => array_values($clientsMap),
            'invoicesByStatus' => $invoicesByStatus,
            'projectsByStatus' => $projectsByStatus,
            'leadsByStatus' => $leadsByStatus,
            'clientsByStatus' => $clientsByStatus,
            'topClients' => $topClients,
            'kpis' => $kpis,
        ];

        return view('admin.console', compact('chart', 'kpis', 'recent'));
    }

    private function dist($collection, $field)
    {
        $counts = $collection->groupBy($field)->map->count()->all();
        $labels = array_keys($counts);
        return [
            'labels' => $labels,
            'data' => array_values($counts),
        ];
    }
}
