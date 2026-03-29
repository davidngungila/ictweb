<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DemoRequest;

class DemoRequestController extends Controller
{
    public function index(Request $request)
    {
        $query = DemoRequest::query();

        // Filter by status
        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        // Filter by urgency
        if ($request->filled('urgency')) {
            $query->byUrgency($request->urgency);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('company_name', 'like', "%{$search}%")
                  ->orWhere('contact_person', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('demo_type', 'like', "%{$search}%");
            });
        }

        $demoRequests = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.demo-requests.index', compact('demoRequests'));
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
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(DemoRequest::getStatuses())),
            'estimated_value' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string|max:1000',
        ]);

        $demoRequest->update($validated);

        return redirect()->route('admin.demo-requests.show', $demoRequest)
            ->with('success', 'Demo request updated successfully.');
    }

    public function destroy(DemoRequest $demoRequest)
    {
        $demoRequest->delete();

        return redirect()->route('admin.demo-requests.index')
            ->with('success', 'Demo request deleted successfully.');
    }

    public function updateStatus(Request $request, DemoRequest $demoRequest)
    {
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(DemoRequest::getStatuses())),
        ]);

        $demoRequest->update(['status' => $validated['status']]);

        return redirect()->back()
            ->with('success', 'Status updated successfully.');
    }
}
