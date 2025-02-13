<?php
//simulamos que el usuario ingresa la fecha en este formato
$fechaInput = "16/10/2024 15:30:00";

// objeto DateTime a partir del formato que usamos (día/mes/año horas:minutos:segundos)
$fechaObj = date_create_from_format("d/m/Y H:i:s", $fechaInput);


if (!$fechaObj) {
    echo "Ups, la fecha que ingresaste no es válida.";
    exit;
}

// Fecha en formato "Y-m-d H:i:s" (año-mes-día horas:minutos:segundos)
$formato1 = $fechaObj->format("Y-m-d H:i:s");
echo "<strong>Fecha en formato Y-m-d H:i:s:</strong> " . $formato1 . "<br>";

// Obtenemos el timestamp UNIX (la cantidad de segundos desde el 1 de enero de 1970)
$timestamp = $fechaObj->getTimestamp();
echo "<strong>Timestamp UNIX:</strong> " . $timestamp . "<br>";

// Ahora queremos mostrar la fecha de una forma más entendible: "16 de octubre de 2024, 1530"
// Primero, armamos un array para pasar del número del mes al nombre en español
$meses = array(
    1  => "enero",
    2  => "febrero",
    3  => "marzo",
    4  => "abril",
    5  => "mayo",
    6  => "junio",
    7  => "julio",
    8  => "agosto",
    9  => "septiembre",
    10 => "octubre",
    11 => "noviembre",
    12 => "diciembre"
);

// Extraemos las partes de la fecha que necesitamos: día, mes, año y la hora junto con los minutos sin separador
$dia     = $fechaObj->format("d");
$mesNum  = (int)$fechaObj->format("n"); // Esto da el mes sin ceros al principio
$año     = $fechaObj->format("Y");
$horaMin = $fechaObj->format("Hi");     // Por ejemplo, "1530" para las 15:30

//Mostremos la fecha en un formato más legible
$fechaLegible = $dia . " de " . $meses[$mesNum] . " de " . $año . ", " . $horaMin;
echo "<strong>Fecha legible:</strong> " . $fechaLegible;
?>
