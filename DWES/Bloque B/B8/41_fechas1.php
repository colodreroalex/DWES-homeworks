<?php

$ahora = time(); // UNIX timestamp
$fechaActual = date("d/m/Y H:i:s", $ahora); // Fecha actual en formato d/m/Y H:i:s
echo "<strong>Fecha y hora actual:</strong> $fechaActual<br><br>";

// Fecha de inicio del evento utilizando strtotime()
$inicioEventoStr = "2025-03-15 09:00:00";
$inicioEvento = strtotime($inicioEventoStr);
echo "<strong>Inicio del evento:</strong> " . date("d/m/Y H:i:s", $inicioEvento) . "<br>";

$finalEvento = mktime(18, 0, 0, 3, 20, 2025);
echo "<strong>Finalización del evento:</strong> " . date("d/m/Y H:i:s", $finalEvento) . "<br><br>";

// Convertir timestamps a objetos DateTime
$fechaActualDT = new DateTime();
$fechaActualDT->setTimestamp($ahora);

$inicioEventoDT = new DateTime();
$inicioEventoDT->setTimestamp($inicioEvento);

$finalEventoDT = new DateTime();
$finalEventoDT->setTimestamp($finalEvento);

// Calcular la diferencia en días para el inicio del evento
$diasParaInicio = $fechaActualDT->diff($inicioEventoDT)->days;

// Calcular la diferencia en días para el final del evento
$diasParaFin = $fechaActualDT->diff($finalEventoDT)->days;

echo "<hr>";

if ($ahora < $inicioEvento) {
    // La fecha actual es anterior al inicio del evento.
    echo "El evento comenzará en <strong>$diasParaInicio</strong> día(s).<br>";
    echo "El evento terminará en <strong>$diasParaFin</strong> día(s) desde hoy.";
} elseif ($ahora >= $inicioEvento && $ahora <= $finalEvento) {
    // La fecha actual se encuentra entre la fecha de inicio y la fecha de finalización.
    echo "El evento está en curso. Faltan <strong>$diasParaFin</strong> día(s) para que finalice.";
} else {
    // La fecha actual es posterior a la fecha de finalización del evento.
    echo "El evento ya ha finalizado.";
}
?>