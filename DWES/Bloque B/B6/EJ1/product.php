<?php
// Lista de productos (array indexado)
$products = [
    ["name" => "Laptop", "description" => "Una laptop potente y portátil.", "price" => "1200$", "availability" => "En stock"],
    ["name" => "Smartphone", "description" => "Un teléfono inteligente de última generación.", "price" => "800$", "availability" => "En stock"],
    ["name" => "Auriculares", "description" => "Auriculares con cancelación de ruido.", "price" => "150$", "availability" => "Agotado"]
];

// Obtener el índice del producto desde la cadena de consulta
$indiceProducto = $_GET['id'] ?? null;

if ($indiceProducto !== null && isset($products[$indiceProducto])) {
    $product = $products[$indiceProducto];
} else {
    // Redirigir a index.php si el índice no es válido
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
</head>
<body>
    <h1>Detalles del Producto</h1>
    <h2><?= htmlspecialchars($product['name']) ?></h2>
    <p><strong>Descripción:</strong> <?= htmlspecialchars($product['description']) ?></p>
    <p><strong>Precio:</strong> <?= htmlspecialchars($product['price']) ?></p>
    <p><strong>Disponibilidad:</strong> <?= htmlspecialchars($product['availability']) ?></p>
    <a href="index.php">Volver a la lista de productos</a>
</body>
</html>
