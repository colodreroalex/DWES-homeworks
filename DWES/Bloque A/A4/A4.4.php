<?php

include 'Library.php';
include 'Book.php';

$libros = new Library(
    "Biblioteca Baena",
    [
        new Book("El Quijote", "Miguel de Cervantes", 863),
        new Book("La Celestina", "Fernando de Rojas", 304),
        new Book("La Odisea", "Homero", 541),
        new Book("La Iliada", "Homero", 704),
        new Book("El Señor de los Anillos", "J.R.R. Tolkien", 1178),
        new Book("El Hobbit", "J.R.R. Tolkien", 310),
        new Book("El Silmarillion", "J.R.R. Tolkien", 365),
        new Book("El Arte de la Guerra", "Sun Tzu", 273),
        new Book("El Principe", "Nicolás Maquiavelo", 140),
        new Book("El Capital", "Karl Marx", 1152),
        new Book("El Origen de las Especies", "Charles Darwin", 502)
    ]
);

$libros->addBook(new Book("El Aleph", "Jorge Luis Borges", 200));
$libros->addBook(new Book("El Tunel", "Ernesto Sabato", 438));
$libros->addBook(new Book("Cien años de soledad", "Gabriel García Márquez", 390));

$libros->removeBook(new Book("El Quijote", "Miguel de Cervantes", 863));

foreach ($libros->getBooks() as $libro) {
    echo $libro->title . " - " . $libro->author . " - " . $libro->pages . "<br>";
}
