<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Quote Request — {{ $quote->reference }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; max-width: 640px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #0b1f3a, #1a6fc4); color: white; padding: 28px; text-align: center; border-radius: 10px 10px 0 0; }
        .header h1 { margin: 0; font-size: 22px; }
        .content { background: #f7f9fc; padding: 28px; border-radius: 0 0 10px 10px; }
        .field { margin-bottom: 14px; padding-bottom: 14px; border-bottom: 1px solid #e8edf5; }
        .field strong { color: #1a6fc4; display: block; margin-bottom: 4px; font-size: 12px; text-transform: uppercase; letter-spacing: 0.05em; }
        .ref { font-family: monospace; font-size: 18px; color: #0b1f3a; font-weight: 700; }
        ul { margin: 8px 0 0; padding-left: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Quote Request</h1>
        <p style="margin: 8px 0 0; opacity: 0.9;">{{ $quote->reference }}</p>
    </div>
    <div class="content">
        <div class="field">
            <strong>Reference</strong>
            <span class="ref">{{ $quote->reference }}</span>
        </div>
        <div class="field">
            <strong>Client</strong>
            {{ $quote->full_name }}<br>
            {{ $quote->email }} · {{ $quote->phone }}
            @if($quote->company)<br>{{ $quote->company }}@endif
        </div>
        <div class="field">
            <strong>Service interest</strong>
            {{ $quote->service_name ?? 'Not specified' }}
            @if($quote->package_name)<br>Package: {{ $quote->package_name }}@endif
            @if($quote->vertical)<br>Vertical: {{ $quote->vertical }}@endif
        </div>
        @if(!empty($quote->selected_addons))
        <div class="field">
            <strong>Add-ons requested</strong>
            <ul>
                @foreach($quote->selected_addons as $addon)
                    <li>{{ is_array($addon) ? ($addon['name'] ?? $addon['slug'] ?? json_encode($addon)) : $addon }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="field">
            <strong>Project description</strong>
            {!! nl2br(e($quote->project_description)) !!}
        </div>
        @if($quote->how_heard)
        <div class="field">
            <strong>How they heard about us</strong>
            {{ $quote->how_heard }}
        </div>
        @endif
        <div class="field" style="border: none;">
            <strong>Submitted</strong>
            {{ $quote->created_at->format('F j, Y \a\t g:i A') }}
        </div>
    </div>
</body>
</html>
