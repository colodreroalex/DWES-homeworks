<?php
$estudiantes = [
    [
        'nombre' => 'Alex',
        'fecha_nac' => '2000-01-01',
        'residencia' => 'Madrid',
        'tlf' => '123456789',
        'email' => 'alex@example.com',
        'estado' => 'Aprobado'
    ],
    [
        'nombre' => 'Maria',
        'fecha_nac' => '2001-02-02',
        'residencia' => 'Barcelona',
        'tlf' => '987654321',
        'email' => 'maria@example.com',
        'estado' => 'Aprobado'
    ],
    [
        'nombre' => 'Carlos',
        'fecha_nac' => '2002-03-03',
        'residencia' => 'Valencia',
        'tlf' => '456789123',
        'email' => 'carlos@example.com',
        'estado' => 'Aprobado'
    ]
];

$calificaciones = [
    'Alex' => [
        'Matematicas' => (4+5+4+5+4)/5,
        'Lengua' => (4+4/2)*0.4 + (5*0.6),
        'Ingles' => (5+4+4+4)/4,
        'Tecnologia' => (0.8*4)+(0.2*5)
    ],
    'Maria' => [
        'Matematicas' => (5+4+5+4+5)/5,
        'Lengua' => (4+4/2)*0.4 + (5*0.6),
        'Ingles' => (5+4+4+4)/4,
        'Tecnologia' => (0.8*4)+(0.2*5)
    ],
    'Carlos' => [
        'Matematicas' => (5+4+5+4+5)/5,
        'Lengua' => (4+4/2)*0.4 + (5*0.6),
        'Ingles' => (5+4+4+4)/4,
        'Tecnologia' => (0.8*4)+(0.2*5)
    ]
];

function calcularEstado($calificaciones) {
    $promedio = array_sum($calificaciones) / count($calificaciones);
    switch (true) {
        case $promedio >= 5:
            return 'Aprobado';
        default:
            return 'Reprobado';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <h1>CALIFICACIONES DE ALUMNOS</h1>
    <?php foreach ($estudiantes as $estudiante) { ?>
        <h2><?= $estudiante['nombre'] ?></h2>
        <h3><?= $estudiante['fecha_nac'] ?>, <?= $estudiante['residencia'] ?>, <?= $estudiante['tlf'] ?>, <?= $estudiante['email'] ?>, <?= $estudiante['estado'] ?></h3>
        <?php foreach ($calificaciones[$estudiante['nombre']] as $asignatura => $nota) { ?>
            <h4><?= $asignatura ?> -> <?= number_format($nota, 2) ?></h4>
        <?php } ?>
        <h5><?= calcularEstado($calificaciones[$estudiante['nombre']]) ?></h5>
    <?php } ?>

</body>
</html>