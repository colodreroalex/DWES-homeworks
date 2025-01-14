<?php
// Incluir la cabecera
include 'header.php';

// Procesar el formulario
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email']; 
    $edad = $_POST['edad'];
    $terminos = isset($_POST['terminos']) ? 'Si' : 'No'; 

    $errores = [];

    if(!$email){
        $errores[] = 'El email no es válido';
    }

    if ($edad === false || $edad < 0) {
        $errores[] = "La edad no es válida.";
    }

    if (empty($errores)) {
        echo "<h2>Registro completado:</h2>";
        echo "<p><strong>Correo electrónico:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Edad:</strong> " . htmlspecialchars($edad) . "</p>";
        echo "<p><strong>Recibir boletines:</strong> " . htmlspecialchars($terminos) . "</p>";
    } else {
        echo "<h2 style='color: red;'>Errores en el formulario:</h2>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro a mi Newsletter</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form action="formulario.php" method="post">

        <br>
        <label for="email">Correo Electronico: 📧  </label>
        <input type="email" id="email" name= "email" required>
        <br><br>

        <label for="edad">Edad: 🙍  </label>
        <input type="edad" id="edad" name= "edad" required>
        <br><br>

        <label for="terminos">Acepta la suscripcion a la newsletter 📰 </label>
        <input type="checkbox" id="terminos" name= "terminos" >
        <br><br>

        <input type="submit" value="Enviar">



    </form>
</body>
</html>

<?php 
//incluir footer
include 'footer.php';

?>