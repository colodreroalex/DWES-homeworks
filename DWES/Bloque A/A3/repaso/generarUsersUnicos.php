<?php

function generarNombreUsuario($nombre, $apellido) {
    // Variable estática para almacenar los nombres de usuario generados
    static $usuariosGenerados = [];

    // Usar el nombre completo como clave única inicial
    $nombreCompleto = $nombre . ' ' . $apellido;
    $contador = 1;

    // Crear un nombre de usuario inicial
    $nombreUsuario = $nombreCompleto . $contador;

    // Asegurarse de que sea único
    do {
        $nombreUsuario = $nombreCompleto . $contador;
        $contador++;
    } while (array_search($nombreUsuario, $usuariosGenerados) !== false);

    // Guardar el nombre de usuario generado en la lista
    $usuariosGenerados[] = $nombreUsuario;

    // Devolver el nombre de usuario generado
    return $nombreUsuario;
}

// Lista de nombres y apellidos para probar
$personas = [
    ["nombre" => "Juan", "apellido" => "Pérez"],
    ["nombre" => "Ana", "apellido" => "López"],
    ["nombre" => "Juan", "apellido" => "Pérez"],
    ["nombre" => "Luis", "apellido" => "Martínez"],
    ["nombre" => "María", "apellido" => "Pérez"],
];

// Generar y mostrar los nombres de usuario para cada persona
foreach ($personas as $persona) {
    $nombre = $persona["nombre"];
    $apellido = $persona["apellido"];
    $nombreUsuario = generarNombreUsuario($nombre, $apellido);
    
    echo "Nombre completo: $nombre $apellido<br>";
    echo "Nombre de usuario generado: $nombreUsuario<br><br>";
}
?>
