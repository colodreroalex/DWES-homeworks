<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre'])){

    //Limpiamos el nombre
    $nombre = trim($_POST['nombre']);

    if(empty($nombre)){

        //Establecemos la cookie
        setcookie("nombre", $nombre);

        //Redireccionamos a la misma pagina de bienvenida para que la cookie se establezca bien
        header("Location: welcome.php");

        exit;
    }
}

//Verificamos si la cookie existe
if(isset($_COOKIE['nombre'])){
    $nombreCookieSanitizado = htmlspecialchars($_COOKIE['nombre']);
    echo "<h1>Bienvenido $nombreCookieSanitizado</h1>";

}
else{
    // Si la cookie no existe, mostramos el formulario para que el usuario ingrese su nombre.
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenida</title>
    </head>
    <body>
        <form action="welcome.php" method="post">
            <label for="nombre">Introduce tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Enviar</button>
        </form>
    </body>
    </html>


    <?php
}
?>

