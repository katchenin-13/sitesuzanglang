<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-form</title>
</head>
<body>
    <h1>Message envoyé</h1>
    <p>Nom: {{$detail['nom']}}</p>
    <p>Téléphone: {{$detail['telephone']}}</p>
    <p>Objet: {{$detail['post_id']}}</p>
    <p>Email: {{$detail['adresse']}}</p>
    {{-- <p>Message: {{$detail['cv']}}</p> --}}
</body>
</html>