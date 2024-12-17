<?php

// Texto de ejemplo
$texto = "Este es un ejemplo de texto para demostrar la conversión de mayúsculas y minúsculas, y contar caracteres y palabras. Este texto es importante para procesar y analizar. Este sigue siendo un texto de ejemplo con una longitud mayor para probar la generación de un resumen. Debo de meter mas palabras para que asi funcione";

// Convertir el texto a mayúsculas
$textoMayusculas = strtoupper($texto);
// La función strtoupper() convierte todos los caracteres alfabéticos de la cadena a mayúsculas. 
// Aquí, todo el texto se transforma en mayúsculas para mostrar una versión en mayúsculas completa del mismo.

// Capitalizar cada palabra
$textoCapitalizado = ucwords($texto);
// La función ucwords() convierte a mayúscula la primera letra de cada palabra en la cadena.
// Esto es útil para obtener un texto en formato de título (Title Case).

// Contar el número de caracteres
$numeroCaracteres = strlen($texto);
// La función strlen() cuenta el número de caracteres en la cadena.
// Esto incluye espacios, comas, puntos y cualquier carácter especial.
// En este caso, estamos obteniendo la longitud total del texto de ejemplo.

// Contar el número de palabras
$numeroPalabras = str_word_count($texto);
// La función str_word_count() cuenta el número de palabras en la cadena.
// Aquí se ignoran los caracteres de puntuación, por lo que solo se consideran palabras reales.

// Contar la frecuencia de cada palabra
$palabras = str_word_count(strtolower($texto), 1);
// Aquí usamos str_word_count() en combinación con strtolower() para convertir todo el texto a minúsculas antes de contar las palabras.
// Usamos el segundo parámetro de str_word_count() como 1 para obtener un array con todas las palabras.
$frecuenciaPalabras = array_count_values($palabras);
// La función array_count_values() toma el array de palabras y cuenta cuántas veces aparece cada palabra en él.
// El resultado es un array asociativo donde las claves son las palabras y los valores son las frecuencias.

// Palabras clave predefinidas
$palabrasClave = ["importante", "procesar"];
$textoMarcado = $texto;
foreach ($palabrasClave as $palabra) {
    $textoMarcado = str_replace($palabra, "<mark>$palabra</mark>", $textoMarcado);
}
// Se define un array con palabras clave a buscar en el texto.
// Usamos un bucle foreach para recorrer cada palabra clave y aplicar str_replace().
// La función str_replace() busca cada palabra clave en el texto y la reemplaza con una versión resaltada usando etiquetas HTML <mark>.

// Generar un resumen del texto mostrando solo las primeras 50 palabras
$palabrasTexto = explode(" ", $texto);
// La función explode() divide el texto en un array, separando las palabras usando un espacio como delimitador.
$resumen = implode(" ", array_slice($palabrasTexto, 0, 50));
// La función array_slice() extrae las primeras 50 palabras del array.
// Después, implode() convierte el array de palabras nuevamente en una cadena con espacios entre ellas.

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Texto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            line-height: 1.6;
        }
        mark {
            background-color: yellow;
        }
    </style>
</head>
<body>

<h1>Procesamiento de Texto</h1>

<h2>Texto Original</h2>
<p><?= $texto ?></p>
<!-- Muestra el texto original proporcionado por el usuario. -->

<h2>Texto en Mayúsculas</h2>
<p><?= $textoMayusculas ?></p>
<!-- Muestra la versión del texto completamente en mayúsculas. -->

<h2>Texto Capitalizado</h2>
<p><?= $textoCapitalizado ?></p>
<!-- Muestra el texto con la primera letra de cada palabra en mayúscula. -->

<h2>Análisis del Texto</h2>
<ul>
    <li>Número de caracteres: <?= $numeroCaracteres ?></li>
    <!-- Muestra la cantidad de caracteres en el texto. -->
    <li>Número de palabras: <?= $numeroPalabras ?></li>
    <!-- Muestra la cantidad total de palabras en el texto. -->
</ul>

<h2>Frecuencia de Palabras</h2>
<ul>
    <?php foreach ($frecuenciaPalabras as $palabra => $frecuencia): ?>
        <li><?= $palabra ?>: <?= $frecuencia ?></li>
        <!-- Recorre el array asociativo y muestra cada palabra junto con la cantidad de veces que aparece. -->
    <?php endforeach; ?>
</ul>

<h2>Texto con Palabras Clave Marcadas</h2>
<p><?= $textoMarcado ?></p>
<!-- Muestra el texto original con las palabras clave resaltadas. -->

<h2>Resumen del Texto</h2>
<p><?= $resumen ?></p>
<!-- Muestra las primeras 50 palabras del texto original como un resumen. -->

</body>
</html>
