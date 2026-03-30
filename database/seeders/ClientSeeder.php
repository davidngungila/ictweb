<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing clients
        DB::table('clients')->delete();

        $clients = [
            [
                'name' => 'John Smith',
                'email' => 'john.smith@techcorp.com',
                'phone' => '+1-555-0101',
                'company' => 'TechCorp Solutions',
                'address' => '123 Technology Boulevard, Suite 100',
                'city' => 'San Francisco',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Premium enterprise client with ongoing projects',
                'created_at' => Carbon::now()->subDays(30),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah.johnson@innovate.io',
                'phone' => '+1-555-0102',
                'company' => 'Innovate Digital',
                'address' => '456 Innovation Drive, Floor 2',
                'city' => 'New York',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Growing startup with multiple web applications',
                'created_at' => Carbon::now()->subDays(25),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Michael Chen',
                'email' => 'michael.chen@globaltech.com',
                'phone' => '+1-555-0103',
                'company' => 'Global Technologies Inc.',
                'address' => '789 Business Park, Building A',
                'city' => 'Los Angeles',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Long-term enterprise partner',
                'created_at' => Carbon::now()->subDays(20),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Rodriguez',
                'email' => 'emily.rodriguez@startup.co',
                'phone' => '+1-555-0104',
                'company' => 'Startup Co.',
                'address' => '321 Startup Lane',
                'city' => 'Austin',
                'country' => 'United States',
                'status' => 'pending',
                'notes' => 'New client - onboarding in progress',
                'created_at' => Carbon::now()->subDays(15),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'David Kim',
                'email' => 'david.kim@finance.com',
                'phone' => '+1-555-0105',
                'company' => 'Finance Solutions Ltd.',
                'address' => '654 Money Street, Tower 3',
                'city' => 'Chicago',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Financial services client with compliance requirements',
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lisa Anderson',
                'email' => 'lisa.anderson@retail.com',
                'phone' => '+1-555-0106',
                'company' => 'Retail Masters',
                'address' => '987 Commerce Boulevard',
                'city' => 'Seattle',
                'country' => 'United States',
                'status' => 'inactive',
                'notes' => 'Seasonal client - account paused',
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Robert Taylor',
                'email' => 'robert.taylor@healthcare.net',
                'phone' => '+1-555-0107',
                'company' => 'Healthcare Network',
                'address' => '147 Medical Center Drive',
                'city' => 'Boston',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Healthcare industry client with HIPAA compliance needs',
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jennifer Martinez',
                'email' => 'jennifer.martinez@education.edu',
                'phone' => '+1-555-0108',
                'company' => 'Education Institute',
                'address' => '258 Learning Campus',
                'city' => 'Denver',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Educational institution with multiple campuses',
                'created_at' => Carbon::now()->subDays(1),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'William Brown',
                'email' => 'william.brown@logistics.com',
                'phone' => '+1-555-0109',
                'company' => 'Logistics Pro',
                'address' => '369 Transport Way',
                'city' => 'Miami',
                'country' => 'United States',
                'status' => 'pending',
                'notes' => 'New logistics client - contract negotiation',
                'created_at' => Carbon::now()->subHours(12),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Amanda Wilson',
                'email' => 'amanda.wilson@legal.com',
                'phone' => '+1-555-0110',
                'company' => 'Legal Associates',
                'address' => '741 Justice Boulevard',
                'city' => 'Atlanta',
                'country' => 'United States',
                'status' => 'active',
                'notes' => 'Law firm with case management requirements',
                'created_at' => Carbon::now()->subHours(6),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('clients')->insert($clients);
    }
}
