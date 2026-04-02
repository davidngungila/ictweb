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
        // Return JSON if requested via AJAX
        if (request()->expectsJson()) {
            return response()->json($client);
        }
        
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

    public function export()
    {
        $clients = Client::all();
        
        $filename = "clients_" . date('Y-m-d') . ".csv";
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($clients) {
            $file = fopen('php://output', 'w');
            
            // CSV header
            fputcsv($file, ['Name', 'Email', 'Phone', 'Company', 'Address', 'City', 'Country', 'Status', 'Notes', 'Created At']);
            
            // CSV data
            foreach ($clients as $client) {
                fputcsv($file, [
                    $client->name,
                    $client->email,
                    $client->phone,
                    $client->company,
                    $client->address,
                    $client->city,
                    $client->country,
                    $client->status,
                    $client->notes,
                    $client->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function importSample()
    {
        $filename = "clients_import_sample.csv";
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() {
            $file = fopen('php://output', 'w');
            
            // CSV header
            fputcsv($file, ['Name', 'Email', 'Phone', 'Company', 'Address', 'City', 'Country', 'Status', 'Notes']);
            
            // Sample data
            fputcsv($file, [
                'John Doe',
                'john@example.com',
                '+255 123 456 789',
                'Example Company',
                '123 Main St, Dar es Salaam',
                'Dar es Salaam',
                'Tanzania',
                'active',
                'Sample client for import'
            ]);
            
            fputcsv($file, [
                'Jane Smith',
                'jane@example.com',
                '+255 987 654 321',
                'Another Company',
                '456 Oak Ave, Arusha',
                'Arusha',
                'Tanzania',
                'pending',
                'Another sample client'
            ]);
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,xlsx,xls|max:10240'
        ]);

        try {
            $file = $request->file('file');
            $imported = 0;
            $errors = [];

            if ($file->getClientOriginalExtension() === 'csv') {
                $imported = $this->importFromCSV($file, $errors);
            } else {
                // For Excel files, you might need to install a package like laravel-excel
                return response()->json([
                    'success' => false,
                    'message' => 'Excel import not yet supported. Please use CSV format.'
                ], 400);
            }

            return response()->json([
                'success' => true,
                'message' => "Successfully imported {$imported} clients",
                'imported' => $imported,
                'errors' => $errors
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error importing clients: ' . $e->getMessage()
            ], 500);
        }
    }

    private function importFromCSV($file, &$errors)
    {
        $imported = 0;
        $handle = fopen($file->getPathname(), 'r');
        
        if ($handle) {
            // Skip header row
            fgetcsv($handle);
            
            while (($row = fgetcsv($handle)) !== FALSE) {
                try {
                    $data = [
                        'name' => $row[0] ?? '',
                        'email' => $row[1] ?? '',
                        'phone' => $row[2] ?? '',
                        'company' => $row[3] ?? '',
                        'address' => $row[4] ?? '',
                        'city' => $row[5] ?? '',
                        'country' => $row[6] ?? '',
                        'status' => $row[7] ?? 'pending',
                        'notes' => $row[8] ?? '',
                    ];

                    // Validate required fields
                    if (empty($data['name']) || empty($data['email'])) {
                        $errors[] = "Row " . ($imported + 2) . ": Name and Email are required";
                        continue;
                    }

                    // Check if email already exists
                    if (Client::where('email', $data['email'])->exists()) {
                        $errors[] = "Row " . ($imported + 2) . ": Email {$data['email']} already exists";
                        continue;
                    }

                    // Validate status
                    if (!in_array($data['status'], ['active', 'inactive', 'pending'])) {
                        $data['status'] = 'pending';
                    }

                    Client::create($data);
                    $imported++;

                } catch (\Exception $e) {
                    $errors[] = "Row " . ($imported + 2) . ": " . $e->getMessage();
                }
            }
            
            fclose($handle);
        }
        
        return $imported;
    }

    private function calculateGrowthRate()
    {
        $thisMonth = Client::whereMonth('created_at', now()->month)->count();
        $lastMonth = Client::whereMonth('created_at', now()->subMonth()->month)->count();
        
        if ($lastMonth == 0) {
            return $thisMonth > 0 ? 100 : 0;
        }
        
        return round((($thisMonth - $lastMonth) / $lastMonth * 100), 2);
    }
}
