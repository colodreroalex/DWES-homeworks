<?php

$nombre = 'Mundo Nómada'; 
$nombre_cliente = 'Alex'; 
$mensaje = 'Bienvenido a ' . $nombre . $nombre_cliente; 

$product = [
    $name = 'Chaqueta Urban', 
    $price = 50,
    $cantidad = 2,
    $precio_oferta = 35
];

$precioNormal = $price * $cantidad; 
$precioAhorro = $precio_oferta * $cantidad; 

$ahorras = $precioNormal - $precioAhorro; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
</body>
</html>