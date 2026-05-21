<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PricingPlan;
use App\Models\Offer;

class PricingAndOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed Pricing Plans
        $pricingPlans = [
            [
                'name' => 'Starter Plan',
                'description' => 'Perfect for small businesses starting their digital journey.',
                'price' => 250000.00,
                'billing_cycle' => 'monthly',
                'features' => ['Basic Support', '5GB Storage', '1 Domain'],
                'currency' => 'TZS',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Business Plan',
                'description' => 'Ideal for growing companies needing more power.',
                'price' => 750000.00,
                'billing_cycle' => 'monthly',
                'features' => ['Priority Support', '50GB Storage', '5 Domains', 'Analytics'],
                'currency' => 'TZS',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Enterprise Plan',
                'description' => 'Custom solutions for large scale operations.',
                'price' => 2500000.00,
                'billing_cycle' => 'monthly',
                'features' => ['24/7 Support', 'Unlimited Storage', 'Unlimited Domains', 'Advanced Security'],
                'currency' => 'TZS',
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($pricingPlans as $plan) {
            PricingPlan::updateOrCreate(['name' => $plan['name']], $plan);
        }

        // Seed Offers
        $offers = [
            [
                'name' => 'Welcome Discount',
                'description' => '10% off for new clients on their first project.',
                'code' => 'WELCOME10',
                'discount_type' => 'percentage',
                'discount_value' => 10.00,
                'min_purchase' => 500000.00,
                'is_active' => true,
                'valid_from' => now(),
                'valid_until' => now()->addMonths(12),
            ],
            [
                'name' => 'Seasonal Web Promo',
                'description' => 'Fixed TZS 50,000 off on web development services.',
                'code' => 'WEB50K',
                'discount_type' => 'fixed',
                'discount_value' => 50000.00,
                'min_purchase' => 1000000.00,
                'is_active' => true,
                'applicable_services' => ['1'], // Web Development
                'valid_from' => now(),
                'valid_until' => now()->addMonths(3),
            ],
        ];

        foreach ($offers as $offer) {
            Offer::updateOrCreate(['code' => $offer['code']], $offer);
        }
    }
}
