<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Contacto TuttiPelosi</title>
</head>
<body>
    <p>Hola! Se ha enviado un mensaje desde la web de TuttiPelosi</p>
    <p>Estos son los datos del usuario:</p>
    <ul>
        <li>Nombre: {{ $contact['name'] }}</li>
        <li>Teléfono: {{ $contact['email'] }}</li>
    </ul>
    <p>Y esta es la posición reportada:</p>
    <ul>
        <li>Mensaje: {{ $contact['message'] }}</li>
    </ul>
</body>
</html>
