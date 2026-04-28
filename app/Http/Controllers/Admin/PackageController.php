<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PackageController extends Controller
{
    /**
     * Display a listing of packages.
     */
    public function index()
    {
        $packages = Package::orderBy('sort_order')->get();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Get packages data for DataTables/AJAX.
     */
    public function data(): JsonResponse
    {
        $packages = Package::orderBy('sort_order')->get();
        return response()->json(['data' => $packages]);
    }

    /**
     * Show the form for creating a new package.
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created package.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'is_popular' => 'boolean',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        Package::create($validated);

        return redirect()->route('admin.packages.index')
            ->with('success', 'Package created successfully.');
    }

    /**
     * Display the specified package.
     */
    public function show(Package $package)
    {
        return view('admin.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified package.
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified package.
     */
    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'duration' => 'nullable|string|max:255',
            'features' => 'nullable|array',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
            'is_popular' => 'boolean',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        $package->update($validated);

        return redirect()->route('admin.packages.index')
            ->with('success', 'Package updated successfully.');
    }

    /**
     * Remove the specified package.
     */
    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('admin.packages.index')
            ->with('success', 'Package deleted successfully.');
    }

    /**
     * Toggle package featured status.
     */
    public function toggleFeatured(Package $package): JsonResponse
    {
        $package->update(['is_popular' => !$package->is_popular]);
        return response()->json(['success' => true, 'is_popular' => $package->is_popular]);
    }

    /**
     * Get package statistics.
     */
    public function stats(): JsonResponse
    {
        $stats = [
            'total' => Package::count(),
            'active' => Package::where('status', 'active')->count(),
            'popular' => Package::where('is_popular', true)->count(),
            'avg_price' => Package::avg('price'),
        ];
        return response()->json($stats);
    }

    /**
     * Export packages.
     */
    public function export()
    {
        $packages = Package::all();
        // Implement export logic (CSV, Excel, etc.)
        return response()->json(['data' => $packages]);
    }
}
