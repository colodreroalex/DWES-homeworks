<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Librería</title>
</head>

<body>

    <?php
    include 'functions.php';

    // Array de libros
    $books = [
        ['title' => '1984', 'author' => 'George Orwell', 'price' => 10, 'stock' => 5],
        ['title' => 'Brave New World', 'author' => 'Aldous Huxley', 'price' => 12, 'stock' => 8],
        ['title' => 'Fahrenheit 451', 'author' => 'Ray Bradbury', 'price' => 15, 'stock' => 2],
        ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'price' => 20, 'stock' => 10],
        ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'price' => 8, 'stock' => 7],
    ];

    // Mostrar lista de libros
    echo "<h2>Lista de Libros</h2>";
    echo "<table border='1'>
    
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>";
    
    foreach ($books as $book) {
        echo 
        "<tr>
            <td>{$book['title']}</td>
            <td>{$book['author']}</td>
            <td>{$book['price']}€</td>
            <td>{$book['stock']} uds</td>
        </tr>";
    }
    echo "</table><hr>";

    // Generar tabla con borde
    generate_border_table(6, 8);

    // Mostrar resumen del inventario
    $total_value = calculate_total_value($books);
    $best_seller = get_book_with_max_stock($books);
    
    echo "<h2>Resumen del Inventario</h2>";
    echo "<p>Libro con Mayor Stock: $best_seller</p>";
    echo "<p>Valor Total del Inventario: $total_value €</p>";

    ?>

</body>

</html>