<?php
// Incluir cabecera
include 'header.php';

// Comprobar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $edad = (int)$_POST['edad'];
    $posicion = htmlspecialchars($_POST['posicion']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);

    echo "<h2>Registro completado:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellido:</strong> $apellido</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Posición:</strong> $posicion</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
}
?>

<h1>Formulario de Registro</h1>
<form method="post" action="registro.php">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" min="0" required><br><br>

    <label for="posicion">Posición:</label>
    <input type="text" id="posicion" name="posicion" required><br><br>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="telefono">Número de teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required><br><br>

    <button type="submit">Registrar</button>
</form>

<?php
// Incluir pie de página
include 'footer.php';
?>
