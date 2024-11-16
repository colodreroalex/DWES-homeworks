<?php
$precio_usd = 4;
$tipos_cambio = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    'aud' => 1.30, // Dólar australiano
    'cad' => 1.25  // Dólar canadiense
];

function calcular_precios($usd, $tipos_cambio)
{
    $precios = [
        'libra' => $usd * $tipos_cambio['uk'],
        'euro' => $usd * $tipos_cambio['eu'],
        'yen' => $usd * $tipos_cambio['jp'],
        'aud' => $usd * $tipos_cambio['aud'],
        'cad' => $usd * $tipos_cambio['cad']
    ];
    return $precios;
}

function formatear_precio($cantidad, $moneda)
{
    $simbolos = [
        'us' => 'US $',
        'libra' => '&pound;',
        'euro' => '&euro;',
        'yen' => '&yen;',
        'aud' => 'AUD $',
        'cad' => 'CAD $'
    ];
    return $simbolos[$moneda] . number_format($cantidad, 2);
}

$precios_globales = calcular_precios($precio_usd, $tipos_cambio);

$productos = [
    'Chocolates' => 4,
    'Caramelos' => 2,
    'Pirulís' => 1.5,
    'Galletas' => 3.25
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Funciones con Valores Múltiples</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>La Tienda de Dulces</h1>
    <h2>Precios Globales para el Producto Base (US $<?= $precio_usd ?>)</h2>
    <p>Precio en UK: <?= formatear_precio($precios_globales['libra'], 'libra') ?></p>
    <p>Precio en EU: <?= formatear_precio($precios_globales['euro'], 'euro') ?></p>
    <p>Precio en JP: <?= formatear_precio($precios_globales['yen'], 'yen') ?></p>
    <p>Precio en AUD: <?= formatear_precio($precios_globales['aud'], 'aud') ?></p>
    <p>Precio en CAD: <?= formatear_precio($precios_globales['cad'], 'cad') ?></p>
    <br>


    <table border="1">

        <tr>
            <th>Producto</th>
            <th>Precio US</th>
            <th>Precio UK</th>
            <th>Precio EU</th>
            <th>Precio JP</th>
            <th>Precio AUD</th>
            <th>Precio CAD</th>
        </tr>


        <?php foreach ($productos as $producto => $precio): ?>
            <?php $precios = calcular_precios($precio, $tipos_cambio); ?>
            <tr>
                <td><?= $producto ?></td>
                <td><?= formatear_precio($precio, 'us') ?></td>
                <td><?= formatear_precio($precios['libra'], 'libra') ?></td>
                <td><?= formatear_precio($precios['euro'], 'euro') ?></td>
                <td><?= formatear_precio($precios['yen'], 'yen') ?></td>
                <td><?= formatear_precio($precios['aud'], 'aud') ?></td>
                <td><?= formatear_precio($precios['cad'], 'cad') ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>