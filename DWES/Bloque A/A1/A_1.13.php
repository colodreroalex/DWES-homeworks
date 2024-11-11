<?php
$Nombre = 'Sofia';
$message = '¡Hola, ' . $Nombre . '! Bienvenida a Mundo Nómada.';


$offer = [
    'item' => 'Chaquetas de Invierno',
    'description' => 'Chaqueta cálida y resistente, ideal para aventuras.',
    'canntidad' => 2,
    'original_price' => 50,
    'discount_price' => 35
];



$usual_price = $offer['canntidad'] * $offer['original_price'];
$offer_price = $offer['canntidad'] * $offer['discount_price'];
$saving = $usual_price - $offer_price;


$stock_status = true;
$endDate = '31/12/2024';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Nómada - Tienda de Ropa</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <h1>Mundo Nómada</h1>
    <h2>Oferta Especial de <?= $offer['item'] ?></h2>

    <p><?= $message ?></p>

    <p>Descripción: <?= $offer['description'] ?></p>

    

    <?php if ($stock_status): ?>
        <p>¡Ahorra $<?= $saving ?>!</p>
        <p>Compra <?= $offer['canntidad'] ?> <?= $offer['item'] ?> por solo $<?= $offer_price ?><br>
            (Precio habitual: $<?= $usual_price ?>)</p>
        <p>Oferta válida hasta el <?= $endDate ?>.</p>
    <?php else: ?>
        <p>¡Lo sentimos, esta oferta está agotada!</p>
    <?php endif; ?>
  
    

</body>

</html>