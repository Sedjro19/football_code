<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Message de Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
        }
        .email-header {
            background-color: #4a90e2;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .email-header h2 {
            margin: 0;
        }
        .email-content {
            padding: 20px;
        }
        .email-content h3 {
            color: #4a90e2;
        }
        .email-content p {
            margin: 5px 0;
            font-size: 16px;
        }
        .email-footer {
            text-align: center;
            color: #777777;
            font-size: 12px;
            padding: 15px;
        }
        .divider {
            height: 1px;
            background-color: #eeeeee;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h2>Nouveau Message de Contact</h2>
        </div>
        <div class="email-content">
            <h3>Bonjour,</h3>
            <p>Vous avez reçu un nouveau message de contact depuis le site.</p>

            <div class="divider"></div>

            <p><strong>Nom :</strong> {{ $data['name'] }}</p>
            <p><strong>Email :</strong> {{ $data['email'] }}</p>
            <p><strong>Message :</strong></p>
            <p>{{ $data['message'] }}</p>

            <div class="divider"></div>

            <p>Merci de répondre au plus vite.</p>
        </div>
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Votre Site. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
