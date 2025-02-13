<?php
// 1. Crear fecha inicial del evento (ejemplo: 16/10/2024 15:30:00)
$fechaInicial = DateTime::createFromFormat('d/m/Y H:i:s', '16/10/2024 15:30:00');

// 2. Definir duración del evento (ej: 2 días, 1 hora, 30 minutos)
$duracionEvento = new DateInterval('P2DT1H30M');

// 3. Intervalo de repetición (cada 7 días)
$intervaloRepeticion = new DateInterval('P7D');

// 4. Calcular fecha final del periodo (2 meses después de la inicial)
$fechaFinal = clone $fechaInicial;
$fechaFinal->modify('+2 months');

// 5. Crear periodo de eventos recurrentes
$periodo = new DatePeriod($fechaInicial, $intervaloRepeticion, $fechaFinal);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos Recurrentes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }
        .evento {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }
        .evento:last-child {
            border-bottom: none;
        }
        .evento h3 {
            margin: 0;
            color: #555;
            font-size: 18px;
        }
        .evento p {
            margin: 5px 0;
            color: #777;
        }
        .duracion {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Eventos Recurrentes</h1>
        <?php
        // 6. Iterar sobre cada fecha en el periodo
        foreach ($periodo as $fechaEvento) {
            // 7. Calcular fecha de fin del evento sumando la duración
            $fechaFinEvento = clone $fechaEvento;
            $fechaFinEvento->add($duracionEvento);
            
            // 8. Calcular duración entre inicio y fin
            $duracion = $fechaEvento->diff($fechaFinEvento);
            
            // 9. Formatear y mostrar resultados
            echo '<div class="evento">';
            echo '<h3>' . $fechaEvento->format('l, d M Y H:i') . ' - ' . $fechaFinEvento->format('H:i') . '</h3>';
            echo '<p class="duracion">Duración: ' . $duracion->format('%d días, %h horas, %i minutos') . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>