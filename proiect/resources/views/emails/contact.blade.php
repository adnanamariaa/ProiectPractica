<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mesaj de contact</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background-color: #f8f9fa; padding: 10px; text-align: center; }
        .content { background-color: #fff; padding: 20px; border: 1px solid #ddd; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #ff6b00; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Mesaj nou de la formularul de contact</h2>
    </div>

    <div class="content">
        <div class="field">
            <span class="label">Nume:</span> {{ $data['nume'] }}
        </div>

        <div class="field">
            <span class="label">Telefon:</span> {{ $data['telefon'] }}
        </div>

        <div class="field">
            <span class="label">Email:</span> {{ $data['email'] }}
        </div>

        <div class="field">
            <span class="label">Mesaj:</span>
            <div style="margin-top: 10px; padding: 10px; background-color: #f8f9fa; border-radius: 5px;">
                {{ $data['mesaj'] }}
            </div>
        </div>
    </div>

    <p style="margin-top: 20px; font-size: 12px; color: #666;">
        Acest mesaj a fost trimis de pe site-ul Academia de Handbal Ionica Munteanu.
    </p>
</div>
</body>
</html>
