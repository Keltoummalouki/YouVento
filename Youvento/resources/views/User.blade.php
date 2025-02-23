<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Utilisateur</title>
</head>
<body>
    <h1>Détails de l'utilisateur</h1>
    <p><strong>ID :</strong> {{ $user->id }}</p>
    <p><strong>Nom :</strong> {{ $user->name }}</p>
    <p><strong>Email :</strong> {{ $user->email }}</p>
</body>
</html>
