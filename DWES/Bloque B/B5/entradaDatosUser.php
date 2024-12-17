<?php

include 'includes/header.php';
include 'includes/footer.php';
include 'includes/settings.php';

// Simular datos de entrada de un usuario
$nombre = "  Juan Pérez  ";
$correo = "  JUAN.PEREZ@EJEMPLO.COM  ";
$mensaje = "Esto es URGENTE, por favor atiendan mi solicitud inmediatamente. Gracias.";

// Mostrar datos originales
echo "<h1>Datos Originales</h1>";
echo "<p><strong>Nombre:</strong> {$nombre}</p>";
echo "<p><strong>Correo:</strong> {$correo}</p>";
echo "<p><strong>Mensaje:</strong> {$mensaje}</p>";

// Operaciones de Manipulación de Cadenas
$nombre = trim($nombre);
$correo = strtolower(trim($correo));
$mensaje = str_replace("inmediatamente", "****", $mensaje);
$mensaje = str_ireplace("urgente", "Prioridad Alta", $mensaje);
$mensaje .= str_repeat("!", 3);

// Mostrar datos procesados
echo "<h1>Datos Procesados</h1>";
echo "<p><strong>Nombre:</strong> {$nombre}</p>";
echo "<p><strong>Correo:</strong> {$correo}</p>";
echo "<p><strong>Mensaje:</strong> {$mensaje}</p>";

?>
