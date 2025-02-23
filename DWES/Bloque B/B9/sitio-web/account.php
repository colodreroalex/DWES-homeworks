<?php
require_once 'includes/sessions.php';
require_login();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil del Empleado</title>
</head>
<body>
    <?php include 'includes/header-member.php'; ?>
    <h2>Bienvenido, <?php echo $_SESSION['user']; ?></h2>
    <p>Aquí se muestra tu información personal y archivos de trabajo.</p>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
