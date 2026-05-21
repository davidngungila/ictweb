<?php

namespace App\Support;

/**
 * Canonical tier prices per service (tiers 1–3). Aligns with public /pricing ranges as mid-point estimates.
 */
class PackagePricing
{
    /**
     * @return array<int, array{name:string, price:int, desc:string, features:array<int,string>, popular?:bool}>
     */
    public static function packagesForService(int $serviceId): array
    {
        return match ($serviceId) {
            1 => [
                1 => [
                    'name' => 'Web Starter',
                    'price' => 550_000,
                    'desc' => 'Individuals & small businesses — responsive brochure sites.',
                    'features' => [
                        '1–5 pages, mobile-responsive',
                        'Contact form & WhatsApp CTA',
                        'Basic analytics setup',
                    ],
                ],
                2 => [
                    'name' => 'Web Business',
                    'price' => 1_150_000,
                    'desc' => 'Growing brands — CMS, blog, and conversion tracking.',
                    'popular' => true,
                    'features' => [
                        '8–15 pages with CMS & blog',
                        'Professional email + SSL hardening',
                        'Advanced analytics dashboard',
                    ],
                ],
                3 => [
                    'name' => 'Online Store (E‑Commerce)',
                    'price' => 2_000_000,
                    'desc' => 'Sell online with cart, checkout, and mobile money.',
                    'features' => [
                        'Product catalogue & order dashboard',
                        'M‑Pesa / TigoPesa / AzamPesa ready',
                        'SMS order notifications',
                    ],
                ],
            ],
            2 => [
                1 => [
                    'name' => 'App Basic',
                    'price' => 4_500_000,
                    'desc' => 'Cross‑platform informational apps (Flutter / React Native).',
                    'features' => [
                        'Android + iOS builds',
                        'Gallery, maps, contact flows',
                        'Store submission support',
                    ],
                ],
                2 => [
                    'name' => 'App Standard',
                    'price' => 9_000_000,
                    'desc' => 'Accounts, bookings, and integrated mobile money.',
                    'popular' => true,
                    'features' => [
                        'User profiles & bookings',
                        'Push notifications',
                        'Mobile money payments',
                    ],
                ],
                3 => [
                    'name' => 'App Enterprise',
                    'price' => 18_500_000,
                    'desc' => 'Multi‑role platforms, GPS, APIs, and custom backends.',
                    'features' => [
                        'Admin + driver/customer roles',
                        'Real‑time tracking & APIs',
                        'White‑label branding',
                    ],
                ],
            ],
            3 => [
                1 => [
                    'name' => 'Network Basic',
                    'price' => 500_000,
                    'desc' => 'Home / small office — survey, single AP/router.',
                    'features' => [
                        'Coverage planning & install',
                        'Basic firewall & credentials doc',
                        'Performance smoke test',
                    ],
                ],
                2 => [
                    'name' => 'Network Standard',
                    'price' => 1_100_000,
                    'desc' => 'Multi‑AP with guest Wi‑Fi segregation.',
                    'popular' => true,
                    'features' => [
                        'Guest + staff VLANs',
                        'Bandwidth management',
                        'SMS maintenance alerts',
                    ],
                ],
                3 => [
                    'name' => 'Network Enterprise',
                    'price' => 2_750_000,
                    'desc' => 'Lodges / offices — enterprise-grade Wi‑Fi & monitoring.',
                    'features' => [
                        'Multi‑site / VLAN design',
                        '24/7 monitoring options',
                        'Optional CCTV handoff',
                    ],
                ],
            ],
            4 => [
                1 => [
                    'name' => 'Security Basic',
                    'price' => 450_000,
                    'desc' => 'One‑off hardening — scan, firewall, report.',
                    'features' => [
                        'Vulnerability assessment',
                        'Malware sweep & firewall tune',
                        'Executive summary report',
                    ],
                ],
                2 => [
                    'name' => 'Security Standard (Retainer)',
                    'price' => 900_000,
                    'desc' => 'Ongoing monitoring & weekly scans (monthly retainer benchmark).',
                    'popular' => true,
                    'features' => [
                        '24/7 alerting baseline',
                        'Weekly scans & patching cadence',
                        'Monthly security report',
                    ],
                ],
                3 => [
                    'name' => 'Security Enterprise',
                    'price' => 3_500_000,
                    'desc' => 'SOC‑style engagement — pentest + compliance track.',
                    'features' => [
                        'Penetration testing package',
                        'TCRA / GDPR alignment support',
                        'Dedicated analyst hours',
                    ],
                ],
            ],
            5 => [
                1 => [
                    'name' => 'IT Support Basic',
                    'price' => 225_000,
                    'desc' => 'Remote weekday coverage (monthly retainer benchmark).',
                    'features' => [
                        'Remote troubleshooting',
                        'SMS ticketing',
                        'Up to 5 endpoints',
                    ],
                ],
                2 => [
                    'name' => 'IT Support Standard',
                    'price' => 450_000,
                    'desc' => 'Remote + scheduled on‑site (monthly benchmark).',
                    'popular' => true,
                    'features' => [
                        'On‑site visits included',
                        'SLA-oriented response targets',
                        'Monthly health reports',
                    ],
                ],
                3 => [
                    'name' => 'IT Support Enterprise',
                    'price' => 900_000,
                    'desc' => '24/7 enterprise desk & escalation.',
                    'features' => [
                        '24/7 coverage options',
                        'Dedicated account manager',
                        'Priority escalation path',
                    ],
                ],
            ],
            6 => [
                1 => [
                    'name' => 'Consultancy Discovery',
                    'price' => 800_000,
                    'desc' => 'Architecture review & prioritized roadmap.',
                    'features' => [
                        'Stakeholder workshops',
                        'Risk & cost snapshot',
                        '90‑day action plan',
                    ],
                ],
                2 => [
                    'name' => 'Consultancy Transformation',
                    'price' => 1_800_000,
                    'desc' => 'Vendor selection, integrations blueprint, governance.',
                    'popular' => true,
                    'features' => [
                        'Vendor scoring matrix',
                        'Integration architecture',
                        'Steering templates',
                    ],
                ],
                3 => [
                    'name' => 'Consultancy Strategic Partner',
                    'price' => 4_500_000,
                    'desc' => 'Fractional CTO cadence + quarterly exec reviews.',
                    'features' => [
                        'Monthly advisory sprint',
                        'Board‑ready reporting',
                        'Transformation checkpoints',
                    ],
                ],
            ],
            default => [],
        };
    }

    /**
     * @return array<string, array<int, array{name:string, price:int, desc:string, features:array<int,string>, popular?:bool}>>
     */
    public static function matrixForJs(): array
    {
        // Try to pull from database first for "database direct" behavior
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('packages')) {
                $dbPackages = \App\Models\Package::where('status', 'active')
                    ->orderBy('service_id')
                    ->orderBy('sort_order')
                    ->get()
                    ->groupBy('service_id');

                if ($dbPackages->isNotEmpty()) {
                    $out = [];
                    foreach ($dbPackages as $sid => $packages) {
                        $serviceTiers = [];
                        foreach ($packages as $p) {
                            $serviceTiers[(int) $p->sort_order ?: $p->id] = [
                                'name' => $p->name,
                                'price' => (int) $p->price,
                                'desc' => $p->description,
                                'features' => is_array($p->features) ? $p->features : json_decode($p->features, true) ?? [],
                                'popular' => (bool) $p->is_popular,
                            ];
                        }
                        $out[(string) $sid] = $serviceTiers;
                    }
                    return $out;
                }
            }
        } catch (\Exception $e) {
            // Fallback to static data if DB fails
        }

        $out = [];
        foreach ([1, 2, 3, 4, 5, 6] as $sid) {
            $out[(string) $sid] = self::packagesForService($sid);
        }

        return $out;
    }

    /**
     * @return array{name:string, price:int}|null
     */
    public static function package(int $serviceId, int $packageId): ?array
    {
        $tier = self::packagesForService($serviceId);

        return $tier[$packageId] ?? null;
    }

    /**
     * Grouped add-ons for package step 1 UI. `price` is the amount used in the live calculator
     * (minimum of any published range); `price_label` is what the customer sees.
     *
     * @return array<int, array{heading: string, items: list<array{slug: string, name: string, desc: string, price: int, price_label: string}>}>
     */
    public static function addonCatalog(): array
    {
        return [
            [
                'heading' => '🚀 Marketing & Growth',
                'items' => [
                    ['slug' => 'travel_blog_5_posts', 'name' => 'Travel Blog + 5 Posts', 'desc' => 'High-quality content to boost SEO and attract visitors', 'price' => 150_000, 'price_label' => 'TZS 150,000'],
                    ['slug' => 'advanced_seo', 'name' => 'Advanced SEO Package', 'desc' => 'Deep keyword optimization, technical SEO, and ranking strategy', 'price' => 300_000, 'price_label' => 'TZS 300,000 – 600,000'],
                    ['slug' => 'social_auto_posting', 'name' => 'Social Media Auto-Posting', 'desc' => 'Automatically publish content to Facebook, Instagram, and more', 'price' => 150_000, 'price_label' => 'TZS 150,000'],
                    ['slug' => 'email_marketing', 'name' => 'Email Marketing Setup', 'desc' => 'Campaign setup, templates, and automation', 'price' => 200_000, 'price_label' => 'TZS 200,000'],
                    ['slug' => 'advanced_analytics', 'name' => 'Analytics & Tracking Setup (Advanced)', 'desc' => 'Google Analytics, Facebook Pixel, and conversion tracking', 'price' => 100_000, 'price_label' => 'TZS 100,000'],
                ],
            ],
            [
                'heading' => '🤖 Automation & AI',
                'items' => [
                    ['slug' => 'google_automation', 'name' => 'Google Services Automation', 'desc' => 'Automate reports, invoices, dashboards, and workflows (Sheets, Docs, Slides, Drive)', 'price' => 100_000, 'price_label' => 'TZS 100,000'],
                    ['slug' => 'ai_chatbot', 'name' => 'AI Chatbot Integration', 'desc' => 'Automated customer support and smart replies (Website + WhatsApp)', 'price' => 250_000, 'price_label' => 'TZS 250,000'],
                    ['slug' => 'bulk_sms_system', 'name' => 'Bulk SMS System Setup', 'desc' => 'Send SMS campaigns directly from your system (Admin Panel)', 'price' => 200_000, 'price_label' => 'TZS 200,000'],
                    ['slug' => 'extra_sms_credits', 'name' => 'Extra SMS Credits (100 Pack)', 'desc' => 'Additional SMS bundles for campaigns and notifications', 'price' => 50_000, 'price_label' => 'TZS 50,000'],
                ],
            ],
            [
                'heading' => '💳 Payments & Integrations',
                'items' => [
                    ['slug' => 'online_payment', 'name' => 'Online Payment Integration', 'desc' => 'Integrate M-Pesa, Airtel Money, cards, and APIs like Snippe', 'price' => 200_000, 'price_label' => 'TZS 200,000'],
                    ['slug' => 'api_integration', 'name' => 'API Integration (Any System)', 'desc' => 'Connect your system with external services (SMS, CRM, payments)', 'price' => 150_000, 'price_label' => 'TZS 150,000 – 400,000'],
                ],
            ],
            [
                'heading' => '🖥️ Systems & Features',
                'items' => [
                    ['slug' => 'admin_dashboard', 'name' => 'Admin Dashboard System', 'desc' => 'Manage users, reports, payments, and operations (Custom CMS)', 'price' => 300_000, 'price_label' => 'TZS 300,000 – 700,000'],
                    ['slug' => 'booking_system', 'name' => 'Booking & Reservation System', 'desc' => 'Online booking with calendar and notifications', 'price' => 250_000, 'price_label' => 'TZS 250,000'],
                    ['slug' => 'ecommerce', 'name' => 'E-commerce Store Setup', 'desc' => 'Sell products/services with cart and checkout', 'price' => 350_000, 'price_label' => 'TZS 350,000'],
                    ['slug' => 'tour_map_builder', 'name' => 'Custom Tour Map & Itinerary Builder', 'desc' => 'Interactive travel/tour planning system', 'price' => 250_000, 'price_label' => 'TZS 250,000'],
                ],
            ],
            [
                'heading' => '💬 Communication & Support',
                'items' => [
                    ['slug' => 'whatsapp_api', 'name' => 'WhatsApp Business API Integration', 'desc' => 'Automated messaging and customer engagement', 'price' => 200_000, 'price_label' => 'TZS 200,000'],
                    ['slug' => 'live_chat', 'name' => 'Live Chat Support System', 'desc' => 'Real-time website chat support', 'price' => 180_000, 'price_label' => 'TZS 180,000'],
                    ['slug' => 'push_notifications', 'name' => 'Push Notifications (Web + Mobile)', 'desc' => 'Instant alerts for offers and updates', 'price' => 120_000, 'price_label' => 'TZS 120,000'],
                    ['slug' => 'emergency_support', 'name' => 'Emergency 24/7 Support', 'desc' => 'Priority technical support anytime', 'price' => 100_000, 'price_label' => 'TZS 100,000/month'],
                ],
            ],
            [
                'heading' => '🌍 Localization & Branding',
                'items' => [
                    ['slug' => 'multilanguage', 'name' => 'Multi-Language (DE / FR / IT)', 'desc' => 'Reach international customers', 'price' => 300_000, 'price_label' => 'TZS 300,000 per language'],
                    ['slug' => 'logo_design', 'name' => 'Logo Design + Brand Kit', 'desc' => 'Professional branding package', 'price' => 150_000, 'price_label' => 'TZS 150,000'],
                    ['slug' => 'domain_email', 'name' => 'Domain + Professional Email Setup', 'desc' => 'Custom business emails (e.g. info@yourdomain.com)', 'price' => 80_000, 'price_label' => 'TZS 80,000'],
                ],
            ],
            [
                'heading' => '⚙️ Security, Performance & Infrastructure',
                'items' => [
                    ['slug' => 'speed_optimization', 'name' => 'Website Speed Optimization', 'desc' => 'Improve performance and loading speed', 'price' => 120_000, 'price_label' => 'TZS 120,000'],
                    ['slug' => 'security_hardening', 'name' => 'Security Hardening & Firewall Setup', 'desc' => 'Protect against hacking and vulnerabilities', 'price' => 150_000, 'price_label' => 'TZS 150,000'],
                    ['slug' => 'cloud_backup', 'name' => 'Cloud Backup & Disaster Recovery', 'desc' => 'Automatic backups and restore solutions', 'price' => 150_000, 'price_label' => 'TZS 150,000/month'],
                    ['slug' => 'performance_report', 'name' => 'Monthly Performance Report', 'desc' => 'Detailed insights on system performance', 'price' => 80_000, 'price_label' => 'TZS 80,000/month'],
                ],
            ],
            [
                'heading' => '🔍 System Auditing (Premium)',
                'items' => [
                    ['slug' => 'system_audit', 'name' => 'System Audit & Performance Review', 'desc' => 'Full inspection: security, performance, code, APIs. Includes vulnerability check, payment & API audit, SEO review', 'price' => 200_000, 'price_label' => 'TZS 200,000 – 500,000'],
                    ['slug' => 'monthly_monitoring', 'name' => 'Monthly System Monitoring & Audit', 'desc' => 'Continuous monitoring, alerts, and optimization', 'price' => 150_000, 'price_label' => 'TZS 150,000/month'],
                    ['slug' => 'penetration_testing', 'name' => 'Penetration Testing (Advanced Security)', 'desc' => 'Simulated real-world attacks to test system security', 'price' => 400_000, 'price_label' => 'TZS 400,000+'],
                ],
            ],
            [
                'heading' => '📱 Mobile & Advanced',
                'items' => [
                    ['slug' => 'mobile_app_android', 'name' => 'Mobile App (Android – Basic)', 'desc' => 'Convert your system into a mobile app', 'price' => 800_000, 'price_label' => 'TZS 800,000+'],
                ],
            ],
        ];
    }

    /**
     * @return array<string, int>
     */
    public static function addonPrices(): array
    {
        $prices = [];
        foreach (self::addonCatalog() as $group) {
            foreach ($group['items'] as $item) {
                $prices[$item['slug']] = $item['price'];
            }
        }

        return $prices;
    }

    /**
     * @return array<string, string>
     */
    public static function addonLabels(): array
    {
        $labels = [];
        foreach (self::addonCatalog() as $group) {
            foreach ($group['items'] as $item) {
                $labels[$item['slug']] = $item['name'];
            }
        }

        return $labels;
    }

    /**
     * First deposit as a fraction of total project price (remainder follows the plan schedule).
     */
    public static function advanceFractionForPlan(?string $plan): float
    {
        return match ($plan) {
            'startup'    => 0.50,
            'standard'   => 0.40,
            'enterprise' => 0.30,
            'full'       => 1.00,
            default      => 0.50,
        };
    }

    public static function advancePercentForPlan(?string $plan): int
    {
        return (int) round(100 * self::advanceFractionForPlan($plan));
    }

    public static function paymentPlanLabel(?string $plan): string
    {
        return match ($plan) {
            'startup' => 'Startup / Small Project Plan',
            'standard' => 'Standard Project Plan',
            'enterprise' => 'Enterprise / Large Project Plan',
            'one_time' => 'Legacy: one-time style (30% initial)',
            'milestone' => 'Legacy: milestone style (30% initial)',
            'monthly' => 'Legacy: monthly style (30% initial)',
            default => 'Enterprise / Large Project Plan',
        };
    }

    /**
     * URL to package wizard step 1 with optional pricing vertical (e.g. tour websites share web tiers).
     */
    public static function wizardUrl(int $serviceId, int $packageId = 1, ?string $vertical = null): string
    {
        $query = [
            'service_id' => $serviceId,
            'package_id' => $packageId,
        ];
        if ($vertical !== null && $vertical !== '') {
            $query['vertical'] = $vertical;
        }

        return route('package.selection.step1', $query);
    }

    /**
     * When `?vertical=tour` with service_id=1, the wizard shows tour-oriented labels (same tier prices as web).
     *
     * @return array<string, array{name?: string, desc?: string, features?: list<string>, popular?: bool}>
     */
    public static function tourVerticalTierOverlays(): array
    {
        return [
            '1' => [
                'name' => 'Tour Starter',
                'desc' => 'Best for solo guides & new startups.',
                'features' => [
                    '1–5 pages (Home, About, Tours, Contact)',
                    'Basic tour listing with descriptions & pricing',
                    'Photo gallery (up to 20 photos)',
                    'WhatsApp & phone booking CTAs',
                    '50 SMS credits included',
                    'Basic Google Analytics',
                ],
            ],
            '2' => [
                'name' => 'Tour Business',
                'desc' => 'Growing safari operators.',
                'popular' => true,
                'features' => [
                    '8–15 pages with blog & testimonials',
                    'Calendar-based booking engine',
                    'M-Pesa, TigoPesa & AzamPesa payments',
                    'Safari package management panel',
                    'Video embedding (safari footage)',
                    '200 SMS credits included',
                    'Advanced analytics & conversion funnels',
                ],
            ],
            '3' => [
                'name' => 'Tour Enterprise',
                'desc' => 'Kilimanjaro specialists & large operators.',
                'features' => [
                    'Unlimited pages — fully custom',
                    'Full tour management admin panel',
                    'Multi-currency & multi-language (EN/DE/FR)',
                    'Customer CRM with trip history',
                    'Invoices, itineraries & vouchers',
                    'Email marketing newsletter system',
                    '500 SMS credits + bulk SMS campaigns',
                ],
            ],
        ];
    }

    public static function paymentWorkLegalNote(): string
    {
        return 'Project work begins after agreed deposit payment. Final files, deployment access, or system transfer will be completed after full payment clearance.';
    }
}
