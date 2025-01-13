<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesando Mensaje</title>
</head>
<body>
    <h1>Mensaje procesado</h1>
    <?php
    if (isset($_GET['message'])) {
        // Obtiene el mensaje desde la URL
        $message = $_GET['message'];

        echo $message;

        // Escapa caracteres especiales con htmlspecialchars
        $safe_message1 = htmlspecialchars($message, ENT_COMPAT, 'UTF-8');
        $safe_message2 = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        $safe_message3 = htmlspecialchars($message, ENT_NOQUOTES, 'UTF-8');

        // Muestra los mensajes procesados
        echo "<p>Mensaje original: <strong>" . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . "</strong></p>";
        echo "<p>Mensaje escapado con ENT_COMPAT (comillas dobles escapadas): <strong>$safe_message1</strong></p>";
        echo "<p>Mensaje escapado con ENT_QUOTES (comillas simples y dobles escapadas): <strong>$safe_message2</strong></p>";
        echo "<p>Mensaje escapado con ENT_NOQUOTES (sin escapado de comillas): <strong>$safe_message3</strong></p>";
    } else {
        echo "<p>No se ha enviado ningún mensaje.</p>";
    }
    ?>
    <p><a href="index.php">Volver</a></p>
</body>
</html>
