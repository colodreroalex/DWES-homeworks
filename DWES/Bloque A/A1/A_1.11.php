<?php 

$item = 'Chocolate'; 
$stock = 5; 
$wanted = 7;
$can_buy = ($wanted <= $stock); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <h1>The candy Store</h1>
    <h2>Shopping cart</h2>
    <p>item: <?= $item ?></p>
    <p>stock: <?= $stock ?></p>
    <p>wanted: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>
</body>
</html>