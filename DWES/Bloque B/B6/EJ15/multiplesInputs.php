<?php
// Inicializamos las variables QUE SE VAN A MOSTRAR POR DEFECTO
$form['email'] = ''; 
$form['age'] = ''; 
$form['url'] = '';
$form['terms'] = '';  


$data = []; // Resultado de los datos validados
$errors = []; // Array para almacenar errores

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $filters['email'] = FILTER_VALIDATE_EMAIL;
    $filters['age']['filter'] = FILTER_VALIDATE_INT;
    $filters['age']['options']['min_range'] = 16; 
    $filters['age']['options']['max_range'] = 65;
    $filters['url'] = FILTER_VALIDATE_URL;
    $filters['terms']['filter'] = FILTER_VALIDATE_BOOLEAN; 
    $filters['terms']['flags'] = FILTER_NULL_ON_FAILURE; 


    // Obtener los valores enviados mediante POST
    $form = filter_input_array(INPUT_POST, $filters);

    // Validar los datos con los filtros
    $data = filter_var_array($form, $filters);

    // Verificar errores
    if ($data['email'] === false) {
        $errors[] = "El email es inválido.";
    }
    if ($data['age'] === false) {
        $errors[] = "La edad debe estar entre 18 y 65 años.";
    }
    if ($data['url'] === false) {
        $errors[] = "La URL proporcionada es inválida.";
    }
    if ($data['terms'] === null || $data['terms'] === false) {
        $errors[] = "Debe aceptar los términos y condiciones.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario</title>
</head>
<body>
    <h1>Validación de Formulario</h1>
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= htmlspecialchars($form['email'] ?? '') ?> "><br><br>

        <label for="age">Edad:</label>
        <input type="text" name="age" value="<?= htmlspecialchars($form['age'] ?? '') ?>"><br><br>

        <label for="url">URL de un sitio web:</label>
        <input type="text" name="url" value="<?= htmlspecialchars($form['url'] ?? '') ?>"><br><br>

        <label>
            <input type="checkbox" name="terms" value="1" <?= !empty($form['terms']) ? 'checked' : '' ?>>
            Acepto los términos y condiciones
        </label><br><br>

        <input type="submit" value="Guardar">
    </form>

    <h2>Resultados Validados:</h2>
    <pre><?php var_dump($data); ?></pre>

    <h2>Errores:</h2>
    <ul>
        <?php if (!empty($errors)): ?>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay errores.</li>
        <?php endif; ?>
    </ul>
</body>
</html>
