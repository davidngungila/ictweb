<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quote Request Received</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #0b1f3a, #1a6fc4); color: white; padding: 32px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f7f9fc; padding: 30px; border-radius: 0 0 10px 10px; }
        .ref { font-family: monospace; font-size: 1.1rem; color: #1a6fc4; font-weight: 700; }
        .footer { text-align: center; margin-top: 24px; color: #6b7280; font-size: 14px; }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0;">Thank you, {{ explode(' ', $quote->full_name)[0] }}!</h1>
        <p style="margin: 12px 0 0; opacity: 0.95;">Your quote request has been received.</p>
    </div>
    <div class="content">
        <p>Hi {{ $quote->full_name }},</p>
        <p>Thank you for choosing <strong>Jezdan Technology</strong>. We have received your project details and our team will prepare a tailored quote for you.</p>
        <p><strong>Your reference number:</strong><br><span class="ref">{{ $quote->reference }}</span></p>
        <p>Please keep this reference for follow-up. We aim to respond within <strong>24 business hours</strong> via email or WhatsApp.</p>
        @if($quote->service_name)
        <p><strong>Service:</strong> {{ $quote->service_name }}@if($quote->package_name) — {{ $quote->package_name }}@endif</p>
        @endif
        <p style="margin-top: 24px;">Questions? Reply to this email or WhatsApp us at <strong>+255 685 847 002</strong>.</p>
    </div>
    <div class="footer">
        <p>Jezdan Technology ICT Solutions<br>Moshi, Kilimanjaro, Tanzania<br>info@jezdantech.com</p>
    </div>
</body>
</html>
