<?php
include 'header.php';

$form = [
    'name' => '',
    'email' => '', 
    'phone' => '',
    'event_type' => '',
    'terms' => ''
];

$data = []; 
$errors = []; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filters = [
        'name' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[a-zA-Z\s]{2,50}$/']
        ],
        'email' => FILTER_VALIDATE_EMAIL,
        'phone' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^[0-9]{9,}$/']
        ],
        'event_type' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => ['regexp' => '/^(Presencial|Online)$/']
        ],
        'terms' => FILTER_VALIDATE_BOOLEAN
    ];

    $form = filter_input_array(INPUT_POST, $filters);

    if ($form['name'] === false || $form['name'] === null) {
        $errors[] = "El nombre es inválido (debe contener solo letras y entre 2 y 50 caracteres).";
    }

    if ($form['email'] === false) {
        $errors[] = "El correo electrónico no es válido.";
    }

    if ($form['phone'] === false || $form['phone'] === null) {
        $errors[] = "El teléfono debe contener al menos 9 dígitos y solo números.";
    }

    if ($form['event_type'] === false || $form['event_type'] === null) {
        $errors[] = "Debe seleccionar un tipo de evento válido (Presencial u Online).";
    }

    if (!$form['terms']) {
        $errors[] = "Debe aceptar los términos y condiciones.";
    }

    // Sanitizar datos
    $data['name'] = filter_var($form['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $data['email'] = filter_var($form['email'], FILTER_SANITIZE_EMAIL);
    $data['phone'] = filter_var($form['phone'], FILTER_SANITIZE_NUMBER_INT);
    $data['event_type'] = filter_var($form['event_type'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (empty($errors)) {
        echo "<h1>Registro exitoso</h1>";
        echo "<p><strong>Nombre:</strong> " . htmlspecialchars($data['name']) . "</p>";
        echo "<p><strong>Correo Electrónico:</strong> " . htmlspecialchars($data['email']) . "</p>";
        echo "<p><strong>Teléfono:</strong> " . htmlspecialchars($data['phone']) . "</p>";
        echo "<p><strong>Tipo de Evento:</strong> " . htmlspecialchars($data['event_type']) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Eventos de Buceo</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="" method="post">
        <label for="name">Nombre completo:</label><br>
        <input type="text" id="name" name="name" required value="<?= htmlspecialchars($form['name']) ?>"><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required value="<?= htmlspecialchars($form['email']) ?>"><br><br>

        <label for="phone">Teléfono de contacto:</label><br>
        <input type="text" id="phone" name="phone" required value="<?= htmlspecialchars($form['phone']) ?>"><br><br>

        <label for="event_type">Tipo de evento:</label><br>
        <select id="event_type" name="event_type" required>
            <option value="" <?= $form['event_type'] === '' ? 'selected' : '' ?>>Seleccione...</option>
            <option value="Presencial" <?= $form['event_type'] === 'Presencial' ? 'selected' : '' ?>>Presencial</option>
            <option value="Online" <?= $form['event_type'] === 'Online' ? 'selected' : '' ?>>Online</option>
        </select><br><br>

        <label>
            <input type="checkbox" id="terms" name="terms" value="1" <?= $form['terms'] ? 'checked' : '' ?>>
            Acepto los términos y condiciones
        </label><br><br>

        <input type="submit" value="Registrarse">
    </form>

    <h2>Errores</h2>
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

<?php
include 'footer.php';
?>
