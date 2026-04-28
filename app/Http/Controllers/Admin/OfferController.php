<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OfferController extends Controller
{
    /**
     * Display a listing of offers.
     */
    public function index()
    {
        $offers = Offer::orderBy('created_at', 'desc')->get();
        return view('admin.offers.index', compact('offers'));
    }

    /**
     * Get offers data for DataTables/AJAX.
     */
    public function data(): JsonResponse
    {
        $offers = Offer::orderBy('created_at', 'desc')->get();
        return response()->json(['data' => $offers]);
    }

    /**
     * Show the form for creating a new offer.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created offer.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code' => 'required|string|unique:offers,code',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'min_purchase' => 'nullable|numeric|min:0',
            'max_discount' => 'nullable|numeric|min:0',
            'usage_limit' => 'nullable|integer|min:1',
            'valid_from' => 'nullable|date',
            'valid_until' => 'nullable|date|after:valid_from',
            'is_active' => 'boolean',
            'applicable_services' => 'nullable|array',
        ]);

        Offer::create($validated);

        return redirect()->route('admin.offers.index')
            ->with('success', 'Offer created successfully.');
    }

    /**
     * Display the specified offer.
     */
    public function show(Offer $offer)
    {
        return view('admin.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified offer.
     */
    public function edit(Offer $offer)
    {
        return view('admin.offers.edit', compact('offer'));
    }

    /**
     * Update the specified offer.
     */
    public function update(Request $request, Offer $offer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'code' => 'required|string|unique:offers,code,' . $offer->id,
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'min_purchase' => 'nullable|numeric|min:0',
            'max_discount' => 'nullable|numeric|min:0',
            'usage_limit' => 'nullable|integer|min:1',
            'valid_from' => 'nullable|date',
            'valid_until' => 'nullable|date|after:valid_from',
            'is_active' => 'boolean',
            'applicable_services' => 'nullable|array',
        ]);

        $offer->update($validated);

        return redirect()->route('admin.offers.index')
            ->with('success', 'Offer updated successfully.');
    }

    /**
     * Remove the specified offer.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('admin.offers.index')
            ->with('success', 'Offer deleted successfully.');
    }

    /**
     * Toggle offer active status.
     */
    public function toggleActive(Offer $offer): JsonResponse
    {
        $offer->update(['is_active' => !$offer->is_active]);
        return response()->json(['success' => true, 'is_active' => $offer->is_active]);
    }

    /**
     * Get offer statistics.
     */
    public function stats(): JsonResponse
    {
        $stats = [
            'total' => Offer::count(),
            'active' => Offer::where('is_active', true)->count(),
            'valid' => Offer::where('is_active', true)->where(function($q) {
                $q->whereNull('valid_until')->orWhere('valid_until', '>', now());
            })->count(),
            'expired' => Offer::where('valid_until', '<', now())->count(),
            'total_used' => Offer::sum('used_count'),
        ];
        return response()->json($stats);
    }

    /**
     * Export offers.
     */
    public function export()
    {
        $offers = Offer::all();
        return response()->json(['data' => $offers]);
    }
}
