<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Tu Carrito</h1>
    <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $grandTotal = 0;
                foreach ($_SESSION['cart'] as $productId => $item):
                    $total = $item['price'] * $item['quantity'];
                    $grandTotal += $total;
                ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['name']); ?></td>
                        <td>$<?php echo number_format($item['price'], 2); ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>$<?php echo number_format($total, 2); ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" style="text-align: right;"><strong>Total General:</strong></td>
                    <td>$<?php echo number_format($grandTotal, 2); ?></td>
                </tr>
            </tbody>
        </table>
        <p><a href="products.php">Seguir comprando</a></p>
        <p><a href="checkout.php">Finalizar compra</a></p>
    <?php else: ?>
        <p>Tu carrito está vacío.</p>
        <p><a href="products.php">Volver a productos</a></p>
    <?php endif; ?>
</body>
</html>
