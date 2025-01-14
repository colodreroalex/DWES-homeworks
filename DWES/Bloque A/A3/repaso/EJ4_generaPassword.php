<?php

function generarPasswords($longitud = 8) {
    static $contador = 0;
    $contador++;

    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $longitudCaracteres = strlen($caracteres);
    $password = '';

    for ($i = 0; $i < $longitud; $i++) {
        $password .= $caracteres[rand(0, $longitudCaracteres - 1)];
    }

    echo "Contraseña generada: $password  🔒  <br>";
    echo "Contraseñas generadas hasta ahora: $contador<br>";
}

// Ejemplo de uso
generarPasswords(); // Genera una contraseña de 8 caracteres por defecto
generarPasswords(12); // Genera una contraseña de 12 caracteres
generarPasswords(16); // Genera una contraseña de 16 caracteres


?>
