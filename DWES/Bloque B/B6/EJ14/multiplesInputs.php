<?php
include 'header.php';
// Inicializamos los valores de los campos

/*

Fatal error: Uncaught Error: Cannot use a scalar value as an array . 
Fallo que me dio al intentar hacer las validaciones como en la teoria

*/ 
$form = [
    'email' => '',
    'age' => '',
    'url' => '',
    'terms' => false
];

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
        ] 
    ];

    

    // Filtrar y validar los datos
    $form = filter_input_array(INPUT_POST, $filters);
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
    <form action="" method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= htmlspecialchars($form['email']) ?>"><br><br>

        <label for="age">Edad:</label>
        <input type="text" name="age" value="<?= htmlspecialchars($form['age']) ?>"><br><br>

        <label for="url">URL de un sitio web:</label>
        <input type="text" name="url" value="<?= htmlspecialchars($form['url']) ?>"><br><br>

        <label>
            <input type="checkbox" name="terms" value="1" <?= $form['terms'] ? 'checked' : '' ?>>
            Acepto los términos y condiciones
        </label><br><br>

        <input type="submit" value="Guardar">
    </form>

    <?php
        include 'footer.php';
    ?>

    <h2>Resultados:</h2>
    <pre><?php var_dump($form); ?></pre>

    <h2>Errores:</h2>
    <ul>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <?php if ($form['email'] === false): ?>
                <li>Email inválido.</li>
            <?php endif; ?>
            <?php if ($form['age'] === false): ?>
                <li>La edad debe estar entre 18 y 65 años.</li>
            <?php endif; ?>
            <?php if ($form['url'] === false): ?>
                <li>URL inválida.</li>
            <?php endif; ?>
            <?php if ($form['terms'] === null): ?>
                <li>Debe aceptar los términos y condiciones.</li>
            <?php endif; ?>
        <?php endif; ?>
    </ul>
</body>
</html>

