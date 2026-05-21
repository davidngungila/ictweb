<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageOrder;
use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingController extends Controller
{
    /**
     * Display a listing of the bookings.
     */
    public function index(Request $request)
    {
        $query = PackageOrder::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('order_number', 'like', "%{$search}%")
                  ->orWhere('client_name', 'like', "%{$search}%")
                  ->orWhere('client_email', 'like', "%{$search}%")
                  ->orWhere('company_name', 'like', "%{$search}%");
            });
        }

        // Filter by Status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by Service
        if ($request->filled('service_id')) {
            $query->where('service_id', $request->service_id);
        }

        $bookings = $query->orderBy('created_at', 'desc')->paginate(15);
        
        $stats = [
            'total' => PackageOrder::count(),
            'pending' => PackageOrder::where('status', 'pending')->count(),
            'completed' => PackageOrder::where('status', 'completed')->count(),
            'cancelled' => PackageOrder::where('status', 'cancelled')->count(),
        ];

        $services = Service::all();

        return view('admin.bookings.index', compact('bookings', 'stats', 'services'));
    }

    /**
     * Display the specified booking.
     */
    public function show(PackageOrder $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    /**
     * Download the booking as a PDF document.
     */
    public function downloadPdf(PackageOrder $booking)
    {
        $package = \App\Support\PackagePricing::package($booking->service_id, $booking->package_id);
        
        $pdf = Pdf::loadView('admin.bookings.pdf', [
            'booking' => $booking,
            'package' => $package
        ]);

        return $pdf->download("Booking-{$booking->order_number}.pdf");
    }

    /**
     * Update the status of a booking.
     */
    public function updateStatus(Request $request, PackageOrder $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled'
        ]);

        $booking->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Booking status updated successfully.');
    }

    /**
     * Remove the specified booking.
     */
    public function destroy(PackageOrder $booking)
    {
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
