<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = ContactSubmission::query();

        // Filter by status
        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(ContactSubmission $contact)
    {
        // Mark as read if status is new
        if ($contact->status === 'new') {
            $contact->markAsRead();
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function edit(ContactSubmission $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, ContactSubmission $contact)
    {
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(ContactSubmission::getStatuses())),
            'notes' => 'nullable|string|max:1000',
        ]);

        $contact->update($validated);

        return redirect()->route('admin.contacts.show', $contact)
            ->with('success', 'Contact updated successfully.');
    }

    public function destroy(ContactSubmission $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully.');
    }

    public function updateStatus(Request $request, ContactSubmission $contact)
    {
        $validated = $request->validate([
            'status' => 'required|in:' . implode(',', array_keys(ContactSubmission::getStatuses())),
        ]);

        $contact->update(['status' => $validated['status']]);

        return redirect()->back()
            ->with('success', 'Status updated successfully.');
    }
}
