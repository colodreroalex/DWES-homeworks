<?php
$name = 'Alex';

$saludo = $name ? 'Hello ' . $name : 'Hello, guest';

$memberShips = ['Basic' => 30, 'Premium' => 50, 'Gold' => 80];
$tiempoEnMeses = 3;

switch ($tiempoEnMeses) {
    case 1:
        $offer = 'No discount';
        $discount = 0.00;
          
        break;
    case 2:
        $offer = '20% off membership';
        $discount = 0.20;
        break;
    case 3:
        $offer = '30% off membership';
        $discount = 0.30;
        break;
    case 12:
        $offer = '50% off membership';
        $discount = 0.50;
        break;
    default:
        $offer = 'No discount';
        $discount = 0.00;
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Final</title>
    <link rel="stylesheet" href="css/gymStyles.css">
    <?php require 'includes/headerGym.php'; ?>
</head>

<body>

    <p> <?= $saludo ?></p>
    <p><strong>All memberships <br></strong></p>
    <p>
        <strong>
            <?php foreach ($memberShips as $membership => $price) {
                echo $membership . ': ' . $price . '€/month' . '<br>';
            } ?>
        </strong>
    </p>

    <?php if ($tiempoEnMeses == 12) { ?>
        <p> <?= $name ?> buy <?= $tiempoEnMeses ?> Months </p>
        <p>Discount is: 50% off</p>
    <?php } else { ?>
        <p> <?= $name ?> sign on for <?= $tiempoEnMeses ?> Months </p>
        <p>Discount is: <?= $offer ?></p>
    <?php } ?>

    <table>
        <tr>
            <th>Membership</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Final Price</th>
        </tr>
        <?php foreach ($memberShips as $membership => $price) { ?>
            <tr>
                <td><?= $membership ?></td>
                <td><?= $price ?>€/month</td>
                <td><?= $offer ?></td>
                <td><?= $price * (1 - $discount) ?>€/month</td>
            </tr>
        <?php } ?>
    </table>

    <?php include 'includes/footerGym.php' ?>
</body>

</html>