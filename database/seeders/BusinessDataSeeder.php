<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\DemoRequest;
use App\Models\ContactSubmission;
use App\Models\Invoice;
use App\Models\Client;
use App\Models\Service;
use App\Models\PackageOrder;
use Illuminate\Support\Str;

class BusinessDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = Client::first();

        if (!$client) {
            return;
        }

        // Seed Projects
        $projects = [
            [
                'project_number' => 'PROJ-2026-001',
                'title' => 'E-commerce Platform for Jewelry Store',
                'description' => 'A full-featured e-commerce site with mobile money integration.',
                'client_id' => $client->id,
                'service_type' => 'Web Development',
                'status' => 'in_progress',
                'progress_percentage' => 45,
                'price' => 2500000.00,
                'currency' => 'TZS',
                'start_date' => now()->subDays(30),
                'end_date' => now()->addDays(30),
            ],
            [
                'project_number' => 'PROJ-2026-002',
                'title' => 'Corporate Network Overhaul',
                'description' => 'Upgrading office network to high-speed fiber and secure Wi-Fi.',
                'client_id' => $client->id,
                'service_type' => 'Network Installation',
                'status' => 'completed',
                'progress_percentage' => 100,
                'price' => 1500000.00,
                'currency' => 'TZS',
                'start_date' => now()->subDays(60),
                'end_date' => now()->subDays(10),
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(['project_number' => $project['project_number']], $project);
        }

        // Seed Demo Requests
        $demoRequests = [
            [
                'contact_person' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '0712345678',
                'company_name' => 'Doe Enterprises',
                'demo_type' => 'Web Development',
                'status' => 'pending',
                'message' => 'Interested in a new website for my business.',
                'preferred_date' => now()->addDays(2),
                'preferred_time' => '10:00:00',
                'job_title' => 'CEO',
                'country' => 'Tanzania',
                'city' => 'Dar es Salaam',
                'attendees' => '3',
                'language' => 'English',
                'urgency' => 'normal',
            ],
            [
                'contact_person' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '0787654321',
                'company_name' => 'Smith & Co',
                'demo_type' => 'Mobile App Development',
                'status' => 'scheduled',
                'message' => 'Would like to see a demo of the mobile app platform.',
                'preferred_date' => now()->addDays(5),
                'preferred_time' => '14:30:00',
                'job_title' => 'Project Manager',
                'country' => 'Tanzania',
                'city' => 'Arusha',
                'attendees' => '5',
                'language' => 'Swahili',
                'urgency' => 'high',
            ],
        ];

        foreach ($demoRequests as $request) {
            DemoRequest::updateOrCreate(['email' => $request['email']], $request);
        }

        // Seed Contact Submissions
        $contacts = [
            [
                'name' => 'Alice Walker',
                'email' => 'alice@example.com',
                'subject' => 'General Inquiry',
                'message' => 'Hello, I would like to know more about your services.',
                'status' => 'read',
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob@example.com',
                'subject' => 'Support Request',
                'message' => 'I am having trouble with my network connection.',
                'status' => 'new',
            ],
        ];

        foreach ($contacts as $contact) {
            ContactSubmission::updateOrCreate(['email' => $contact['email']], $contact);
        }

        // Seed Invoices
        $invoices = [
            [
                'invoice_number' => 'INV-2026-001',
                'client_name' => 'Doe Enterprises',
                'client_email' => 'john@example.com',
                'client_phone' => '0712345678',
                'description' => 'Initial Deposit for E-commerce Project',
                'amount' => 1250000.00,
                'tax' => 0.00,
                'total' => 1250000.00,
                'due_date' => now()->addDays(7),
                'status' => 'paid',
                'paid_date' => now()->subDays(2),
            ],
            [
                'invoice_number' => 'INV-2026-002',
                'client_name' => 'Smith & Co',
                'client_email' => 'jane@example.com',
                'client_phone' => '0787654321',
                'description' => 'Full Payment for Network Installation',
                'amount' => 1500000.00,
                'tax' => 0.00,
                'total' => 1500000.00,
                'due_date' => now()->subDays(5),
                'status' => 'pending',
            ],
        ];

        foreach ($invoices as $invoice) {
            Invoice::updateOrCreate(['invoice_number' => $invoice['invoice_number']], $invoice);
        }

        // Seed Package Orders (Payments)
        $orders = [
            [
                'order_number' => 'ORD-' . strtoupper(Str::random(8)),
                'client_name' => 'John Doe',
                'client_email' => 'john@example.com',
                'client_phone' => '0712345678',
                'service_id' => 1,
                'package_id' => 2,
                'selected_features' => ['Feature 1', 'Feature 2'],
                'selected_addons' => ['Addon 1'],
                'total_price' => 750000.00,
                'advance_payment' => 375000.00,
                'remaining_balance' => 375000.00,
                'payment_status' => 'completed',
                'payment_reference' => 'TXN-987654321',
                'status' => 'completed',
            ],
            [
                'order_number' => 'ORD-' . strtoupper(Str::random(8)),
                'client_name' => 'Jane Smith',
                'client_email' => 'jane@example.com',
                'client_phone' => '0787654321',
                'service_id' => 2,
                'package_id' => 3,
                'selected_features' => ['Feature A'],
                'selected_addons' => [],
                'total_price' => 1500000.00,
                'advance_payment' => 0.00,
                'remaining_balance' => 1500000.00,
                'payment_status' => 'pending',
                'status' => 'pending',
            ],
        ];

        foreach ($orders as $order) {
            PackageOrder::updateOrCreate(['client_email' => $order['client_email'], 'service_id' => $order['service_id']], $order);
        }
    }
}
