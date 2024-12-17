<?php
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/settings.php';

$text = "Total: £444. こんにちは世界 (Hola Mundo). 你好世界 (Hola Mundo). PHP es excelente para desarrollo web y soporta multilinguaje.";

// Mostrar datos originales
echo "<h1>Datos Originales</h1>";
echo "<p><strong>Texto:</strong> {$text}</p>";

// Caracteres
$strLength = strlen($text);
$mbStrLength = mb_strlen($text);

// Substrings de palabras importantes
echo "<p>Longitud strlen: $strLength. Multibyte: $mbStrLength</p>";
