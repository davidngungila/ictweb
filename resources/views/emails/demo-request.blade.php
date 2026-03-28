<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Demo Request - {{ $data['demo_type'] }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .field {
            margin-bottom: 15px;
        }
        .field strong {
            color: #10b981;
            display: block;
            margin-bottom: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #10b981;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎬 New Demo Request Received</h1>
    </div>
    
    <div class="content">
        <h2 style="margin-bottom: 20px;">Demo Request Details</h2>
        
        <div class="field">
            <strong>Demo Type:</strong>
            {{ $data['demo_type'] }}
        </div>
        
        <div class="field">
            <strong>Company Name:</strong>
            {{ $data['company_name'] }}
        </div>
        
        <div class="field">
            <strong>Contact Person:</strong>
            {{ $data['contact_person'] }}
        </div>
        
        <div class="field">
            <strong>Email:</strong>
            {{ $data['email'] }}
        </div>
        
        <div class="field">
            <strong>Phone:</strong>
            {{ $data['phone'] }}
        </div>
        
        <div class="field">
            <strong>Preferred Date:</strong>
            {{ \Carbon\Carbon::parse($data['preferred_date'])->format('F j, Y') }}
        </div>
        
        <div class="field">
            <strong>Preferred Time:</strong>
            {{ $data['preferred_time'] }}
        </div>
        
        @if(!empty($data['message']))
        <div class="field">
            <strong>Additional Information:</strong>
            {{ nl2br($data['message']) }}
        </div>
        @endif
        
        <div class="field">
            <strong>Submitted:</strong>
            {{ now()->format('F j, Y \- g:i A') }}
        </div>
    </div>
    
    <div class="footer">
        <p><strong>Next Steps:</strong> Our team will contact the client within 24 hours to schedule the live demonstration.</p>
        <p style="margin-top: 15px;">
            <a href="{{ route('request-demo') }}" class="btn">View All Demo Requests</a>
        </p>
        <p style="margin-top: 10px; font-size: 12px; color: #6b7280;">
            This is an automated message from Jezdan Technology ICT Solutions<br>
            Dar es Salaam, Tanzania
        </p>
    </div>
</body>
</html>
