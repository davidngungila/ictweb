<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DemoRequest;
use Illuminate\Support\Facades\Validator;

class DemoRequestController extends Controller
{
    public function index()
    {
        return view('admin.demo-requests.index');
    }

    public function data(Request $request)
    {
        $query = DemoRequest::query();

        // Search
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('company_name', 'LIKE', "%{$search}%")
                  ->orWhere('contact_person', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('demo_type', 'LIKE', "%{$search}%");
        }

        // Status filter
        if ($request->has('status') && $request->get('status') !== '') {
            $query->where('status', $request->get('status'));
        }

        // Urgency filter
        if ($request->has('urgency') && $request->get('urgency') !== '') {
            $query->where('urgency', $request->get('urgency'));
        }

        // Demo type filter
        if ($request->has('demo_type') && $request->get('demo_type') !== '') {
            $query->where('demo_type', $request->get('demo_type'));
        }

        // Sorting
        $sortColumn = $request->get('sort', 'created_at');
        $sortOrder = $request->get('order', 'desc');
        $query->orderBy($sortColumn, $sortOrder);

        $demoRequests = $query->paginate(10);

        return response()->json($demoRequests);
    }

    public function create()
    {
        return view('admin.demo-requests.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'demo_type' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'preferred_date' => 'required|date|after:today',
            'preferred_time' => 'required|string',
            'attendees' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'message' => 'nullable|string|min:10|max:2000',
            'urgency' => 'required|in:low,medium,high',
            'status' => 'required|in:new,contacted,scheduled,completed,cancelled',
            'estimated_value' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $demoRequest = DemoRequest::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Demo request created successfully',
                'demo_request' => $demoRequest
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating demo request: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(DemoRequest $demoRequest)
    {
        return view('admin.demo-requests.show', compact('demoRequest'));
    }

    public function edit(DemoRequest $demoRequest)
    {
        return view('admin.demo-requests.edit', compact('demoRequest'));
    }

    public function update(Request $request, DemoRequest $demoRequest)
    {
        $validator = Validator::make($request->all(), [
            'demo_type' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'country' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'preferred_date' => 'required|date|after:today',
            'preferred_time' => 'required|string',
            'attendees' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'message' => 'nullable|string|min:10|max:2000',
            'urgency' => 'required|in:low,medium,high',
            'status' => 'required|in:new,contacted,scheduled,completed,cancelled',
            'estimated_value' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string|max:1000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $demoRequest->update($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Demo request updated successfully',
                'demo_request' => $demoRequest
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating demo request: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy(DemoRequest $demoRequest)
    {
        try {
            $demoRequest->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Demo request deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting demo request: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateStatus(Request $request, DemoRequest $demoRequest)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:new,contacted,scheduled,completed,cancelled',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $demoRequest->update(['status' => $request->status]);
            
            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully',
                'status' => $demoRequest->status
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating status: ' . $e->getMessage()
            ], 500);
        }
    }

    public function stats()
    {
        $stats = [
            'total' => DemoRequest::count(),
            'new' => DemoRequest::where('status', 'new')->count(),
            'contacted' => DemoRequest::where('status', 'contacted')->count(),
            'scheduled' => DemoRequest::where('status', 'scheduled')->count(),
            'completed' => DemoRequest::where('status', 'completed')->count(),
            'cancelled' => DemoRequest::where('status', 'cancelled')->count(),
            'high_urgency' => DemoRequest::where('urgency', 'high')->count(),
            'medium_urgency' => DemoRequest::where('urgency', 'medium')->count(),
            'low_urgency' => DemoRequest::where('urgency', 'low')->count(),
            'total_estimated_value' => DemoRequest::sum('estimated_value'),
            'new_this_month' => DemoRequest::whereMonth('created_at', now()->month)->count(),
            'growth_rate' => $this->calculateGrowthRate()
        ];

        return response()->json($stats);
    }

    private function calculateGrowthRate()
    {
        $thisMonth = DemoRequest::whereMonth('created_at', now()->month)->count();
        $lastMonth = DemoRequest::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100), 2);
    }

    public function export()
    {
        $demoRequests = DemoRequest::all();
        
        $filename = "demo_requests_" . date('Y-m-d') . ".csv";
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($demoRequests) {
            $file = fopen('php://output', 'w');
            
            // CSV header
            fputcsv($file, ['Company Name', 'Contact Person', 'Email', 'Phone', 'Demo Type', 'Status', 'Urgency', 'Preferred Date', 'Preferred Time', 'Estimated Value', 'Created At']);
            
            // CSV data
            foreach ($demoRequests as $demoRequest) {
                fputcsv($file, [
                    $demoRequest->company_name,
                    $demoRequest->contact_person,
                    $demoRequest->email,
                    $demoRequest->phone,
                    $demoRequest->demo_type,
                    $demoRequest->status,
                    $demoRequest->urgency,
                    $demoRequest->preferred_date,
                    $demoRequest->preferred_time,
                    $demoRequest->estimated_value,
                    $demoRequest->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
