<?php
include '../includes/header.php';

// =============================================
// CONFIGURACIÓN INICIAL
// =============================================
$directorioSubida = 'uploads/';
$directorioThumbs = 'uploads/thumbs/';
$tamanoMaximo = 5 * 1024 * 1024; // 5MB
$tiposPermitidos = ['image/jpeg', 'image/png', 'image/gif'];
$extensionesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];
$mensaje = '';
$rutaArchivo = '';
$rutaMiniatura = '';

// Crear directorios si no existen
if (!file_exists($directorioSubida)) mkdir($directorioSubida, 0755, true);
if (!file_exists($directorioThumbs)) mkdir($directorioThumbs, 0755, true);

// =============================================
// FUNCIÓN: Sanitizar nombre de archivo
// =============================================
function sanitizarNombreArchivo($nombreArchivo) {
    // Eliminar caracteres especiales y espacios
    $nombreLimpio = preg_replace('/[^A-Za-z0-9\-\.]/', '-', $nombreArchivo);
    // Reducir múltiples guiones consecutivos
    return preg_replace('/\-+/', '-', $nombreLimpio);
}

// =============================================
// FUNCIÓN: Generar miniatura con GD
// =============================================
function generarMiniatura($rutaOrigen, $rutaDestino, $anchoMaximo, $altoMaximo) {
    // Obtener información de la imagen original
    list($anchoOriginal, $altoOriginal, $tipoImagen) = getimagesize($rutaOrigen);
    
    // Calcular nuevas dimensiones manteniendo relación de aspecto
    $proporcion = min($anchoMaximo/$anchoOriginal, $altoMaximo/$altoOriginal);
    $nuevoAncho = (int)round($anchoOriginal * $proporcion);
    $nuevoAlto = (int)round($altoOriginal * $proporcion);
    
    // Crear recurso de imagen según el tipo
    switch($tipoImagen) {
        case IMAGETYPE_JPEG:
            $imagenOriginal = imagecreatefromjpeg($rutaOrigen);
            break;
        case IMAGETYPE_PNG:
            $imagenOriginal = imagecreatefrompng($rutaOrigen);
            break;
        case IMAGETYPE_GIF:
            $imagenOriginal = imagecreatefromgif($rutaOrigen);
            break;
        default:
            return false;
    }
    
    // Crear lienzo para la miniatura
    $miniatura = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
    
    // Mantener transparencia para PNG/GIF
    if($tipoImagen === IMAGETYPE_PNG || $tipoImagen === IMAGETYPE_GIF) {
        imagecolortransparent($miniatura, imagecolorallocatealpha($miniatura, 0, 0, 0, 127));
        imagealphablending($miniatura, false);
        imagesavealpha($miniatura, true);
    }
    
    // Redimensionar imagen original a la miniatura
    imagecopyresampled(
        $miniatura, 
        $imagenOriginal, 
        0, 0, 0, 0, 
        $nuevoAncho, 
        $nuevoAlto, 
        $anchoOriginal, 
        $altoOriginal
    );
    
    // Guardar miniatura en disco
    switch($tipoImagen) {
        case IMAGETYPE_JPEG:
            imagejpeg($miniatura, $rutaDestino, 85);
            break;
        case IMAGETYPE_PNG:
            imagepng($miniatura, $rutaDestino, 9);
            break;
        case IMAGETYPE_GIF:
            imagegif($miniatura, $rutaDestino);
            break;
    }
    
    // Liberar memoria
    imagedestroy($imagenOriginal);
    imagedestroy($miniatura);
    
    return true;
}

// =============================================
// PROCESAMIENTO DEL FORMULARIO
// =============================================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $archivo = $_FILES['imagen'];
        
        // Validar tamaño del archivo
        if ($archivo['size'] > $tamanoMaximo) {
            $mensaje = '❌ Error: El archivo excede el tamaño máximo de 5MB';
        } else {
            // Validar tipo MIME real
            $tipoMIME = mime_content_type($archivo['tmp_name']);
            if (!in_array($tipoMIME, $tiposPermitidos)) {
                $mensaje = '❌ Error: Tipo de archivo no permitido';
            } else {
                // Validar extensión del archivo
                $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
                if (!in_array($extension, $extensionesPermitidas)) {
                    $mensaje = '❌ Error: Extensión de archivo no válida';
                } else {
                    // Sanitizar y generar nombre único
                    $nombreArchivo = sanitizarNombreArchivo(basename($archivo['name']));
                    $rutaDestino = $directorioSubida . $nombreArchivo;
                    
                    // Mover archivo al directorio final
                    if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                        // Generar miniatura
                        $nombreMiniatura = 'thumb_' . $nombreArchivo;
                        $rutaDestinoMiniatura = $directorioThumbs . $nombreMiniatura;
                        
                        if (generarMiniatura($rutaDestino, $rutaDestinoMiniatura, 200, 200)) {
                            $mensaje = '✅ Archivo subido correctamente!<br>';
                            $mensaje .= "<strong>Original:</strong> <a href='$rutaDestino' target='_blank'>Ver</a><br>";
                            $mensaje .= "<strong>Miniatura:</strong> <a href='$rutaDestinoMiniatura' target='_blank'>Ver</a>";
                            $rutaArchivo = $rutaDestino;
                            $rutaMiniatura = $rutaDestinoMiniatura;
                        } else {
                            $mensaje = '❌ Error al generar la miniatura';
                        }
                    } else {
                        $mensaje = '❌ Error al mover el archivo al servidor';
                    }
                }
            }
        }
    } else {
        $mensaje = '❌ Error en la subida del archivo';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cargador de Imágenes - Tienda Online</title>
    <style>
        .contenedor { max-width: 800px; margin: 20px auto; padding: 20px; }
        .mensaje { padding: 15px; margin: 20px 0; border-radius: 5px; }
        .exito { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .vista-previa { margin-top: 20px; }
        .vista-previa img { max-width: 100%; height: auto; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Subir Imagen de Producto</h1>
        
        <?php if (!empty($mensaje)): ?>
            <div class="mensaje <?= strpos($mensaje, '✅') !== false ? 'exito' : 'error' ?>">
                <?= $mensaje ?>
            </div>
            
            <?php if ($rutaArchivo): ?>
                <div class="vista-previa">
                    <h3>Vista previa:</h3>
                    <img src="<?= $rutaArchivo ?>" alt="Imagen original">
                    <?php if ($rutaMiniatura): ?>
                        <img src="<?= $rutaMiniatura ?>" alt="Miniatura">
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            
            <p><a href="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">⬆️ Subir otra imagen</a></p>
        
        <?php else: ?>
            <form method="POST" enctype="multipart/form-data">
                <label for="imagen">
                    <strong>Selecciona una imagen (JPEG, PNG, GIF):</strong>
                    <input type="file" name="imagen" id="imagen" 
                           accept="image/jpeg, image/png, image/gif" required>
                </label>
                <button type="submit">Subir Imagen</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>

<?php include '../includes/footer.php'; ?>