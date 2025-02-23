<?php
session_start();

// Datos simulados
$stored_email = "alexcg25@empresa.com";
$stored_password = "123456"; // contraseña (ejemplo)

// Función para iniciar sesión
function login($email, $password) {
    global $stored_email, $stored_password;
    if ($email === $stored_email && $password === $stored_password) {
        $_SESSION['user'] = $email;
        return true;
    } else {
        return false;
    }
}

// Función para requerir autenticación en páginas protegidas
function require_login() {
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
}

// Función para cerrar sesión
function logout() {
    session_unset();
    session_destroy();
}
?>
