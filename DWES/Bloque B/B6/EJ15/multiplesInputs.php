<?php
// Inicializamos las variables
$form = [
    'email' => '',
    'age' => '',
    'url' => '',
    'terms' => false
];

$data = []; // Resultado de los datos validados
$errors = []; // Array para almacenar errores

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Configuramos los filtros de validación
    $filters = [
        'email' => FILTER_VALIDATE_EMAIL, // Validar email
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 18,
                'max_range' => 65
            ]
        ], // Validar edad entre 18 y 65
        'url' => FILTER_VALIDATE_URL, // Validar URL
        'terms' => [
            'filter' => FILTER_VALIDATE_BOOLEAN,
            'flags' => FILTER_NULL_ON_FAILURE
        ] // Validar checkbox como booleano
    ];

    // Obtener los valores enviados mediante POST
    $form = filter_input_array(INPUT_POST);

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
        <input type="text" name="email" value="<?= htmlspecialchars($form['email'] ?? '') ?>"><br><br>

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
