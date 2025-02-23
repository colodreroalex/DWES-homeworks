<?php
require_once 'includes/sessions.php';

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (login($email, $password)) {
        header("Location: account.php");
        exit();
    } else {
        $message = "Email o contraseña incorrecta.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>
<body>
    <?php include 'includes/header-member.php'; ?>
    <h2>Iniciar sesión</h2>
    <?php if ($message): ?>
        <p style="color: red;"><?php echo $message; ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
