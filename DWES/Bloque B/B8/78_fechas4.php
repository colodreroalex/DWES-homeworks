<?php
// Inicializamos las variables para almacenar los mensajes de salida
$duracionMensaje = "";
$totalHorasMensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Comprobamos que se hayan enviado ambas fechas
    if (!empty($_POST['inicio']) && !empty($_POST['fin'])) {
        try {
            // Creamos los objetos DateTime a partir de los valores enviados
            // El formato de los input datetime-local es "YYYY-MM-DDTHH:MM" (segundos opcionales)
            $fechaInicio = new DateTime($_POST['inicio']);
            $fechaFin    = new DateTime($_POST['fin']);

            // Verificamos que la fecha de inicio sea anterior a la fecha de fin
            if ($fechaInicio > $fechaFin) {
                $duracionMensaje = "La fecha de inicio debe ser anterior a la fecha de fin.";
            } else {
                // Calculamos el intervalo entre las dos fechas
                $interval = $fechaInicio->diff($fechaFin);

                // Mostramos el intervalo en formato "X días, Y horas, Z minutos"
                // %a: total de días transcurridos
                // %h: horas (restantes)
                // %i: minutos (restantes)
                $duracionMensaje = $interval->format("%a días, %h horas, %i minutos");

                // Calcular el total de minutos de duración
                $totalMinutos = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;
                // Obtenemos las horas totales y los minutos restantes
                $horasTotales     = intdiv($totalMinutos, 60);
                $minutosRestantes = $totalMinutos % 60;
                $totalHorasMensaje = $horasTotales . " horas, " . $minutosRestantes . " minutos";
            }
        } catch (Exception $e) {
            $duracionMensaje = "Error al procesar las fechas: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Duración del Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="datetime-local"] {
            padding: 5px;
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 8px 15px;
        }
        .resultado {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    <h1>Calcular Duración del Evento</h1>
    <form action="" method="post">
        <label for="inicio">Fecha y hora de inicio:</label>
        <input type="datetime-local" id="inicio" name="inicio" required>

        <label for="fin">Fecha y hora de fin:</label>
        <input type="datetime-local" id="fin" name="fin" required>

        <input type="submit" value="Calcular Duración">
    </form>

    <?php if (!empty($duracionMensaje)) : ?>
        <div class="resultado">
            <h2>Resultados</h2>
            <p><strong>Intervalo de tiempo:</strong> <?php echo $duracionMensaje; ?></p>
            <p><strong>Duración total en horas y minutos:</strong> <?php echo $totalHorasMensaje; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
