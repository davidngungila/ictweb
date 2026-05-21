<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Package;
use App\Support\PackagePricing;

class ServiceAndPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Services
        $services = [
            [
                'id' => 1,
                'name' => 'Web Development',
                'category' => 'web',
                'description' => 'Custom websites for all businesses — from simple starter sites to complex e-commerce platforms.',
                'icon' => 'fas fa-code',
                'status' => 'active',
            ],
            [
                'id' => 2,
                'name' => 'Mobile App Development',
                'category' => 'app',
                'description' => 'Cross-platform Android & iOS apps built with Flutter and React Native.',
                'icon' => 'fas fa-mobile-alt',
                'status' => 'active',
            ],
            [
                'id' => 3,
                'name' => 'Network Installation',
                'category' => 'system',
                'description' => 'Professional network infrastructure for offices, hotels, lodges, and camps.',
                'icon' => 'fas fa-network-wired',
                'status' => 'active',
            ],
            [
                'id' => 4,
                'name' => 'Cybersecurity',
                'category' => 'security',
                'description' => 'Protect your business with comprehensive vulnerability assessments and 24/7 monitoring.',
                'icon' => 'fas fa-shield-alt',
                'status' => 'active',
            ],
            [
                'id' => 5,
                'name' => 'IT Support',
                'category' => 'support',
                'description' => 'Reliable ongoing IT support from remote troubleshooting to on-site service.',
                'icon' => 'fas fa-headset',
                'status' => 'active',
            ],
            [
                'id' => 6,
                'name' => 'ICT Consultancy',
                'category' => 'consultancy',
                'description' => 'Strategic digital transformation guidance and technology roadmaps.',
                'icon' => 'fas fa-lightbulb',
                'status' => 'active',
            ],
        ];

        foreach ($services as $serviceData) {
            Service::updateOrCreate(['id' => $serviceData['id']], $serviceData);
        }

        // 2. Seed Packages from PackagePricing support class
        foreach ([1, 2, 3, 4, 5, 6] as $serviceId) {
            $tiers = PackagePricing::packagesForService($serviceId);
            foreach ($tiers as $tierId => $tier) {
                Package::updateOrCreate(
                    [
                        'service_id' => $serviceId,
                        'name' => $tier['name'],
                    ],
                    [
                        'description' => $tier['desc'],
                        'price' => $tier['price'],
                        'duration' => 'project',
                        'features' => $tier['features'],
                        'is_popular' => $tier['popular'] ?? false,
                        'status' => 'active',
                        'sort_order' => $tierId,
                    ]
                );
            }
        }
    }
}
