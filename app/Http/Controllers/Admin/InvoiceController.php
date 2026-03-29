<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\DemoRequest;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $query = Invoice::with('demoRequest');

        // Filter by status
        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        // Filter by payment method
        if ($request->filled('payment_method')) {
            $query->where('payment_method', $request->payment_method);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('invoice_number', 'like', "%{$search}%")
                  ->orWhere('client_name', 'like', "%{$search}%")
                  ->orWhere('client_email', 'like', "%{$search}%");
            });
        }

        $invoices = $query->orderBy('created_at', 'desc')->paginate(15);

        // Statistics
        $stats = [
            'total' => Invoice::count(),
            'paid' => Invoice::where('status', 'paid')->count(),
            'pending' => Invoice::where('status', 'pending')->count(),
            'overdue' => Invoice::overdue()->count(),
            'total_revenue' => Invoice::where('status', 'paid')->sum('total'),
            'pending_revenue' => Invoice::where('status', 'pending')->sum('total'),
        ];

        return view('admin.invoices.index', compact('invoices', 'stats'));
    }

    public function create()
    {
        $demoRequests = DemoRequest::where('status', 'completed')->get();
        return view('admin.invoices.create', compact('demoRequests'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'demo_request_id' => 'nullable|exists:demo_requests,id',
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'nullable|string|max:20',
            'description' => 'required|string|max:1000',
            'amount' => 'required|numeric|min:0',
            'tax' => 'required|numeric|min:0',
            'due_date' => 'required|date|after:today',
            'notes' => 'nullable|string|max:1000',
        ]);

        // Calculate total
        $validated['total'] = $validated['amount'] + $validated['tax'];
        
        // Generate invoice number
        $validated['invoice_number'] = 'INV-' . date('Y') . '-' . str_pad(Invoice::count() + 1, 3, '0', STR_PAD_LEFT);
        $validated['status'] = 'pending';

        $invoice = Invoice::create($validated);

        return redirect()->route('admin.invoices.show', $invoice)
            ->with('success', 'Invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {
        return view('admin.invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('admin.invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(Invoice::getStatuses())),
            'payment_method' => 'nullable|in:' . implode(',', array_keys(Invoice::getPaymentMethods())),
            'notes' => 'nullable|string|max:1000',
        ]);

        // Update paid date if status changed to paid
        if ($validated['status'] === 'paid' && $invoice->status !== 'paid') {
            $validated['paid_date'] = now();
        }

        $invoice->update($validated);

        return redirect()->route('admin.invoices.show', $invoice)
            ->with('success', 'Invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('admin.invoices.index')
            ->with('success', 'Invoice deleted successfully.');
    }

    public function markAsPaid(Invoice $invoice)
    {
        $invoice->update([
            'status' => 'paid',
            'paid_date' => now(),
        ]);

        return redirect()->back()
            ->with('success', 'Invoice marked as paid.');
    }

    public function downloadPdf(Invoice $invoice)
    {
        // This would generate a PDF invoice
        // For now, return a simple response
        return response()->json([
            'message' => 'PDF download functionality would be implemented here',
            'invoice' => $invoice->invoice_number,
        ]);
    }
}
