<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin already exists
        $existingAdmin = \App\Models\Admin::where('email', 'admin@jezdantech.com')->first();
        
        if (!$existingAdmin) {
            Admin::create([
                'name' => 'Super Admin',
                'email' => 'admin@jezdantech.com',
                'password' => Hash::make('admin123'),
                'role' => 'super_admin',
                'active' => true,
            ]);
        }
    }
}
