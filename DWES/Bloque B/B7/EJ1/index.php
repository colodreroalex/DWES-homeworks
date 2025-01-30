<?php
include '../includes/header.php';

// Inicializar el mensaje
$message = '';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si no hay errores en la subida del archivo
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        // Mostrar un mensaje de confirmación con el nombre y tamaño del archivo
        $message = '<b>Archivo subido con éxito:</b><br>';
        $message .= 'Nombre: ' . $_FILES['file']['name'] . '<br>';
        $message .= 'Tamaño: ' . $_FILES['file']['size'] . ' bytes';
    } else {
        // Mostrar un mensaje de error si hubo un problema con la subida
        $message = 'Hubo un error al subir el archivo.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
</head>
<body>
    <h1>Subir Archivo</h1>

    <!-- Mostrar el mensaje de confirmación o error -->
    <?php if (!empty($message)): ?>
        <div>
            <?= $message ?>
        </div>
        <br>
        <a href="<?= $_SERVER['PHP_SELF'] ?>">Subir otro archivo</a>
    <?php else: ?>
        <!-- Formulario para subir archivos -->
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <label for="file">Selecciona un archivo:</label>
            <input type="file" name="file" id="file">
            <br><br>
            <input type="submit" value="Subir Archivo">
        </form>
    <?php endif; ?>
</body>
</html>

<?php include '../includes/footer.php'; ?>