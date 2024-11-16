<?php
function calculate_cost($cost, $quantity, $discount = 0, $tax = 20, $shipping = 0.00)
{
    $cost = $cost * $quantity;
    $tax  = $cost * ($tax / 100);
    return (($cost + $tax) - $discount)+$shipping;
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
    <p>Dark chocolate $<?= calculate_cost(quantity: 10, cost: 5, tax: 5, discount: 2) ?></p>
    <p>Milk chocolate $<?= calculate_cost(quantity: 10, cost: 5, tax: 5) ?></p>
    <p>White chocolate $<?= calculate_cost(5, 10, tax: 5, discount:21) ?></p>
    <p>Special Chocolate $ <?= calculate_cost(quantity:1, cost:100, tax:21 )?></p>
    <p>Spicy Chocolate $ <?= calculate_cost(quantity:10, cost:9, tax:21 )?></p>


    <table border="1">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Cost</th>
            <th>Discount</th>
            <th>Tax</th>
            <th>Shipping</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Dark Chocolate</td>
            <td>10</td>
            <td>$5</td>
            <td>$2</td>
            <td>5%</td>
            <td>$0</td>
            <td>$<?= calculate_cost(quantity: 10, cost: 5, tax: 5, discount: 2) ?></td>
        </tr>
        <tr>
            <td>Milk Chocolate</td>
            <td>10</td>
            <td>$5</td>
            <td>$0</td>
            <td>5%</td>
            <td>$0</td>
            <td>$<?= calculate_cost(quantity: 10, cost: 5, tax: 5) ?></td>
        </tr>
        <tr>
            <td>White Chocolate</td>
            <td>10</td>
            <td>$5</td>
            <td>$21</td>
            <td>5%</td>
            <td>$0</td>
            <td>$<?= calculate_cost(5, 10, tax: 5, discount:21) ?></td>
        </tr>
        <tr>
            <td>Special Chocolate</td>
            <td>1</td>
            <td>$100</td>
            <td>$0</td>
            <td>21%</td>
            <td>$2.5</td>
            <td>$<?= calculate_cost(quantity:1, cost:100, tax:21 ,shipping:2.5)?></td>
        </tr>
        <tr>
            <td>Spicy Chocolate</td>
            <td>10</td>
            <td>$9</td>
            <td>$0</td>
            <td>21%</td>
            <td>$0</td>
            <td>$<?= calculate_cost(quantity:10, cost:9, tax:21 )?></td>
        </tr>
    </table>


  </body>
</html>