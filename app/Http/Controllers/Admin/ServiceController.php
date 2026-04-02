<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.services.index');
    }

    public function data(Request $request)
    {
        $query = Service::query();

        // Search
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('category', 'LIKE', "%{$search}%");
        }

        // Category filter
        if ($request->has('category') && $request->get('category') !== '') {
            $query->where('category', $request->get('category'));
        }

        // Status filter
        if ($request->has('status') && $request->get('status') !== '') {
            $query->where('status', $request->get('status'));
        }

        // Featured filter
        if ($request->has('featured') && $request->get('featured') !== '') {
            $query->where('featured', $request->get('featured') === 'true');
        }

        // Sorting
        $sortColumn = $request->get('sort', 'created_at');
        $sortOrder = $request->get('order', 'desc');
        $query->orderBy($sortColumn, $sortOrder);

        $services = $query->paginate(10);

        return response()->json($services);
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'category' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:100',
            'status' => 'required|in:active,inactive',
            'featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500'
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
            
            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('services', $imageName, 'public');
                $data['image'] = $imageName;
            }

            // Convert features array to JSON
            if ($request->has('features')) {
                $data['features'] = json_encode($request->features);
            }

            $service = Service::create($data);
            
            return response()->json([
                'success' => true,
                'message' => 'Service created successfully',
                'service' => $service
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating service: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'category' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:100',
            'status' => 'required|in:active,inactive',
            'featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features' => 'nullable|array',
            'features.*' => 'string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500'
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
            
            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image
                if ($service->image) {
                    Storage::disk('public')->delete('services/' . $service->image);
                }
                
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('services', $imageName, 'public');
                $data['image'] = $imageName;
            }

            // Convert features array to JSON
            if ($request->has('features')) {
                $data['features'] = json_encode($request->features);
            }

            $service->update($data);
            
            return response()->json([
                'success' => true,
                'message' => 'Service updated successfully',
                'service' => $service
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating service: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Service $service)
    {
        try {
            // Delete image if exists
            if ($service->image) {
                Storage::disk('public')->delete('services/' . $service->image);
            }
            
            $service->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Service deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting service: ' . $e->getMessage()
            ], 500);
        }
    }

    public function toggleFeatured(Service $service)
    {
        try {
            $service->update(['featured' => !$service->featured]);
            
            return response()->json([
                'success' => true,
                'message' => 'Service featured status updated',
                'featured' => $service->featured
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating service: ' . $e->getMessage()
            ], 500);
        }
    }

    public function stats()
    {
        $stats = [
            'total' => Service::count(),
            'active' => Service::where('status', 'active')->count(),
            'inactive' => Service::where('status', 'inactive')->count(),
            'featured' => Service::where('featured', true)->count(),
            'categories' => Service::distinct('category')->count('category'),
            'avg_price' => Service::avg('price'),
            'new_this_month' => Service::whereMonth('created_at', now()->month)->count(),
            'growth_rate' => $this->calculateGrowthRate()
        ];

        return response()->json($stats);
    }

    private function calculateGrowthRate()
    {
        $thisMonth = Service::whereMonth('created_at', now()->month)->count();
        $lastMonth = Service::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100), 2);
    }

    public function export()
    {
        $services = Service::all();
        
        $filename = "services_" . date('Y-m-d') . ".csv";
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($services) {
            $file = fopen('php://output', 'w');
            
            // CSV header
            fputcsv($file, ['Name', 'Description', 'Category', 'Price', 'Duration', 'Status', 'Featured', 'Created At']);
            
            // CSV data
            foreach ($services as $service) {
                fputcsv($file, [
                    $service->name,
                    $service->description,
                    $service->category,
                    $service->price,
                    $service->duration,
                    $service->status,
                    $service->featured ? 'Yes' : 'No',
                    $service->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
