<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequestAdminMail;
use App\Mail\QuoteRequestClientMail;
use App\Models\QuoteRequest;
use App\Support\PackagePricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QuoteRequestController extends Controller
{
    public function show(Request $request)
    {
        $serviceId = $request->integer('service_id') ?: null;
        $packageId = $request->integer('package_id') ?: null;
        $vertical = $request->string('vertical')->toString() ?: null;

        $package = ($serviceId && $packageId)
            ? PackagePricing::package($serviceId, $packageId)
            : null;

        if ($vertical === 'tour' && $serviceId === 1 && $packageId) {
            $overlays = PackagePricing::tourVerticalTierOverlays();
            if (isset($overlays[(string) $packageId]['name'])) {
                $package = array_merge($package ?? [], [
                    'name' => $overlays[(string) $packageId]['name'],
                ]);
            }
        }

        $prefillAddons = [];
        if ($request->filled('addon')) {
            $prefillAddons[] = $request->string('addon')->toString();
        }
        if ($request->has('addons')) {
            $prefillAddons = array_merge($prefillAddons, (array) $request->input('addons'));
        }

        return view('pages.request-quote', [
            'services' => $this->serviceOptions(),
            'addonCatalog' => PackagePricing::addonCatalog(),
            'packageMatrix' => PackagePricing::matrixForJs(),
            'prefill' => [
                'service_id' => $serviceId,
                'package_id' => $packageId,
                'vertical' => $vertical,
                'service_name' => $serviceId ? PackagePricing::serviceName($serviceId) : null,
                'package_name' => $package['name'] ?? null,
                'addons' => array_values(array_unique($prefillAddons)),
            ],
        ]);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'company' => 'nullable|string|max:255',
            'service_id' => 'nullable|integer|min:1|max:10',
            'package_id' => 'nullable|integer|min:1|max:10',
            'vertical' => 'nullable|string|max:50',
            'selected_addons' => 'nullable|array',
            'selected_addons.*' => 'string|max:100',
            'budget_range' => 'nullable|string|max:100',
            'timeline' => 'nullable|string|max:100',
            'project_description' => 'required|string|min:20|max:5000',
            'how_heard' => 'nullable|string|max:100',
            'privacy' => 'required|accepted',
        ], [
            'full_name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your phone number.',
            'project_description.required' => 'Please describe your project requirements.',
            'project_description.min' => 'Please provide at least 20 characters describing your project.',
            'privacy.accepted' => 'You must agree to our privacy policy.',
        ]);

        $serviceId = isset($validated['service_id']) ? (int) $validated['service_id'] : null;
        $packageId = $validated['package_id'] ?? null;
        $vertical = $validated['vertical'] ?? null;

        if ($serviceId === 9) {
            $serviceId = 1;
            $vertical = 'tour';
        }
        if ($serviceId === 0) {
            $serviceId = null;
        }

        $package = ($serviceId && $packageId)
            ? PackagePricing::package($serviceId, $packageId)
            : null;

        $packageName = $package['name'] ?? null;
        if ($vertical === 'tour' && $serviceId === 1 && $packageId) {
            $overlays = PackagePricing::tourVerticalTierOverlays();
            if (isset($overlays[(string) $packageId]['name'])) {
                $packageName = $overlays[(string) $packageId]['name'];
            }
        }

        $addonLabels = PackagePricing::addonLabels();
        $selectedSlugs = $validated['selected_addons'] ?? [];
        $selectedAddons = array_values(array_map(
            fn (string $slug) => $addonLabels[$slug] ?? $slug,
            $selectedSlugs
        ));

        $quote = QuoteRequest::create([
            'reference' => QuoteRequest::generateReference(),
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company' => $validated['company'] ?? null,
            'service_id' => $serviceId,
            'package_id' => $packageId,
            'vertical' => $vertical,
            'service_name' => $serviceId ? PackagePricing::serviceName($serviceId) : null,
            'package_name' => $packageName,
            'selected_addons' => $selectedAddons,
            'budget_range' => $validated['budget_range'] ?? null,
            'timeline' => $validated['timeline'] ?? null,
            'project_description' => $validated['project_description'],
            'how_heard' => $validated['how_heard'] ?? null,
            'ip_address' => $request->ip(),
            'status' => 'new',
        ]);

        $adminEmail = config('site.quote_admin_email', 'info@jezdantech.com');

        try {
            Mail::to($adminEmail)->send(new QuoteRequestAdminMail($quote));
            Mail::to($quote->email)->send(new QuoteRequestClientMail($quote));
        } catch (\Throwable $e) {
            Log::error('Quote request email failed', [
                'reference' => $quote->reference,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()->route('thank.you', [
            'type' => 'quote',
            'ref' => $quote->reference,
        ]);
    }

    /**
     * @return array<int, array{id: int, name: string, icon: string}>
     */
    private function serviceOptions(): array
    {
        return [
            ['id' => 1, 'name' => 'Web Development', 'icon' => 'fa-globe'],
            ['id' => 2, 'name' => 'Mobile App Development', 'icon' => 'fa-mobile-screen'],
            ['id' => 3, 'name' => 'Network Installation', 'icon' => 'fa-network-wired'],
            ['id' => 4, 'name' => 'Cybersecurity', 'icon' => 'fa-shield-halved'],
            ['id' => 5, 'name' => 'IT Support', 'icon' => 'fa-headset'],
            ['id' => 6, 'name' => 'ICT Consultancy', 'icon' => 'fa-chart-line'],
            ['id' => 7, 'name' => 'Cloud Services', 'icon' => 'fa-cloud'],
            ['id' => 8, 'name' => 'System Development', 'icon' => 'fa-server'],
            ['id' => 9, 'name' => 'Tour & Travel Websites', 'icon' => 'fa-plane'],
            ['id' => 0, 'name' => 'Other / Not sure yet', 'icon' => 'fa-lightbulb'],
        ];
    }
}
