<?php
// language-preferences.php

// Si se envía el formulario, procesamos la selección del idioma.
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['language'])) {
    // Obtenemos el idioma seleccionado
    $language = $_POST['language'];
    // Validamos que el idioma seleccionado sea una de las opciones permitidas.
    if ($language === 'Español' || $language === 'Inglés') {
        // Establecemos la cookie "language" con una duración de 30 días.
        setcookie("language", $language, time() + (30 * 24 * 60 * 60));
        // Redireccionamos para que la cookie se procese correctamente.
        header("Location: language-preferences.php");
        exit;
    }
}

// Verificamos si la cookie "language" existe.
if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
    // Mostramos un mensaje de bienvenida en función del idioma seleccionado.
    if ($language === 'Español') {
        echo "<h1>Bienvenido!</h1>";
    } elseif ($language === 'Inglés') {
        echo "<h1>Welcome!</h1>";
    } else {
        echo "<h1>Idioma no reconocido.</h1>";
    }
} else {
    // Si la cookie no existe, mostramos el formulario de selección de idioma.
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Selecciona tu idioma</title>
    </head>
    <body>
        <form action="language-preferences.php" method="post">
            <label for="language">Selecciona tu idioma preferido:</label>
            <select name="language" id="language" required>
                <option value="">--Selecciona--</option>
                <option value="Español">Español</option>
                <option value="Inglés">Inglés</option>
            </select>
            <button type="submit">Guardar Preferencia</button>
        </form>
    </body>
    </html>
    <?php
}
?>
