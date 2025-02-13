<?php
// filepath: /c:/xampp/htdocs/DWES/Bloque B/B8/fechas3.php

// Crear un nuevo objeto DateTime con la fecha y hora actuales
$start = new DateTime();
$startFormatted = $start->format('d/m/Y H:i:s');

// Ajustar la fecha del objeto utilizando setDate()
$start->setDate(2024, 11, 20);
$startAfterSetDate = $start->format('d/m/Y H:i:s');

// Ajustar la hora del objeto utilizando setTime()
$start->setTime(18, 45, 0);
$startAfterSetTime = $start->format('d/m/Y H:i:s');

// Clonar el objeto $start y almacenarlo en una nueva variable $end
$end = clone $start;

// Modificar la fecha y hora del objeto clonado utilizando modify()
$end->modify('+2 hours 15 minutes');
$endAfterModify = $end->format('d/m/Y H:i:s');

// Mostrar las fechas y horas de ambos objetos
$startFinal = $start->format('d/m/Y H:i:s');
$endFinal = $end->format('d/m/Y H:i:s');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manipulación de Fechas y Horas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .result {
            margin: 20px 0;
            padding: 10px;
            background: #e7f3fe;
            border-left: 6px solid #2196F3;
        }
        .result p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manipulación de Fechas y Horas</h1>
        <div class="result">
            <p><strong>Fecha y hora inicial (start):</strong> <?= $startFormatted ?></p>
            <p><strong>Después de setDate(2024,11,20) (start):</strong> <?= $startAfterSetDate ?></p>
            <p><strong>Después de setTime(18,45,0) (start):</strong> <?= $startAfterSetTime ?></p>
            <p><strong>Después de modify('+2 hours 15 minutes') (end):</strong> <?= $endAfterModify ?></p>
            <p><strong>Fecha y hora final (start):</strong> <?= $startFinal ?></p>
            <p><strong>Fecha y hora final (end):</strong> <?= $endFinal ?></p>
        </div>
    </div>
</body>
</html>
