<!--
Crea un script en PHP que realice las siguientes acciones:

Declara una variable $cliente con el nombre de un cliente.

Utiliza un operador ternario para mostrar un saludo personalizado si el nombre está definido, o un saludo genérico si no lo está.

Crea un array bidimensional que contenga diferentes tipos de café y sus precios en distintos tamaños. Por ejemplo:


$cafes = [
    'Espresso' => ['Pequeño' => 1.50, 'Mediano' => 2.00, 'Grande' => 2.50],
    'Latte' => ['Pequeño' => 2.00, 'Mediano' => 2.50, 'Grande' => 3.00],
    'Cappuccino' => ['Pequeño' => 2.20, 'Mediano' => 2.70, 'Grande' => 3.20],
];
Utiliza una estructura switch para determinar un descuento basado en la cantidad de cafés comprados:

1 a 2 cafés: Sin descuento.
3 a 5 cafés: 5% de descuento.
6 a 9 cafés: 10% de descuento.
10 o más cafés: 15% de descuento.

En el HTML, muestra una tabla que se genere y se rellene utilizando bucles anidados 
(foreach), mostrando los tipos de café, los tamaños, los precios originales, 
el descuento aplicado y el precio final después del descuento.   
-->
<?php
$cliente = 'Luis';

$saludo = $cliente ? 'Bienvenido, ' . $cliente : 'Bienvenido, estimado cliente';

$cafes = [
    'Espresso' => ['Pequeño' => 1.50, 'Mediano' => 2.00, 'Grande' => 2.50],
    'Latte' => ['Pequeño' => 2.00, 'Mediano' => 2.50, 'Grande' => 3.00],
    'Cappuccino' => ['Pequeño' => 2.20, 'Mediano' => 2.70, 'Grande' => 3.20],
];

$cantidadCafes = 7;

switch (true) {
    case ($cantidadCafes >= 1 && $cantidadCafes <= 2):
        $oferta = 'Sin descuento';
        $descuento = 0.00;
        break;
    case ($cantidadCafes >= 3 && $cantidadCafes <= 5):
        $oferta = '5% de descuento';
        $descuento = 0.05;
        break;
    case ($cantidadCafes >= 6 && $cantidadCafes <= 9):
        $oferta = '10% de descuento';
        $descuento = 0.10;
        break;
    case ($cantidadCafes >= 10):
        $oferta = '15% de descuento';
        $descuento = 0.15;
        break;
    default:
        $oferta = 'Sin descuento';
        $descuento = 0.00;
        break;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cafetería PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            margin: 0;
        }

        p {
            margin: 20px 0;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <h2><?= $saludo ?></h2>
    <p><strong>Menú de Cafés:</strong></p>

    <table>
        <tr>
            <th>Tipo de Café</th>
            <th>Tamaño</th>
            <th>Precio Original (€)</th>
            <th>Descuento</th>
            <th>Precio Final (€)</th>
        </tr>
        <?php foreach ($cafes as $tipo => $tamaños) { ?>
            <?php foreach ($tamaños as $tamaño => $precio) { ?>
                <tr>
                    <td><?= $tipo ?></td>
                    <td><?= $tamaño ?></td>
                    <td><?= number_format($precio, 2) ?></td>
                    <td><?= $oferta ?></td>
                    <td><?= number_format($precio * (1 - $descuento), 2) ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>

    <p>Has comprado <?= $cantidadCafes ?> cafés.</p>
    <p>Descuento aplicado: <?= $oferta ?></p>

</body>

</html>