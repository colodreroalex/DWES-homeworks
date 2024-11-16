<?php
function calculate_cost($cost, $quantity, $discount = 0, $tax = 0)
{
    $cost = $cost * $quantity;
    $cost_with_tax = ($cost) + ($cost * $tax / 100);
    $cost_with_discount = ($cost_with_tax)-($cost_with_tax * $discount / 100);

    return $cost_with_discount;
}
?>
<!DOCTYPE html>
<html> 
  <head>
    <title>Default Values for Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Dark chocolate $<?= calculate_cost(5, 10, 5) ?></p>
    <p>Milk chocolate $<?= calculate_cost(3, 4) ?></p>
    <p>White chocolate $<?= calculate_cost(4, 15, 20) ?></p>
    <p>Weird chocolate $<?= calculate_cost(20, 1) ?></p>
    <p>Special chocolate $<?= calculate_cost(1, 5, 10) ?></p>

<br>
    <table border="1">
        <tr>
            <th>PRODUCTS</th>
            <th>Dark Chocolate</th>
            <th>Milk Chocolate</th>
            <th>White Chocolate</th>
            <th>Weird Chocolate</th>
            <th>Special Chocolate</th>
        </tr>
        <tr>
            <td>PRICES</td>
            <td>$<?= calculate_cost(5, 10, 5, 21) ?></td>
            <td>$<?= calculate_cost(3, 4, 10, 4) ?></td>
            <td>$<?= calculate_cost(4, 15, 20, 21) ?></td>
            <td>$<?= calculate_cost(20, 5, 50, 21) ?></td>
            <td>$<?= calculate_cost(1, 5, 10, 4) ?></td>
    </table>

  </body>
</html>