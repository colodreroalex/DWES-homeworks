<?php
// Incluir la cabecera
include 'header.php';

// Inicializar variables
$asignaturas = ["Matemáticas", "Física", "Historia", "Arte"];
$mensaje = '';
$asignaturaSeleccionada = '';

// Validar el envío del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['asignatura']) && in_array($_POST['asignatura'], $asignaturas)) {
        $asignaturaSeleccionada = htmlspecialchars($_POST['asignatura']);
        $mensaje = "Has seleccionado la asignatura: $asignaturaSeleccionada.";
    } else {
        $mensaje = "Por favor, selecciona una asignatura válida.";
    }
}
?>

<h1>Selecciona tu asignatura optativa</h1>

<form action="optativas2.php" method="POST">
    <label for="asignatura">Asignatura:</label>
    <select name="asignatura" id="asignatura">
        <option value="">-- Selecciona una opción --</option>
        <?php foreach ($asignaturas as $asignatura): ?>
            <option value="<?= htmlspecialchars($asignatura); ?>" 
                <?= $asignatura === $asignaturaSeleccionada ? 'selected' : ''; ?>>
                <?= htmlspecialchars($asignatura); ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <button type="submit">Enviar</button>
</form>

<h2><?= htmlspecialchars($mensaje); ?></h2>

<?php
// Incluir el pie de página
include 'footer.php';
?>
