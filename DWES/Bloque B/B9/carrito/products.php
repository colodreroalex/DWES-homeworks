<?php
session_start();

// Array de productos ficticios
$products = [
    1 => ["name" => "Camiseta", "price" => 15.99],
    2 => ["name" => "Pantalón", "price" => 29.99],
    3 => ["name" => "Zapatos", "price" => 49.99],
];

// Procesar la adición de un producto al carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    // Verificar que el producto exista
    if (isset($products[$productId])) {
        // Inicializamos el carrito si aún no existe
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        // Si el producto ya está en el carrito, incrementamos la cantidad
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            // Agregamos el producto al carrito con cantidad 1
            $_SESSION['cart'][$productId] = [
                "name"     => $products[$productId]["name"],
                "price"    => $products[$productId]["price"],
                "quantity" => 1
            ];
        }
    }
    // Redirigimos a la página del carrito para ver los productos añadidos
    header("Location: cart.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>
    <h1>Productos Disponibles</h1>
    <ul>
        <?php foreach ($products as $id => $product): ?>
            <li>
                <?php echo htmlspecialchars($product['name']); ?> - $<?php echo number_format($product['price'], 2); ?>
                <form action="products.php" method="post" style="display:inline;">
                    <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                    <button type="submit">Añadir al carrito</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="cart.php">Ver carrito</a></p>
</body>
</html>
