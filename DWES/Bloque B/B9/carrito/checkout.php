<?php
session_start();

// Procesar la acción de vaciar el carrito o finalizar la compra
$message = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Se elimina el carrito de la sesión
    unset($_SESSION['cart']);
    if (isset($_POST['vaciar'])) {
        $message = "El carrito ha sido vaciado.";
    } elseif (isset($_POST['comprar'])) {
        $message = "¡Compra finalizada! Gracias por su compra.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Finalizar Compra</title>
</head>
<body>
    <h1>Checkout</h1>
    <?php if ($message): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
        <p><a href="products.php">Volver a la tienda</a></p>
    <?php else: ?>
        <form action="checkout.php" method="post">
            <button type="submit" name="vaciar">Vaciar Carrito</button>
            <button type="submit" name="comprar">Finalizar Compra</button>
        </form>
        <p><a href="cart.php">Volver al carrito</a></p>
    <?php endif; ?>
</body>
</html>
