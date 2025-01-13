<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escapando contenido con htmlspecialchars()</title>
</head>
<body>
    <p>
        Haz clic en el enlace para ver cómo se procesa el mensaje enviado:
    </p>
    <a href="xss.php?message=%22INFECTADO%20POR%20XSS%22%20y%20%27ataque%20con%20comillas%27">
    Enlace malicioso
    </a>
   
</body>
</html>
