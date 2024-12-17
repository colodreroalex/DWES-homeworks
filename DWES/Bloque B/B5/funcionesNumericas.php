<?php


// Precios de las hamburguesas
$precios = [
    "Hamburguesa Clásica" => 5.50,
    "Hamburguesa con Queso" => 6.75,
    "Hamburguesa BBQ" => 7.25,
    "Hamburguesa Vegetariana" => 6.00
];

// Generar una cantidad aleatoria de ventas entre 50 y 100
$numVentas = mt_rand(50, 100);
$ventas = [];

// Generar ventas aleatorias
for ($i = 0; $i < $numVentas; $i++) {
    $tipoHamburguesa = array_rand($precios);
    $cantidad = mt_rand(1, 5);
    $totalVenta = round($precios[$tipoHamburguesa] * $cantidad, 2);
    $ventas[] = $totalVenta;
}

// Calcular el total del día
$totalDia = array_sum($ventas);
$totalDiaFormateado = number_format($totalDia, 2);

// Calcular estadísticas
$raizCuadrada = sqrt($totalDia);
$potenciaDos = pow($totalDia, 2);
$totalRedondeadoArriba = ceil($totalDia);
$totalRedondeadoAbajo = floor($totalDia);

// Mostrar resultados
echo "Total del día: $totalDiaFormateado<br>";
echo "Raíz cuadrada del total: " . round($raizCuadrada, 2) . "<br>";
echo "Total elevado a la potencia de 2: " . number_format($potenciaDos, 2) . "<br>";
echo "Total redondeado hacia arriba: $totalRedondeadoArriba<br>";
echo "Total redondeado hacia abajo: $totalRedondeadoAbajo<br>";
?>