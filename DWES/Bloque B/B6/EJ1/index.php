<?php
// Lista de productos (array indexado)
$products = [
    [
        "name" => "Laptop", 
        "description" => "Una laptop potente y portátil.", 
        "price" => "1200$", 
        "availability" => "En stock"
    ],
    [
        "name" => "Smartphone", 
        "description" => "Un teléfono inteligente de última generación.", 
        "price" => "800$", 
        "availability" => "En stock"
    ],
    [
        "name" => "Auriculares", 
        "description" => "Auriculares con cancelación de ruido.", 
        "price" => "150$", 
        "availability" => "Agotado"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <ul>
        <?php foreach ($products as $id => $product): ?>
            <li>
                <a href="product.php?id=<?= $id ?>">
                    <?= htmlspecialchars($product['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
