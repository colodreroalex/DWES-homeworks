<?php
// Variables iniciales
$name = 'Alex';
$saludo = $name ? 'Hello ' . $name : 'Hello, guest';
$memberShips = ['Basic' => 30, 'Premium' => 50, 'Gold' => 80];

// Capturar el valor ingresado por el usuario (meses)
$tiempoEnMeses = isset($_POST['tiempoEnMeses']) ? (int)$_POST['tiempoEnMeses'] : 0;
$discount = 0.00;
$offer = 'No discount';

// Calcular el descuento según el tiempo en meses
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
        $offer = $tiempoEnMeses > 0 ? 'No discount' : 'Please enter a valid number of months';
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

    <p><?= $saludo ?></p>

    <!-- Formulario para ingresar la cantidad de meses -->
    <form method="POST" action="">
        <label for="tiempoEnMeses">Enter the number of months to subscribe:</label>
        <input type="number" name="tiempoEnMeses" id="tiempoEnMeses" min="1" required>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($tiempoEnMeses > 0) { ?>
        <p><?= $name ?> signed up for <?= $tiempoEnMeses ?> months</p>
        <p>Discount is: <?= $offer ?></p>

        <table border="1">
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
                    <td><?= number_format($price * (1 - $discount), 2) ?>€/month</td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>

    <?php include 'includes/footerGym.php'; ?>
</body>

</html>
