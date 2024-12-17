<?php
$canciones = [
    'Blinding Lights - The Weeknd' => 1500,
    'Estoy enfermo - Pignoise' => 1200,
    'Levitating - Dua Lipa' => 1800,
    'One More Night - Maroon 5' => 1600,
    'Feel Good Inc. - Gorillaz' => 1700,
];

// Generar número aleatorio de reproducciones (Tarea 1)
foreach ($canciones as $nombre => &$reproducciones) {
    $reproducciones = mt_rand(1000, 2000); // --> canciones[$nombre] = mt_rand(1000, 2000); LO MISMO ES
}
unset($reproducciones); // Liberar la referencia

// Tareas de ordenación
// Tarea 2: Ordenar por nombre ascendente (por clave)
$porNombreAsc = $canciones;
ksort($porNombreAsc);  // Ordena por clave (nombre de canción) ascendente

// Tarea 3: Ordenar por nombre descendente (por clave)
$porNombreDesc = $canciones;
krsort($porNombreDesc);  // Ordena por clave (nombre de canción) descendente

// Tarea 4: Ordenar por número de reproducciones ascendente
$porReproduccionesAsc = $canciones;
asort($porReproduccionesAsc); // Ordena por valor (número de reproducciones) ascendente

// Tarea 5: Ordenar por número de reproducciones descendente
$porReproduccionesDesc = $canciones;
arsort($porReproduccionesDesc); // Ordena por valor (número de reproducciones) descendente

// Tarea 6: Ordenar por clave (nombre de canción) ascendente
$porClaveAsc = $canciones;
ksort($porClaveAsc); // Ordena por clave (nombre de canción) ascendente

// Tarea 7: Ordenar por clave (nombre de canción) descendente
$porClaveDesc = $canciones;
krsort($porClaveDesc); // Ordena por clave (nombre de canción) descendente

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ordenación de Canciones</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <h1>Ejemplo: funciones de ordenación de arrays</h1>
    
    <h2>Lista Original</h2>
    <pre><?php print_r($canciones); ?></pre>

    <h2>2. Ordenar por Nombre Ascendente</h2>
    <pre><?php print_r($porNombreAsc); ?></pre>

    <h2>3. Ordenar por Nombre Descendente</h2>
    <pre><?php print_r($porNombreDesc); ?></pre>

    <h2>4. Ordenar por Número de Reproducciones Ascendente</h2>
    <pre><?php print_r($porReproduccionesAsc); ?></pre>

    <h2>5. Ordenar por Número de Reproducciones Descendente</h2>
    <pre><?php print_r($porReproduccionesDesc); ?></pre>

    <h2>6. Ordenar por Clave Ascendente</h2>
    <pre><?php print_r($porClaveAsc); ?></pre>

    <h2>7. Ordenar por Clave Descendente</h2>
    <pre><?php print_r($porClaveDesc); ?></pre>
<?php include 'includes/footer.php'; ?>
</body>
</html>
