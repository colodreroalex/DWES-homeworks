<?php
include 'Product.php';
$producto = new Product(1,"Producto 1");
$producto2 = new Product(2, "Producto 2");

$producto->name = "Television";
$producto->price = 299.00;
$producto -> stock = 30; 

$producto2->name = "Radio";
$producto2->price = 199.00;
$producto2 -> stock = 50;

?>
<?php include 'includes/header.php'; ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <tr>
            <td><?= $producto->name ?></td>
            <td><?= $producto->price ?></td>
            <td><?= $producto->stock ?></td>
        </tr>
        <tr>
            <td><?= $producto2->name ?></td>
            <td><?= $producto2->price ?></td>
            <td><?= $producto2->stock ?></td>
        </tr>
    </table>
  </body>
  </html>
<?php include 'includes/footer.php'; ?>