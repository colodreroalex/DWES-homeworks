<?php
include '../includes/header.php';

// Inicializar el mensaje
$message = '';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar si no hay errores en la subida del archivo
    if (isset($_FILES['file']) && $_FILES['file']['error'] === 0) {

        // Validar el tamaño del archivo (máximo 5MB)
        $maxFileSize = 5 * 1024 * 1024; // 5MB en bytes

        if ($_FILES['file']['size'] > $maxFileSize) {
            $message = 'El archivo es demasiado grande. El tamaño máximo permitido es 5MB.';
        } else {
            // Validar el tipo de archivo (solo permitir .jpeg, .jpg, .png)
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
            $fileType = mime_content_type($_FILES['file']['tmp_name']);
            

            if (!in_array($fileType, $allowedTypes)) {
                $message = 'Tipo de archivo no permitido. Solo se permiten archivos .jpeg, .jpg y .png.';
            } else {
                // Limpiar el nombre del archivo
                $fileName = preg_replace('/[^A-Za-z0-9\-\.]/', '-', $_FILES['file']['name']);
                $fileName = strtolower($fileName);

                // Evitar sobrescribir archivos existentes
                $uploadDir = './var/';
                $filePath = $uploadDir . $fileName;
                $i = 1;
                while (file_exists($filePath)) {
                    $filePath = $uploadDir . pathinfo($fileName, PATHINFO_FILENAME) . '_' . $i . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
                    $i++;
                }

                // Mover el archivo a la carpeta de subidas
                if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
                    // Mostrar un mensaje de confirmación con el nombre y tamaño del archivo
                    $message = '<b>Archivo subido con éxito:</b><br>';
                    $message .= 'Nombre: ' . basename($filePath) . '<br>';
                    $message .= 'Tamaño: ' . $_FILES['file']['size'] . ' bytes' . '<br>';
                    $message .= 'Directorio: ' . $filePath;
                } else {
                    // Mostrar un mensaje de error si hubo un problema con la subida
                    $message = 'Hubo un error al guardar el archivo en el directorio ' . $filePath;
                }
            }
        }
    } else {
        // Mostrar un mensaje de error si hubo un problema con la subida
        $message = 'No se ha podido cargar el archivo.';
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
        <?php if (isset($filePath)): ?>
            <div>
                <br>
                <h1>Archivo Subido</h1>
                <img src="<?= $filePath ?>" alt="Imagen subida">
            </div>
        <?php endif; ?>
        <br>
        <a href="<?= $_SERVER['PHP_SELF'] ?>">Subir otro archivo</a>
    <?php else: ?>
        <!-- Formulario para subir archivos -->
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <label for="file">Selecciona un archivo:</label>
            <input type="file" name="file" id="file" accept="image/jpeg, image/jpg, image/png">
            <br><br>
            <input type="submit" value="Subir Archivo">
        </form>
    <?php endif; ?>
</body>
</html>

<?php include '../includes/footer.php'; ?>