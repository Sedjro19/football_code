<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #666;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-radius: 3px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bonjour {{ $data['firstName'] }},</h1>
        <p>Merci de vous être inscrit avec succès !</p>
        <h2>Informations soumises :</h2>
        <ul>
            <li><strong>Prénom :</strong> {{ $data['firstName'] }}</li>
            <li><strong>Nom :</strong> {{ $data['lastName'] }}</li>
            <li><strong>Date de naissance :</strong> {{ $data['birthDate'] }}</li>
            <li><strong>Lieu de naissance :</strong> {{ $data['birthPlace'] }}</li>
            <li><strong>Nationalité :</strong> {{ $data['nationality'] }}</li>
            <li><strong>Numéro d'identification :</strong> {{ $data['idNumber'] }}</li>
            <li><strong>Sexe :</strong> {{ $data['gender'] }}</li>
            <li><strong>Nom du parent/tuteur :</strong> {{ $data['primaryGuardianName'] }}</li>
            <li><strong>Profession :</strong> {{ $data['primaryGuardianProfession'] }}</li>
            <li><strong>Adresse :</strong> {{ $data['primaryGuardianAddress'] }}</li>
            <li><strong>Téléphone :</strong> {{ $data['primaryGuardianPhone'] }}</li>
            <li><strong>E-mail :</strong> {{ $data['primaryGuardianEmail'] }}</li>
        </ul>
        <p class="footer">Cordialement,<br>Votre Équipe</p>
    </div>
</body>
</html>
