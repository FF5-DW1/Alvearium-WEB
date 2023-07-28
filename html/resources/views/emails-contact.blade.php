<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="{{ asset('img/icons/favicon-Alvearium.png') }}">
    <title>Alvearium</title>
</head>
<body>

    <h1>Contacto WEB ALVEARIUM</h1>

    <p><strong>Nombre:</strong> {{$contact['name']}}</p>
    <p><strong>Teléfono:</strong> {{$contact['tel']}}</p>
    <p><strong>Email:</strong> {{$contact['email']}}</p>
    <p><strong>Mensaje:</strong> {{$contact['message']}}</p>
    
</body>
</html>