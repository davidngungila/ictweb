<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PricingPlanController extends Controller
{
    /**
     * Display a listing of pricing plans.
     */
    public function index()
    {
        $plans = PricingPlan::orderBy('sort_order')->get();
        return view('admin.pricing.index', compact('plans'));
    }

    /**
     * Get pricing plans data for DataTables/AJAX.
     */
    public function data(): JsonResponse
    {
        $plans = PricingPlan::orderBy('sort_order')->get();
        return response()->json(['data' => $plans]);
    }

    /**
     * Show the form for creating a new pricing plan.
     */
    public function create()
    {
        return view('admin.pricing.create');
    }

    /**
     * Store a newly created pricing plan.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'billing_cycle' => 'required|in:monthly,yearly,one-time',
            'features' => 'required|array',
            'currency' => 'required|string|max:3',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
            'stripe_price_id' => 'nullable|string|max:255',
        ]);

        PricingPlan::create($validated);

        return redirect()->route('admin.pricing.index')
            ->with('success', 'Pricing plan created successfully.');
    }

    /**
     * Display the specified pricing plan.
     */
    public function show(PricingPlan $pricingPlan)
    {
        return view('admin.pricing.show', compact('pricingPlan'));
    }

    /**
     * Show the form for editing the specified pricing plan.
     */
    public function edit(PricingPlan $pricingPlan)
    {
        return view('admin.pricing.edit', compact('pricingPlan'));
    }

    /**
     * Update the specified pricing plan.
     */
    public function update(Request $request, PricingPlan $pricingPlan)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'billing_cycle' => 'required|in:monthly,yearly,one-time',
            'features' => 'required|array',
            'currency' => 'required|string|max:3',
            'is_active' => 'boolean',
            'sort_order' => 'nullable|integer|min:0',
            'stripe_price_id' => 'nullable|string|max:255',
        ]);

        $pricingPlan->update($validated);

        return redirect()->route('admin.pricing.index')
            ->with('success', 'Pricing plan updated successfully.');
    }

    /**
     * Remove the specified pricing plan.
     */
    public function destroy(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();

        return redirect()->route('admin.pricing.index')
            ->with('success', 'Pricing plan deleted successfully.');
    }

    /**
     * Toggle pricing plan active status.
     */
    public function toggleActive(PricingPlan $pricingPlan): JsonResponse
    {
        $pricingPlan->update(['is_active' => !$pricingPlan->is_active]);
        return response()->json(['success' => true, 'is_active' => $pricingPlan->is_active]);
    }

    /**
     * Get pricing plan statistics.
     */
    public function stats(): JsonResponse
    {
        $stats = [
            'total' => PricingPlan::count(),
            'active' => PricingPlan::where('is_active', true)->count(),
            'monthly' => PricingPlan::where('billing_cycle', 'monthly')->count(),
            'yearly' => PricingPlan::where('billing_cycle', 'yearly')->count(),
            'avg_price' => PricingPlan::avg('price'),
        ];
        return response()->json($stats);
    }

    /**
     * Export pricing plans.
     */
    public function export()
    {
        $plans = PricingPlan::all();
        return response()->json(['data' => $plans]);
    }
}
