<?php
// Incluir la cabecera
include 'header.php';

// Procesar el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Definir configuraciones para cada campo usando settings separados
    $emailSettings['filter'] = FILTER_VALIDATE_EMAIL;

    $edadSettings['filter'] = FILTER_VALIDATE_INT;
    $edadSettings['options']['min_range'] = 10;
    $edadSettings['options']['max_range'] = 60;

    $terminosSettings['filter'] = FILTER_VALIDATE_BOOLEAN;
    $terminosSettings['flags'] = FILTER_NULL_ON_FAILURE;

    // Recoger los datos del formulario con filter_input
    $email = filter_input(INPUT_POST, 'email', $emailSettings['filter']);
    $edad = filter_input(INPUT_POST, 'edad', $edadSettings['filter'], $edadSettings);
    $terminos = filter_input(INPUT_POST, 'terminos', $terminosSettings['filter'], $terminosSettings);

    // Inicializar array de errores
    $errores = [];

    // Validar los datos recogidos
    if (!$email) {
        $errores[] = 'El email no es válido.';
    }

    if ($edad === false) {
        $errores[] = 'La edad no es válida o no está en el rango permitido.';
    }

    // 'terminos' será null si no se selecciona, se interpreta como 'No'
    $terminos = $terminos ?? false;

    if (empty($errores)) {
        // Mostrar los datos procesados si no hay errores
        echo "<h2>Registro completado:</h2>";
        echo "<p><strong>Correo electrónico:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Edad:</strong> " . htmlspecialchars($edad) . "</p>";
        echo "<p><strong>Recibir boletines:</strong> " . ($terminos ? 'Sí' : 'No') . "</p>";
    } else {
        // Mostrar errores si los hay
        echo "<h2 style='color: red;'>Errores en el formulario:</h2>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro a mi Newsletter</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form action="formulario.php" method="post">
        <label for="email">Correo Electrónico: 📧</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="edad">Edad: 🙍</label>
        <input type="number" id="edad" name="edad" required>
        <br><br>

        <label for="terminos">Acepta la suscripción a la newsletter 📰</label>
        <input type="checkbox" id="terminos" name="terminos">
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
// Incluir el footer
include 'footer.php';
?>
