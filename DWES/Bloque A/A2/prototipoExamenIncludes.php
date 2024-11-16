<?php
// Variable de nombre del cliente
$cliente = 'Luis';

// Operador ternario para el saludo
$saludo = $cliente ? 'Bienvenido, ' . $cliente : 'Bienvenido, estimado cliente';

// Array bidimensional de tipos de café y sus precios
$cafes = [
    'Espresso' => ['Pequeño' => 1.50, 'Mediano' => 2.00, 'Grande' => 2.50],
    'Latte' => ['Pequeño' => 2.00, 'Mediano' => 2.50, 'Grande' => 3.00],
    'Cappuccino' => ['Pequeño' => 2.20, 'Mediano' => 2.70, 'Grande' => 3.20],
];

// Número de cafés comprados
$cantidadCafes = 10;

// Determinación del descuento basado en la cantidad de cafés
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
<!-- Llamamos a la cabecera -->
<?php require_once 'includes/header.php'; ?>

<body>
    <h2><?= $saludo; ?></h2>
    <h3>Precios de cafés con descuentos</h3>
    <table border="1">
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
                    <td><?= $tipo; ?></td>
                    <td><?= $tamaño; ?></td>
                    <td><?= number_format($precio, 2); ?> €</td>
                    <td><?= $oferta; ?></td>
                    <td><?= number_format($precio * (1 - $descuento), 2); ?> €</td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>

    <p>Has comprado <?= $cantidadCafes; ?> cafés.</p>
    <p>Descuento aplicado: <?= $oferta; ?></p>

<?php include 'includes/footer.php'; ?>
</body>
