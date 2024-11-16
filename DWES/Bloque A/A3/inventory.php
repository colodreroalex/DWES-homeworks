<?php

declare(strict_types=1);
$tax_rate = 0.12;

$books = [
    ['title' => 'The Hobbit',  'price' => 10, 'stock' => 5],
    ['title' => 'The Catcher in the Rye', 'price' => 5, 'stock' => 2],
    ['title' => 'The Great Gatsby',  'price' => 7, 'stock' => 15],
    ['title' => 'The Da Vinci Code', 'price' => 12, 'stock' => 7],
    ['title' => 'To Kill a Mockingbird', 'price' => 6, 'stock' => 3]

];

function get_total_stock(array $books): int
{
    //Inicializamos la variable total
    $total = 0;

    //Para cada libro en el array de libros
    foreach ($books as $book) {
        $total += $book['stock']; //Sumamos el stock de cada libro al total
    }

    //Devolvemos el total
    return $total;
}


function get_inventory_value(float $precio, int $cantidad): float
{
    return $precio * $cantidad;
}


function calculate_tax(float $valor, float $tax_rate): float
{
    return $valor * $tax_rate;
}


//Calculo total del inventario
$total = 0;

foreach ($books as $book) {
    $total += get_inventory_value($book['price'], $book['stock']);
}

$total_tax = calculate_tax($total, $tax_rate);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #343a40;
        }

        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: lightseagreen;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        h1 {
            text-align: center;
            color: lightseagreen;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
            }

            th,
            td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <h1>Books inventory</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Value</th>
        </tr>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $book['title'] ?></td>
                <td><?= $book['price'] ?>€</td>
                <td><?= $book['stock'] ?> uds</td>
                <td><?= get_inventory_value($book['price'], $book['stock']) ?>€</td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table>
        <tr>
            <th colspan="4">Inventory Summary</th>
        </tr>
        <tr>
            <td colspan="3">Books</td>
            <td><?= get_total_stock($books) ?> uds</td>
        </tr>
        <tr>
            <td colspan="3">Total </td>
            <td><?= $total ?>€</td>
        </tr>
        <tr>
            <td colspan="3">Tax </td>
            <td> <?= $total_tax ?>€</td>
        </tr>

        <tr>
            <td colspan="3">Total with Tax</td>
            <td><?= $total_tax + $total ?>€</td>
        </tr>
    </table>


</body>

</html>