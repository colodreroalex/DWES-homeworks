<?php

function saltoLinea() {
    echo "<br><hr><br>";
}

include './includes/header.php';
date_default_timezone_set('UTC'); // Zona horaria base

// --- Creación del evento por el administrador ---
echo "<h2>Creación del Evento</h2>";
$adminTimezone = 'Europe/Madrid';
$fechaEvento = '2025-06-15 14:00:00';
$eventoAdmin = new DateTime($fechaEvento, new DateTimeZone($adminTimezone));

echo "<strong>Evento (hora de creación en $adminTimezone):</strong>" . saltoLinea();
echo "<strong>Fecha:</strong> " . $eventoAdmin->format('Y-m-d') . saltoLinea();
echo "<strong>Hora:</strong> " . $eventoAdmin->format('H:i:s') . saltoLinea();
saltoLinea();

// --- Conversión del evento a otras zonas horarias ---
echo "<h2>Conversión de Zonas Horarias</h2>";
$destinos = ['America/New_York', 'Asia/Tokyo'];
foreach ($destinos as $zona) {
    $evento = clone $eventoAdmin;
    $evento->setTimezone(new DateTimeZone($zona));
    echo "<strong>Evento en $zona:</strong>" . saltoLinea();
    echo "<strong>Fecha:</strong> " . $evento->format('Y-m-d') . saltoLinea();
    echo "<strong>Hora:</strong> " . $evento->format('H:i:s') . saltoLinea();
}
saltoLinea();

// --- Información detallada de cada zona horaria ---
echo "<h2>Información Detallada de Zonas Horarias</h2>";
foreach ($destinos as $zona) {
    $tz = new DateTimeZone($zona);
    $now = new DateTime("now", $tz);
    echo "<strong>Información de $zona:</strong>" . saltoLinea();
    echo "<strong>Nombre:</strong> " . $tz->getName() . saltoLinea();
    echo "<strong>Offset respecto a UTC:</strong> " . ($tz->getOffset($now) / 3600) . " horas" . saltoLinea();
    
    $loc = $tz->getLocation();
    echo "<strong>Ubicación:</strong>" . saltoLinea();
    echo "<strong>País:</strong> " . $loc['country_code'] . saltoLinea();
    echo "<strong>Latitud:</strong> " . $loc['latitude'] . saltoLinea();
    echo "<strong>Longitud:</strong> " . $loc['longitude'] . saltoLinea();
    
    echo "<strong>Transiciones de Horario de Verano:</strong>" . saltoLinea();
    $transitions = $tz->getTransitions(time(), time() + 365 * 24 * 60 * 60);
    foreach ($transitions as $transicion) {
        $fechaTrans = date("Y-m-d H:i:s", $transicion['ts']);
        $isdst = $transicion['isdst'] ? 'Sí' : 'No';
        echo "- <strong>Fecha:</strong> $fechaTrans" . saltoLinea();
        echo "  <strong>isdst:</strong> $isdst" . saltoLinea();
        echo "  <strong>Offset:</strong> " . ($transicion['offset'] / 3600) . " horas" . saltoLinea();
    }
    saltoLinea();
}

// --- Generación de eventos recurrentes ---
echo "<h2>Eventos Recurrentes</h2>";
echo "<strong>Eventos recurrentes (cada semana, 8 ocurrencias) en $adminTimezone:</strong>" . saltoLinea();
$interval = new DateInterval('P1W');
$period = new DatePeriod($eventoAdmin, $interval, 8);

foreach ($period as $eventoRecurrencia) {
    echo "<strong>Fecha original:</strong>" . saltoLinea();
    echo "<strong>Fecha:</strong> " . $eventoRecurrencia->format('Y-m-d') . saltoLinea();
    echo "<strong>Hora:</strong> " . $eventoRecurrencia->format('H:i:s') . saltoLinea();
    foreach ($destinos as $zona) {
        $eventoCopia = clone $eventoRecurrencia;
        $eventoCopia->setTimezone(new DateTimeZone($zona));
        echo "  - <strong>En $zona:</strong>" . saltoLinea();
        echo "      <strong>Fecha:</strong> " . $eventoCopia->format('Y-m-d') . saltoLinea();
        echo "      <strong>Hora:</strong> " . $eventoCopia->format('H:i:s') . saltoLinea();
    }
    saltoLinea();
}
include './includes/footer.php';
?>
