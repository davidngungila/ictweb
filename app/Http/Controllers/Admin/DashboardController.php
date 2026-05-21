<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use App\Models\DemoRequest;
use App\Models\PackageOrder;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\Message;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Get statistics from real database data
        $stats = [
            'total_bookings' => PackageOrder::count(),
            'bookings_this_month' => PackageOrder::whereMonth('created_at', Carbon::now()->month)->count(),
            
            'total_clients' => Client::count(),
            'clients_this_month' => Client::whereMonth('created_at', Carbon::now()->month)->count(),
            
            'total_demos' => DemoRequest::count(),
            'demos_this_month' => DemoRequest::whereMonth('created_at', Carbon::now()->month)->count(),
            
            'total_messages' => Message::count(),
            'messages_this_month' => Message::whereMonth('created_at', Carbon::now()->month)->count(),
            
            'total_projects' => Project::count(),
            'projects_active' => Project::where('status', 'in_progress')->count(),
            
            'total_services' => Service::count(),
            
            'total_revenue' => PackageOrder::where('payment_status', 'paid')->sum('advance_payment') + Invoice::where('status', 'paid')->sum('total'),
            'revenue_this_month' => PackageOrder::where('payment_status', 'paid')->whereMonth('created_at', Carbon::now()->month)->sum('advance_payment') + Invoice::where('status', 'paid')->whereMonth('created_at', Carbon::now()->month)->sum('total'),
            
            'pending_bookings' => PackageOrder::where('status', 'pending')->count(),
            'new_messages' => Message::where('status', 'unread')->count(),
        ];

        // Get recent bookings (PackageOrders)
        $recentBookings = PackageOrder::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Get recent messages
        $recentMessages = Message::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Get recent clients
        $recentClients = Client::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Get monthly revenue data (last 6 months)
        $monthlyRevenue = $this->getMonthlyRevenueData();

        // Get bookings by service type
        $bookingsByService = $this->getBookingsByService();

        return view('admin.dashboard', compact(
            'stats',
            'recentBookings',
            'recentMessages',
            'recentClients',
            'monthlyRevenue',
            'bookingsByService'
        ));
    }

    private function getMonthlyRevenueData()
    {
        $months = [];
        $revenue = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months[] = $date->format('M Y');
            
            $orderRevenue = PackageOrder::where('payment_status', 'paid')
                ->whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->sum('advance_payment');
                
            $invoiceRevenue = Invoice::where('status', 'paid')
                ->whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->sum('total');
                
            $revenue[] = (float)($orderRevenue + $invoiceRevenue);
        }
        
        return [
            'months' => $months,
            'revenue' => $revenue,
        ];
    }

    private function getBookingsByService()
    {
        return PackageOrder::select('service_id', DB::raw('count(*) as count'))
            ->groupBy('service_id')
            ->get()
            ->mapWithKeys(function ($item) {
                $serviceName = Service::find($item->service_id)->name ?? 'Unknown';
                return [$serviceName => $item->count];
            })->toArray();
    }

    public function financeOverview()
    {
        $stats = [
            'total_revenue' => PackageOrder::where('payment_status', 'paid')->sum('advance_payment') + Invoice::where('status', 'paid')->sum('total'),
            'total_pending' => PackageOrder::where('payment_status', 'pending')->sum('advance_payment') + Invoice::where('status', 'pending')->sum('total'),
            'total_invoices' => Invoice::count(),
            'paid_invoices' => Invoice::where('status', 'paid')->count(),
        ];

        $recentInvoices = Invoice::orderBy('created_at', 'desc')->take(10)->get();
        $monthlyRevenue = $this->getMonthlyRevenueData();

        return view('admin.finances.overview', compact('stats', 'recentInvoices', 'monthlyRevenue'));
    }
}
