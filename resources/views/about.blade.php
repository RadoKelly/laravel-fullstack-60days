<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos</title>
</head>
<body>
    <h1>À Propos de {{$name}}</h1>
    <h3>Mon objectif est: {{$objectif}}</h3>
    <h3>Mes skills</h3>
    @foreach ($skills as $skill )
        <li>{{$skill}}</li>
    @endforeach

    <p>La date et l'heure actuelles sont : {{ date('Y/m/d H:i:s') }}</p>
</body>
</html>