<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index()
    {
        return view('admin.messages.index');
    }

    public function data(Request $request)
    {
        $query = Message::with('assignedUser');

        // Search
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('subject', 'LIKE', "%{$search}%")
                  ->orWhere('message', 'LIKE', "%{$search}%");
        }

        // Status filter
        if ($request->has('status') && $request->get('status') !== '') {
            $query->where('status', $request->get('status'));
        }

        // Priority filter
        if ($request->has('priority') && $request->get('priority') !== '') {
            $query->where('priority', $request->get('priority'));
        }

        // Read/Unread filter
        if ($request->has('read_status') && $request->get('read_status') !== '') {
            if ($request->get('read_status') === 'unread') {
                $query->whereNull('read_at');
            } elseif ($request->get('read_status') === 'read') {
                $query->whereNotNull('read_at');
            }
        }

        // Sorting
        $sortColumn = $request->get('sort', 'created_at');
        $sortOrder = $request->get('order', 'desc');
        $query->orderBy($sortColumn, $sortOrder);

        $messages = $query->paginate(10);

        return response()->json($messages);
    }

    public function create()
    {
        $users = User::all();
        return view('admin.messages.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'status' => 'required|in:new,in-progress,resolved,closed',
            'priority' => 'required|in:low,medium,high,urgent',
            'assigned_to' => 'nullable|exists:users,id',
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
            $message = Message::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Message created successfully',
                'message' => $message
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating message: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(Message $message)
    {
        // Mark as read if not already read
        if ($message->isUnread()) {
            $message->markAsRead();
        }

        $message->load('assignedUser');
        return view('admin.messages.show', compact('message'));
    }

    public function edit(Message $message)
    {
        $users = User::all();
        return view('admin.messages.edit', compact('message', 'users'));
    }

    public function update(Request $request, Message $message)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
            'status' => 'required|in:new,in-progress,resolved,closed',
            'priority' => 'required|in:low,medium,high,urgent',
            'assigned_to' => 'nullable|exists:users,id',
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
            $message->update($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Message updated successfully',
                'message' => $message
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating message: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Message $message)
    {
        try {
            $message->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Message deleted successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting message: ' . $e->getMessage()
            ], 500);
        }
    }

    public function markAsRead(Message $message)
    {
        try {
            $message->markAsRead();
            
            return response()->json([
                'success' => true,
                'message' => 'Message marked as read'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error marking message as read: ' . $e->getMessage()
            ], 500);
        }
    }

    public function markAsUnread(Message $message)
    {
        try {
            $message->update(['read_at' => null]);
            
            return response()->json([
                'success' => true,
                'message' => 'Message marked as unread'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error marking message as unread: ' . $e->getMessage()
            ], 500);
        }
    }

    public function markAsReplied(Message $message)
    {
        try {
            $message->markAsReplied();
            
            return response()->json([
                'success' => true,
                'message' => 'Message marked as replied'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error marking message as replied: ' . $e->getMessage()
            ], 500);
        }
    }

    public function stats()
    {
        $stats = [
            'total' => Message::count(),
            'unread' => Message::whereNull('read_at')->count(),
            'read' => Message::whereNotNull('read_at')->count(),
            'replied' => Message::whereNotNull('replied_at')->count(),
            'new' => Message::where('status', 'new')->count(),
            'in_progress' => Message::where('status', 'in-progress')->count(),
            'resolved' => Message::where('status', 'resolved')->count(),
            'closed' => Message::where('status', 'closed')->count(),
            'high_priority' => Message::where('priority', 'high')->count(),
            'urgent_priority' => Message::where('priority', 'urgent')->count(),
            'new_this_month' => Message::whereMonth('created_at', now()->month)->count(),
            'growth_rate' => $this->calculateGrowthRate()
        ];

        return response()->json($stats);
    }

    private function calculateGrowthRate()
    {
        $thisMonth = Message::whereMonth('created_at', now()->month)->count();
        $lastMonth = Message::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100), 2);
    }

    public function export()
    {
        $messages = Message::with('assignedUser')->get();
        
        $filename = "messages_" . date('Y-m-d') . ".csv";
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($messages) {
            $file = fopen('php://output', 'w');
            
            // CSV header
            fputcsv($file, ['Name', 'Email', 'Phone', 'Subject', 'Message', 'Status', 'Priority', 'Assigned To', 'Read At', 'Replied At', 'Created At']);
            
            // CSV data
            foreach ($messages as $message) {
                fputcsv($file, [
                    $message->name,
                    $message->email,
                    $message->phone,
                    $message->subject,
                    $message->message,
                    $message->status,
                    $message->priority,
                    $message->assignedUser?->name ?? 'Unassigned',
                    $message->read_at?->format('Y-m-d H:i:s') ?? 'Not read',
                    $message->replied_at?->format('Y-m-d H:i:s') ?? 'Not replied',
                    $message->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
