<?php
include 'header.php';
// Configurar las opciones y flags para el filtro
$settings['flags'] = FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE; // Permitir IPv4 excluyendo rangos reservados

// Configurar opciones adicionales
//$settings['options']['default'] = " "; // Valor por defecto si la IP no es válida
//$settings['options']['min_range'] = 0; // Rango mínimo

// Procesar el formulario si se envió
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar la dirección IP usando filter_input con las opciones configuradas
    $ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP, $settings);

    // Si la IP no es válida, asignar un valor por defecto
    if (!$ip) {
        $ip = "0.0.0.0";
        echo "<h2 style='color: red;'>La dirección IP ingresada no es válida. Se ha establecido a '0.0.0.0'.</h2>";
    } else {
        echo "<h2>Dirección IP válida:</h2>";
        echo "<p><strong>IP ingresada:</strong> " . htmlspecialchars($ip) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Dirección IP</title>
</head>
<body>
    <h1>Ingresa una dirección IP</h1>
    <form action="" method="post">
        <label for="ip">Dirección IP: 🌐</label>
        <input type="text" id="ip" name="ip" placeholder="Ejemplo: 192.168.1.1" required>
        <br><br>
        <input type="submit" value="Validar IP">
    </form>
</body>
</html>

<?php
include 'footer.php';
?>
