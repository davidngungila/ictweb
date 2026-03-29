<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Admin;
use Carbon\Carbon;

class ExpenseController extends Controller
{
    public function index(Request $request)
    {
        $query = Expense::with('approvedBy');

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by payment method
        if ($request->filled('payment_method')) {
            $query->where('payment_method', $request->payment_method);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('expense_number', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $expenses = $query->orderBy('created_at', 'desc')->paginate(15);

        // Statistics
        $stats = [
            'total' => Expense::count(),
            'pending' => Expense::where('status', 'pending')->count(),
            'approved' => Expense::where('status', 'approved')->count(),
            'rejected' => Expense::where('status', 'rejected')->count(),
            'total_amount' => Expense::sum('amount'),
            'pending_amount' => Expense::where('status', 'pending')->sum('amount'),
            'approved_amount' => Expense::where('status', 'approved')->sum('amount'),
            'this_month' => Expense::whereMonth('expense_date', Carbon::now()->month)->sum('amount'),
        ];

        return view('admin.expenses.index', compact('expenses', 'stats'));
    }

    public function create()
    {
        return view('admin.expenses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|in:salaries,rent,utilities,marketing,equipment,software,other',
            'description' => 'required|string|max:1000',
            'amount' => 'required|numeric|min:0',
            'expense_date' => 'required|date|before_or_equal:today',
            'payment_method' => 'required|in:cash,bank_transfer,mobile_money,card',
            'receipt_url' => 'nullable|url',
            'notes' => 'nullable|string|max:1000',
        ]);

        // Generate expense number
        $validated['expense_number'] = 'EXP-' . date('Y-m') . '-' . str_pad(Expense::count() + 1, 3, '0', STR_PAD_LEFT);
        $validated['status'] = 'pending';

        $expense = Expense::create($validated);

        return redirect()->route('admin.expenses.show', $expense)
            ->with('success', 'Expense created successfully.');
    }

    public function show(Expense $expense)
    {
        return view('admin.expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        return view('admin.expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {
        $validated = $request->validate([
            'category' => 'required|in:salaries,rent,utilities,marketing,equipment,software,other',
            'description' => 'required|string|max:1000',
            'amount' => 'required|numeric|min:0',
            'expense_date' => 'required|date|before_or_equal:today',
            'payment_method' => 'required|in:cash,bank_transfer,mobile_money,card',
            'receipt_url' => 'nullable|url',
            'notes' => 'nullable|string|max:1000',
        ]);

        $expense->update($validated);

        return redirect()->route('admin.expenses.show', $expense)
            ->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('admin.expenses.index')
            ->with('success', 'Expense deleted successfully.');
    }

    public function approve(Expense $expense)
    {
        $expense->update([
            'status' => 'approved',
            'approved_by' => auth('admin')->id(),
        ]);

        return redirect()->back()
            ->with('success', 'Expense approved successfully.');
    }

    public function reject(Expense $expense)
    {
        $expense->update([
            'status' => 'rejected',
            'approved_by' => auth('admin')->id(),
        ]);

        return redirect()->back()
            ->with('success', 'Expense rejected successfully.');
    }

    public static function getCategories()
    {
        return [
            'salaries' => 'Salaries & Wages',
            'rent' => 'Rent & Utilities',
            'marketing' => 'Marketing & Advertising',
            'equipment' => 'Equipment & Supplies',
            'software' => 'Software & Subscriptions',
            'other' => 'Other Expenses',
        ];
    }
}
