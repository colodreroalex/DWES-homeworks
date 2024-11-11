<?php
$name = 'Alex';

if ($name) {
    $saludo = 'Bienvenido de nuevo ' . $name;
}

$memberShips = ['Basic' => 30, 'Premium' => 50, 'Gold' => 80];
$tiempoEnMeses = 12;


switch ($tiempoEnMeses) {
    case 1:
        $offer = '10% off membership';
        break;
    case 2:
        $offer = '20% off membership';
        break;
    case 3:
        $offer = '30% off membership';
        break;
    case 12:
        $offer = '50% off membership';
        break;
    default:
        $offer = 'No discount';
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
    <p><strong><?php foreach ($memberShips as $membership => $price) {
            echo $membership . ': ' . $price . '<br>';
        } ?></strong></p>


    <?php if ($tiempoEnMeses == 12) { ?>
        <p> <?= $name ?> buy <?= $tiempoEnMeses ?> Months </p>
        <p>Discount is: 50% off</p>
    <?php } ?>
    <table border="1">
        <tr>
            <th>Membership</th>
            <th>Price</th>
            <th>Discount</th>
        </tr>
        <?php foreach ($memberShips as $membership => $price) { ?>
            <tr>
                <td><?= $membership ?></td>
                <td><?= $price ?></td>
                <td><?= ($tiempoEnMeses == 12) ? '50% off' : 'No discount' ?></td>
            </tr>
        <?php } ?>
    </table>



    <?php include 'includes/footerGym.php' ?>
</body>

</html>