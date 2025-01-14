<?php

// Función para generar una tabla con borde
function generate_border_table(int $rows, int $columns): void {
    echo "<h3>Tabla con Borde ($rows x $columns)</h3>";
    echo "<table border='1'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columns; $j++) {
            if ($i == 1 || $i == $rows || $j == 1 || $j == $columns) {
                echo "<td>($i, $j)</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table><hr>";
}

// Función para calcular el valor total del inventario
function calculate_total_value(array $books): float {
    $total = 0;
    foreach ($books as $book) {
        $total += $book['price'] * $book['stock'];
    }
    return $total;
}

// Función para obtener el libro con mayor stock
function get_book_with_max_stock(array $books): string {
    $max_stock = 0;
    $best_book = '';
    foreach ($books as $book) {
        if ($book['stock'] > $max_stock) {
            $max_stock = $book['stock'];
            $best_book = $book['title'];
        }
    }
    return $best_book;
}

?>
