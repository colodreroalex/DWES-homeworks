<?php
$products = [
    'Toffee' => 2.99,
    'mints' => 1.99,
    'Fudge' => 3.49,
    'Lollipop' => 0.50,
    'Gum' => 1.00
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>for Loop - higher counter</title>
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body>
    <h1>The Candy Store</h1>
    <h2>Price List</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?> </td>
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
        
    </table>

</body>

</html>