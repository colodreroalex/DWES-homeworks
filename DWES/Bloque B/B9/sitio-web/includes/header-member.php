<?php
echo '<header>';
if (isset($_SESSION['user'])) {
    echo 'Bienvenido, ' . htmlspecialchars($_SESSION['user']) . ' | <a href="logout.php">Cerrar sesión</a>';
} else {
    echo '<a href="login.php">Iniciar sesión</a>';
}
echo '</header>';
?>
