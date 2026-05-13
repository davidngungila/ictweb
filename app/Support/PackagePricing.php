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
}
