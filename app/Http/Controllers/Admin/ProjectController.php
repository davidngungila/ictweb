<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Client;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.projects.index');
    }

    public function data(Request $request)
    {
        $query = Project::with(['client', 'assignedUser']);

        // Search
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhereHas('client', function($q) use ($search) {
                      $q->where('name', 'LIKE', "%{$search}%");
                  });
        }

        // Status filter
        if ($request->has('status') && $request->get('status') !== '') {
            $query->where('status', $request->get('status'));
        }

        // Priority filter
        if ($request->has('priority') && $request->get('priority') !== '') {
            $query->where('priority', $request->get('priority'));
        }

        // Client filter
        if ($request->has('client_id') && $request->get('client_id') !== '') {
            $query->where('client_id', $request->get('client_id'));
        }

        // Assigned user filter
        if ($request->has('assigned_to') && $request->get('assigned_to') !== '') {
            $query->where('assigned_to', $request->get('assigned_to'));
        }

        // Sorting
        $sortColumn = $request->get('sort', 'created_at');
        $sortOrder = $request->get('order', 'desc');
        $query->orderBy($sortColumn, $sortOrder);

        $projects = $query->paginate(10);

        return response()->json($projects);
    }

    public function create()
    {
        $clients = Client::all();
        $services = Service::all();
        $users = User::all();
        return view('admin.projects.create', compact('clients', 'services', 'users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'client_id' => 'required|exists:clients,id',
            'assigned_to' => 'nullable|exists:users,id',
            'status' => 'required|in:planning,in-progress,completed,on-hold,cancelled',
            'priority' => 'required|in:low,medium,high,urgent',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'budget' => 'nullable|numeric|min:0',
            'actual_cost' => 'nullable|numeric|min:0',
            'progress' => 'nullable|integer|min:0|max:100',
            'technologies' => 'nullable|array',
            'technologies.*' => 'string|max:100',
            'attachments' => 'nullable|array',
            'attachments.*' => 'file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:10240',
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
            $data = $request->all();
            
            // Handle file attachments
            if ($request->hasFile('attachments')) {
                $attachments = [];
                foreach ($request->file('attachments') as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('projects', $filename, 'public');
                    $attachments[] = $filename;
                }
                $data['attachments'] = json_encode($attachments);
            }

            // Convert technologies array to JSON
            if ($request->has('technologies')) {
                $data['technologies'] = json_encode($request->technologies);
            }

            $project = Project::create($data);
            
            return response()->json([
                'success' => true,
                'message' => 'Project created successfully',
                'project' => $project
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating project: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(Project $project)
    {
        $project->load(['client', 'assignedUser']);
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $clients = Client::all();
        $users = User::all();
        return view('admin.projects.edit', compact('project', 'clients', 'users'));
    }

    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'client_id' => 'required|exists:clients,id',
            'assigned_to' => 'nullable|exists:users,id',
            'status' => 'required|in:planning,in-progress,completed,on-hold,cancelled',
            'priority' => 'required|in:low,medium,high,urgent',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'budget' => 'nullable|numeric|min:0',
            'actual_cost' => 'nullable|numeric|min:0',
            'progress' => 'nullable|integer|min:0|max:100',
            'technologies' => 'nullable|array',
            'technologies.*' => 'string|max:100',
            'attachments' => 'nullable|array',
            'attachments.*' => 'file|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png|max:10240',
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
            $data = $request->all();
            
            // Handle file attachments
            if ($request->hasFile('attachments')) {
                // Delete old attachments
                if ($project->attachments) {
                    $oldAttachments = json_decode($project->attachments, true);
                    foreach ($oldAttachments as $attachment) {
                        Storage::disk('public')->delete('projects/' . $attachment);
                    }
                }
                
                $attachments = [];
                foreach ($request->file('attachments') as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('projects', $filename, 'public');
                    $attachments[] = $filename;
                }
                $data['attachments'] = json_encode($attachments);
            }

            // Convert technologies array to JSON
            if ($request->has('technologies')) {
                $data['technologies'] = json_encode($request->technologies);
            }

            $project->update($data);
            
            return response()->json([
                'success' => true,
                'message' => 'Project updated successfully',
                'project' => $project
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating project: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Project $project)
    {
        try {
            // Delete attachments
            if ($project->attachments) {
                $attachments = json_decode($project->attachments, true);
                foreach ($attachments as $attachment) {
                    Storage::disk('public')->delete('projects/' . $attachment);
                }
            }
            
            $project->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Project deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting project: ' . $e->getMessage()
            ], 500);
        }
    }

    public function updateProgress(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'progress' => 'required|integer|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $project->update(['progress' => $request->progress]);
            
            return response()->json([
                'success' => true,
                'message' => 'Project progress updated',
                'progress' => $project->progress
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating progress: ' . $e->getMessage()
            ], 500);
        }
    }

    public function stats()
    {
        $stats = [
            'total' => Project::count(),
            'planning' => Project::where('status', 'planning')->count(),
            'in_progress' => Project::where('status', 'in-progress')->count(),
            'completed' => Project::where('status', 'completed')->count(),
            'on_hold' => Project::where('status', 'on-hold')->count(),
            'cancelled' => Project::where('status', 'cancelled')->count(),
            'high_priority' => Project::where('priority', 'high')->count(),
            'urgent_priority' => Project::where('priority', 'urgent')->count(),
            'total_budget' => Project::sum('budget'),
            'total_actual_cost' => Project::sum('actual_cost'),
            'avg_progress' => Project::avg('progress'),
            'new_this_month' => Project::whereMonth('created_at', now()->month)->count(),
            'growth_rate' => $this->calculateGrowthRate()
        ];

        return response()->json($stats);
    }

    private function calculateGrowthRate()
    {
        $thisMonth = Project::whereMonth('created_at', now()->month)->count();
        $lastMonth = Project::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100), 2);
    }

    public function export()
    {
        $projects = Project::with(['client', 'assignedUser'])->get();
        
        $filename = "projects_" . date('Y-m-d') . ".csv";
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($projects) {
            $file = fopen('php://output', 'w');
            
            // CSV header
            fputcsv($file, ['Name', 'Client', 'Assigned To', 'Status', 'Priority', 'Budget', 'Actual Cost', 'Progress', 'Start Date', 'End Date', 'Created At']);
            
            // CSV data
            foreach ($projects as $project) {
                fputcsv($file, [
                    $project->name,
                    $project->client?->name ?? 'N/A',
                    $project->assignedUser?->name ?? 'Unassigned',
                    $project->status,
                    $project->priority,
                    $project->budget,
                    $project->actual_cost,
                    $project->progress . '%',
                    $project->start_date?->format('Y-m-d') ?? 'N/A',
                    $project->end_date?->format('Y-m-d') ?? 'N/A',
                    $project->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
