<?php
include 'header.php';

$form['nombre'] = '';
$form['correo'] = ''; 
$form['telefono'] = '';
$form['mensaje'] = '';

$data = []; 
$errors = []; 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $filters['nombre'] = FILTER_NULL_ON_FAILURE;
    $filters['correo']= FILTER_VALIDATE_EMAIL;
    $filters['telefono']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['telefono']['options'] = ['regexp' => '/^\d{9,11}$/'];
    $filters['mensaje'] = FILTER_DEFAULT;

    //Obtener los valores enviados mediante POST y guardarlos en la variable $form
    $form = filter_input_array(INPUT_POST, $filters);

    // //Guardar los datos en la variable $data con los filtros
    $data = filter_var_array($form, $filters);

    

    if($data['nombre'] === false || $data['nombre'] === null){
        $errors[] = "El nombre contiene caracteres inválidos.";
    }
    //Verificar errores
    if($data['correo'] === false){
        $errors[] = "El correo es inválido.";
    }
    //Expresión regular para validar el teléfono
    if($data['telefono'] === false || $data['telefono'] === null) {
        $errors[] = "El teléfono contiene caracteres inválidos.";
    } 
    if($data['mensaje'] === false || $data['mensaje'] === null){
        $errors[] = "El mensaje contiene caracteres inválidos.";
    }

    // Sanitizar los datos después de la validación
    $data['nombre'] = filter_var($form['nombre'], FILTER_SANITIZE_STRING);
    $data['mensaje'] = filter_var($form['mensaje'], FILTER_SANITIZE_STRING);
    $data['telefono'] = filter_var($form['telefono'], FILTER_SANITIZE_STRING);
    $data['correo'] = filter_var($form['correo'], FILTER_SANITIZE_EMAIL);

    // Mostrar los datos saneados
    echo "<h1>Datos Saneados</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($data['nombre']) . "</p>";
    echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($data['correo']) . "</p>";
    echo "<p><strong>Número de Teléfono:</strong> " . htmlspecialchars($data['telefono']) . "</p>";
    echo "<p><strong>Mensaje:</strong> " . nl2br(htmlspecialchars($data['mensaje'])) . "</p>";

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required value="<?=htmlspecialchars($form['nombre'] )?>"><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required value="<?=htmlspecialchars($form['correo'])?>"><br><br>

        <label for="telefono">Número de Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required value="<?=htmlspecialchars($form['telefono'])?>"><br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required value="<?=htmlspecialchars($form['mensaje'])?>"></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>


    <h2>Errores</h2>
    <ul>
        <?php if(!empty($errors)): ?>
            <?php foreach($errors as $error): ?>
                <li><?=htmlspecialchars($error)?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay errores.</li>
        <?php endif; ?>
    </ul>

</body>
</html>



<?php
include 'footer.php'
?>