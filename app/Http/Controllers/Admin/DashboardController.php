<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ContactSubmission;
use App\Models\DemoRequest;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Get statistics
        $stats = [
            'total_demo_requests' => DemoRequest::count(),
            'demo_requests_this_month' => DemoRequest::whereMonth('created_at', Carbon::now()->month)->count(),
            'total_contacts' => ContactSubmission::count(),
            'contacts_this_month' => ContactSubmission::whereMonth('created_at', Carbon::now()->month)->count(),
            'total_revenue' => $this->calculateTotalRevenue(),
            'revenue_this_month' => $this->calculateMonthlyRevenue(),
            'pending_demo_requests' => DemoRequest::where('status', 'pending')->count(),
            'new_contacts' => ContactSubmission::where('status', 'new')->count(),
        ];

        // Get recent demo requests
        $recentDemoRequests = DemoRequest::with('demoType')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Get recent contacts
        $recentContacts = ContactSubmission::orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Get monthly revenue data (last 6 months)
        $monthlyRevenue = $this->getMonthlyRevenueData();

        // Get demo requests by type
        $demoRequestsByType = $this->getDemoRequestsByType();

        return view('admin.dashboard', compact(
            'stats',
            'recentDemoRequests',
            'recentContacts',
            'monthlyRevenue',
            'demoRequestsByType'
        ));
    }

    private function calculateTotalRevenue()
    {
        // This would calculate from actual revenue data
        // For now, return a placeholder value
        return 45000000; // TZS 45 Million
    }

    private function calculateMonthlyRevenue()
    {
        // This would calculate from actual revenue data
        // For now, return a placeholder value
        return 7500000; // TZS 7.5 Million
    }

    private function getMonthlyRevenueData()
    {
        $months = [];
        $revenue = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $months[] = $month->format('M Y');
            // This would fetch actual revenue data
            $revenue[] = rand(5000000, 10000000);
        }
        
        return [
            'months' => $months,
            'revenue' => $revenue,
        ];
    }

    private function getDemoRequestsByType()
    {
        $types = ['Web Development', 'Mobile App', 'Cybersecurity'];
        $data = [];
        
        foreach ($types as $type) {
            $data[$type] = DemoRequest::where('demo_type', $type)->count();
        }
        
        return $data;
    }
}
