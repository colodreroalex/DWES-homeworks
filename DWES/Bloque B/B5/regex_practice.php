<?php

include 'includes/header.php';
$expRegGmail = '/[a-z0-9\-\.]+\@[a-z]+\.+(es|com|org)/';
$expPhone = '/\d{3}(-|.)\d{3}(-|.)\d{4}/';
// Expresión regular para dividir la URL en protocolo, dominio y ruta
$expUrl = '/^(https?):\/\/([^\/]+)(\/.*)?$/';


$data = [
    "john.doe@example.com",
    "jane-doe@website.org",
    "invalid-email@com",
    "123-456-7890",
    "987.654.3210",
    "http://www.example.com",
    "https://site.org/path?query=string",
    "not-a-url"
];

function validarCorreos($data, $expRegGmail) {
    echo "<h1>Validación de Correos Electrónicos</h1>";
    foreach ($data as $value) {
        if (preg_match($expRegGmail, $value)) {
            echo "<p>{$value}  --> es un correo electrónico válido.</p>";
        } else {
            echo "<p>{$value}  --> no es un correo electrónico válido.</p>";
        }
    }
}

  

//Funcion con preg_match_all para extraer telefonos validos
function validarTelefonos($data, $expPhone) {
    echo "<h1>Validación de Números de Teléfono</h1>";
    foreach ($data as $value) {
        if (preg_match_all($expPhone, $value)) {
            echo "<p>{$value}  --> es un número de teléfono válido.</p>";
        } else {
            echo "<p>{$value}  --> no es un número de teléfono válido.</p>";
        }
    }
}

//Utilizar preg_split para dividir la url en componentes
function dividirUrl($data, $expUrl) {
    echo "<h1>División de URLs en Componentes</h1>";
    foreach ($data as $value) {
        $componentes = preg_split($expUrl, $value, -1, PREG_SPLIT_DELIM_CAPTURE);
        if (count($componentes) > 1) {
            echo "<p><strong>URL:</strong> {$value} --> Es una URL válida<br>";
            echo "<strong>Protocolo:</strong> {$componentes[1]}<br>";
            echo "<strong>Dominio:</strong> {$componentes[2]}<br>";
            echo "<strong>Ruta:</strong> " . (isset($componentes[3]) ? $componentes[3] : '/') . "</p>";
        } else {
            echo "<p><strong>URL:</strong> {$value} --> No es una URL válida.</p>";
        }
    }
}

// function limpiarCorreosInvalidos($data, $expRegGmail) { 
//     echo "<h1>Limpieza de Correos Electrónicos Inválidos</h1>";
//     // Reemplazar los elementos que NO coincidan con la expresión regular del correo válido
//     foreach ($data as &$value) {
//         if (!preg_match($expRegGmail, $value)) {
//             $value = ''; // Reemplaza los correos inválidos con una cadena vacía
//         }
//     }
//     // Mostrar los resultados
//     foreach ($data as $correo) {
//         if (!empty($correo)) {
//             echo "<p>{$correo} --> es un correo electrónico válido.</p>";
//         } else {
//             echo "<p>(Correo inválido eliminado)</p>";
//         }
//     }
// }

function limpiarCorreosInvalidos($data, $expRegGmail) { 
    echo "<h1>Limpieza de Correos Electrónicos Inválidos</h1>";

    // Aseguramos de que la expresión regular está bien formateada y escapada
    // El patrón para correos inválidos: reemplazamos los que no coinciden con el patrón
    $correosLimpios = preg_replace('/(?!^' . $expRegGmail . '$).+/', '', $data);

    // Mostrar los resultados
    foreach ($correosLimpios as $correo) {
        if (!empty($correo)) {
            echo "<p>{$correo} --> es un correo electrónico válido.</p>";
        } else {
            echo "<p>(Correo inválido eliminado)</p>";
        }
    }
}









validarCorreos($data, $expRegGmail);
validarTelefonos($data, $expPhone);
dividirUrl($data, $expUrl);
limpiarCorreosInvalidos($data, $expRegGmail);
include 'includes/footer.php';
?>


