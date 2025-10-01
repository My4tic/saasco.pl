<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowe zgłoszenie kontaktowe</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 600;
            color: #555;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .field-value {
            color: #333;
            font-size: 16px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .message-box {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 15px;
            margin: 20px 0;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
        .badge {
            display: inline-block;
            padding: 4px 12px;
            background: #667eea;
            color: white;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Nowe zgłoszenie kontaktowe</h1>
        </div>

        <div class="content">
            <p style="font-size: 16px; margin-bottom: 25px;">
                Otrzymałeś nowe zgłoszenie przez formularz kontaktowy:
            </p>

            <div class="field">
                <div class="field-label">Imię i nazwisko</div>
                <div class="field-value">{{ $submission->name }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">
                    <a href="mailto:{{ $submission->email }}" style="color: #667eea; text-decoration: none;">
                        {{ $submission->email }}
                    </a>
                </div>
            </div>

            @if($submission->company)
            <div class="field">
                <div class="field-label">Firma</div>
                <div class="field-value">{{ $submission->company }}</div>
            </div>
            @endif

            @if($submission->phone)
            <div class="field">
                <div class="field-label">Telefon</div>
                <div class="field-value">
                    <a href="tel:{{ $submission->phone }}" style="color: #667eea; text-decoration: none;">
                        {{ $submission->phone }}
                    </a>
                </div>
            </div>
            @endif

            @if($submission->budget)
            <div class="field">
                <div class="field-label">Budżet</div>
                <div class="field-value">
                    <span class="badge">{{ $submission->budget }}</span>
                </div>
            </div>
            @endif

            <div class="field">
                <div class="field-label">Wiadomość</div>
                <div class="message-box">
                    {{ $submission->message }}
                </div>
            </div>

            <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e0e0e0; font-size: 14px; color: #666;">
                <p style="margin: 5px 0;">
                    <strong>Data zgłoszenia:</strong> {{ $submission->created_at->format('d.m.Y H:i') }}
                </p>
                <p style="margin: 5px 0;">
                    <strong>Język:</strong> {{ strtoupper($submission->locale) }}
                </p>
                @if($submission->ip_address)
                <p style="margin: 5px 0;">
                    <strong>IP:</strong> {{ $submission->ip_address }}
                </p>
                @endif
            </div>
        </div>

        <div class="footer">
            <p style="margin: 0;">
                Ten email został wygenerowany automatycznie przez system Nutrigen Sp. z o.o.
            </p>
        </div>
    </div>
</body>
</html>
