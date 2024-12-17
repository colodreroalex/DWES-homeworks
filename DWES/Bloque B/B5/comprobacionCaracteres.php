<?php

include 'includes/header.php';
include 'includes/footer.php';
include 'includes/settings.php';

// Definir el Contenido
$txt = "PHP es un lenguaje de programación popular que se utiliza para el desarrollo web. PHP permite crear sitios web dinámicos y aplicaciones web complejas. Aprender PHP es útil para cualquier desarrollador web.";

// Detección y Análisis de Subcadenas
$palabraObjetivo = "PHP";

// Primera y última aparición de una palabra específica
$primeraPosicion = strpos($txt, $palabraObjetivo);
$ultimaPosicion = strrpos($txt, $palabraObjetivo);

// Comprobar si el artículo contiene ciertas palabras clave
$palabrasClave = ["desarrollo", "web", "dinámicos", "aplicaciones"];
$palabrasEncontradas = array_filter($palabrasClave, fn($palabra) => strpos($txt, $palabra) !== false);

// Extraer partes del texto basadas en subcadenas específicas
$inicioExtraccion = strpos($txt, "lenguaje");
$finExtraccion = strpos($txt, "sitios web");
$textoExtraido = substr($txt, $inicioExtraccion, $finExtraccion - $inicioExtraccion + strlen("sitios web"));

// Comprobar si el texto comienza o termina con ciertas palabras
$comienzaCon = str_starts_with($txt, "PHP");
$terminaCon = str_ends_with($txt, "desarrollador web.");

// Presentación de Resultados
echo "<h1>Resultados del Análisis</h1>";
echo "<p><strong>Primera aparición de '{$palabraObjetivo}':</strong> posición {$primeraPosicion}</p>";
echo "<p><strong>Última aparición de '{$palabraObjetivo}':</strong> posición {$ultimaPosicion}</p>";

echo "<p><strong>Palabras clave encontradas:</strong> " . implode(", ", $palabrasEncontradas) . "</p>";

echo "<p><strong>Texto extraído:</strong> {$textoExtraido}</p>";

echo "<p><strong>Comienza con 'PHP':</strong> " . ($comienzaCon ? 'Sí' : 'No') . "</p>";
echo "<p><strong>Termina con 'desarrollador web.':</strong> " . ($terminaCon ? 'Sí' : 'No') . "</p>";

?>
