<?php
include 'includes/header.php';
// Lista de canciones inicial
$playlist = [
    "Blinding Lights - The Weeknd",
    "Estoy enfermo - Pignoise",
    "Levitating - Dua Lipa",
    "One more night - Maroon 5",
    "Feel Good Inc. - Gorillaz"
];

// Agregar canciones
array_unshift($playlist, "Shape of You - Ed Sheeran"); // Al inicio
array_push($playlist, "Bohemian Rhapsody - Queen");    // Al final

// Mostrar la lista actualizada
echo "Lista de reproducción actualizada:<br>";
print_r($playlist);

// Eliminar canciones
$removedFirst = array_shift($playlist); // Eliminar la primera
$removedLast = array_pop($playlist);   // Eliminar la última
echo "<br>Canciones eliminadas:<br>Primera: $removedFirst<br>Última: $removedLast<br>";

// Buscar una canción
$searchSong = "Levitating - Dua Lipa";
$position = array_search($searchSong, $playlist);
if ($position !== false) {
    echo "<br>La canción '$searchSong' está en la posición $position.<br>";
} else {
    echo "<br>La canción '$searchSong' no está en la lista.<br>";
}

// Verificar si una canción está en la lista
$checkSong = "Feel Good Inc. - Gorillaz";
if (in_array($checkSong, $playlist)) {
    echo "<br>La canción '$checkSong' está en la lista.<br>";
} else {
    echo "<br>La canción '$checkSong' no está en la lista.<br>";
}

// Contar el número de canciones
echo "<br>Número total de canciones en la lista: " . count($playlist) . "<br>";

// Seleccionar canciones aleatorias
$randomKeys = array_rand($playlist, 2);
echo "<br>Canciones aleatorias seleccionadas:<br>";
foreach ($randomKeys as $key) {
    echo $playlist[$key] . "<br>";
}

// Mostrar la lista como cadena
$playlistString = implode(", ", $playlist);
echo "<br>Lista de reproducción como cadena:<br>$playlistString<br>";

// Dividir una cadena en canciones
$newPlaylistString = "Stay - The Kid LAROI, Heat Waves - Glass Animals, Save Your Tears - The Weeknd";
$newPlaylist = explode(", ", $newPlaylistString);
echo "<br>Nueva lista generada desde cadena:<br>";
print_r($newPlaylist);

// Eliminar duplicados
$playlistWithDuplicates = array_merge($playlist, $newPlaylist, ["Blinding Lights - The Weeknd"]);
$uniquePlaylist = array_unique($playlistWithDuplicates);
echo "<br>Lista sin duplicados:<br>";
print_r($uniquePlaylist);

// Fusionar listas
$finalPlaylist = array_merge($playlist, $newPlaylist);
echo "<br>Lista fusionada:<br>";
print_r($finalPlaylist);

