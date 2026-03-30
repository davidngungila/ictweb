<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.clients.index');
    }

    public function data(Request $request)
    {
        $query = Client::query();

        // Search
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%")
                  ->orWhere('company', 'LIKE', "%{$search}%");
        }

        // Status filter
        if ($request->has('status') && $request->get('status') !== '') {
            $query->where('status', $request->get('status'));
        }

        // Sorting
        $sortColumn = $request->get('sort', 'created_at');
        $sortOrder = $request->get('order', 'desc');
        $query->orderBy($sortColumn, $sortOrder);

        $clients = $query->paginate(10);

        return response()->json($clients);
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'status' => 'required|in:active,inactive,pending',
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
            $client = Client::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Client created successfully',
                'client' => $client
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error creating client: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'status' => 'required|in:active,inactive,pending',
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
            $client->update($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Client updated successfully',
                'client' => $client
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating client: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy(Client $client)
    {
        try {
            $clientName = $client->name;
            $client->delete();
            
            return response()->json([
                'success' => true,
                'message' => "Client '{$clientName}' deleted successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error deleting client: ' . $e->getMessage()
            ], 500);
        }
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $clients = Client::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('email', 'LIKE', "%{$query}%")
                            ->orWhere('company', 'LIKE', "%{$query}%")
                            ->paginate(10);
        
        return response()->json($clients);
    }

    public function stats()
    {
        $stats = [
            'total' => Client::count(),
            'active' => Client::where('status', 'active')->count(),
            'inactive' => Client::where('status', 'inactive')->count(),
            'pending' => Client::where('status', 'pending')->count(),
            'new_this_month' => Client::whereMonth('created_at', now()->month)->count(),
            'growth_rate' => $this->calculateGrowthRate()
        ];

        return response()->json($stats);
    }

    private function calculateGrowthRate()
    {
        $thisMonth = Client::whereMonth('created_at', now()->month)->count();
        $lastMonth = Client::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100, 2);
    }
}
