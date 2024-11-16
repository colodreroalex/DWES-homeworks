<?php 

$stock = 10;
$chocolate_stock = 5;
$chicle_stock = 10;
$paleta_stock = 0;
$galleta_stock = 12;

function get_stock_message($stock)
{
    if ($stock === 10) {
        return 'Exactly 10 items in stock';
    }
    if ($stock >= 10) {
        return 'Good availability';
    }
    if ($stock > 0 && $stock < 10) {
        return 'Low stock';
    }
    return 'Out of stock';
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Multiple Return Statements</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p><?= get_stock_message($stock) ?></p>

    <table border="1">
        <tr>
            <th>Chocolates</th>
            <th>Chicles</th>
            <th>Paletas</th>
            <th>Galletas</th>
        </tr>
        <tr>
            <th> <?= $chocolate_stock ?> - <?= get_stock_message(5) ?> </th> 
            <th><?= $chicle_stock ?> - <?= get_stock_message(10) ?> </th> 
            <th><?= $paleta_stock ?> - <?= get_stock_message(0) ?> </th>
            <th><?= $galleta_stock ?> - <?= get_stock_message(12) ?> </th>

        </tr>
    </table>
</body>

</html>