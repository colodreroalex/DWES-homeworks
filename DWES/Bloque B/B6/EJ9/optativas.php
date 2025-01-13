<?php
include 'header.php';

$asignaturas = [
    'Matemáticas',
    'Lengua',
    'Inglés',
    'Francés',
    'Física',
    'Química'
];

$mensaje = '';

$asiganturaSeleccionada = '';

// Comprobar si se envió el formulario
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['asignatura']) && in_array($_POST['asignatura'], $asignaturas)){
        $asiganturaSeleccionada = htmlspecialchars($_POST['asignatura']);
        $mensaje = "Asignatura seleccionada: $asiganturaSeleccionada";
    } else {
        $mensaje = "¡Debe seleccionar una asignatura valida!";
    }
}

echo "<h2>$mensaje</h2>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPTATIVAS</title>
</head> 
<body>
    <h1>Selecciona tu optativa</h1>

    <form action="optativas.php" method="POST">
        <?php foreach ($asignaturas as $asignatura) : ?>
            
            <label>
                <input type="radio" name="asignatura" value="<?= htmlspecialchars($asignatura); ?>"
                <?= $asignatura === $asiganturaSeleccionada ? 'checked' : ''; ?>>
                <?= htmlspecialchars($asignatura); ?>
            </label>
        
        <?php endforeach; ?>
        <br>
        <button type="submit">Enviar</button>
    </form>
    
    <?php include 'footer.php';?>

</body>
</html>