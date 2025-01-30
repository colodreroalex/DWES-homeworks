<?php
include '../includes/header.php';

// Inicializar el mensaje
$message = '';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si no hay errores en la subida del archivo
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {
        // Verificar que el archivo sea una imagen
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($_FILES['file']['type'], $allowed_types)) {
            // Crear una instancia de Imagick
            $imagick = new Imagick($_FILES['file']['tmp_name']);

            // Redimensionar la imagen a un ancho de 200 píxeles manteniendo la proporción
            $imagick->resizeImage(200, 0, Imagick::FILTER_LANCZOS, 1);

            // Guardar la imagen redimensionada
            $new_filename = 'resized_' . str_replace(' ', '_', $_FILES['file']['name']);

            $upload_dir = realpath('./uploads');
            
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true); // Crea el directorio si no existe
            }

            $imagick->writeImage($upload_dir .'/'. $new_filename);

            // Liberar recursos
            $imagick->clear();
            $imagick->destroy();

            // Mostrar un mensaje de confirmación con el nombre y tamaño del archivo
            $message = '<b>Archivo subido y procesado con éxito:</b><br>';
            $message .= 'Nombre: ' . $new_filename . '<br>';
            $message .= 'Tamaño: ' . filesize($upload_dir . '/' . $new_filename) . ' bytes';
        } else {
            // Mostrar un mensaje de error si el archivo no es una imagen
            $message = 'El archivo debe ser una imagen (JPEG, PNG o GIF).';
        }
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
    <title>Subir y Procesar Imagen</title>
</head>
<body>
    <h1>Subir y Procesar Imagen</h1>

    <!-- Mostrar el mensaje de confirmación o error -->
    <?php if (!empty($message)): ?>
        <div>
            <?= $message ?>
        </div>
        <br>
        <a href="<?= $_SERVER['PHP_SELF'] ?>">Subir otra imagen</a>
    <?php else: ?>
        <!-- Formulario para subir archivos -->
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <label for="file">Selecciona una imagen:</label>
            <input type="file" name="file" id="file">
            <br><br>
            <input type="submit" value="Subir y Procesar Imagen">
        </form>
    <?php endif; ?>
</body>
</html>

<?php include '../includes/footer.php'; ?>