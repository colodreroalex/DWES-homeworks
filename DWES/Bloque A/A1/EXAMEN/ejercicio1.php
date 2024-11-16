<?php

//Array de estudiantes
$estudiantes = [
    [
        'nombre' => 'Alex Garcia',
        'fecha_nac' => '14-03-2005',
        'residencia' => 'Madrid',
        'tlf' => '698997763',
        'email' => 'alex.garcia@example.com',
        'estado' => 'NO'
    ],
    ['nombre' => 'Maria Lopez', 'fecha_nac' => '20-05-2005', 'residencia' => 'Barcelona', 'tlf' => '612321147', 'email' => 'maria.lopez@example.com', 'estado' => 'SI'],
    ['nombre' => 'Juan Pérez', 'fecha_nac' => '08-11-2004', 'residencia' => 'Sevilla', 'tlf' => '677998844', 'email' => 'juan.perez@example.com', 'estado' => 'NO'],
    ['nombre' => 'Lucía Sánchez', 'fecha_nac' => '22-09-2005', 'residencia' => 'Valencia', 'tlf' => '664889977', 'email' => 'lucia.sanchez@example.com', 'estado' => 'SI'],
    ['nombre' => 'Carlos Martinez', 'fecha_nac' => '05-01-2005', 'residencia' => 'Zaragoza', 'tlf' => '618997755', 'email' => 'carlos.martinez@example.com', 'estado' => 'NO']
];

//Arrays con las notas
$calificacionesAlex = [
    ['Matematicas' => (6 + 7 + 8 + 6 + 7) / 5],
    ['Lengua' => (5 + 6 / 2) * 0.4 + (7 * 0.6)],
    ['Ingles' => (6 + 7 + 6 + 6) / 4],
    ['Tecnologia' => (0.8 * 8) + (0.2 * 7)]
];
$calificacionesMaria = [
    ['Matematicas' => (5 + 6 + 7 + 6 + 6) / 5],
    ['Lengua' => (5 + 6 / 2) * 0.4 + (7 * 0.6)],
    ['Ingles' => (6 + 6 + 5 + 6) / 4],
    ['Tecnologia' => (0.8 * 6) + (0.2 * 7)]
];
$calificacionesJuan = [
    ['Matematicas' => (7 + 6 + 8 + 7 + 7) / 5],
    ['Lengua' => (6 + 7 / 2) * 0.4 + (6 * 0.6)],
    ['Ingles' => (7 + 6 + 7 + 6) / 4],
    ['Tecnologia' => (0.8 * 8) + (0.2 * 6)]
];
$calificacionesLucia = [
    ['Matematicas' => (4 + 5 + 4 + 3 + 4) / 5],
    ['Lengua' => (5 + 5 / 2) * 0.4 + (6 * 0.6)],
    ['Ingles' => (4 + 4 + 5 + 4) / 4],
    ['Tecnologia' => (0.8 * 5) + (0.2 * 4)]
];
$calificacionesCarlos = [
    ['Matematicas' => (5 + 4 + 5 + 4 + 5) / 5],
    ['Lengua' => (4 + 4 / 2) * 0.4 + (5 * 0.6)],
    ['Ingles' => (5 + 4 + 4 + 4) / 4],
    ['Tecnologia' => (0.8 * 4) + (0.2 * 5)]
];



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
    <!-- MOSTRAMOS LOS DATOS DE ALUMNO 1 -->
    <h2><?= $estudiantes['0']['nombre'] ?> </h2>
    <h3> <?= $estudiantes['0']['fecha_nac'] ?>, <?= $estudiantes['0']['residencia'] ?>, <?= $estudiantes['0']['tlf'] ?>, <?= $estudiantes['0']['email'] ?>, <?= $estudiantes['0']['estado'] ?></h3>
    <h4> Matematicas -> <?= $calificacionesAlex['0']['Matematicas'] ?></h4>
    <h4> Lengua -> <?= $calificacionesAlex['1']['Lengua'] ?></h4>
    <h4> Ingles -> <?= $calificacionesAlex['2']['Ingles'] ?></h4>
    <h4> Tecnología -> <?= $calificacionesAlex['3']['Tecnologia'] ?></h4>
    <h5>APROBADO</h5>

    <!-- MOSTRAMOS LOS DATOS DE ALUMNO 2 -->
    <h2><?= $estudiantes['1']['nombre'] ?> </h2>
    <h3> <?= $estudiantes['1']['fecha_nac'] ?>, <?= $estudiantes['1']['residencia'] ?>, <?= $estudiantes['1']['tlf'] ?>, <?= $estudiantes['1']['email'] ?>, <?= $estudiantes['1']['estado'] ?></h3>
    <h4> Matematicas -> <?= $calificacionesMaria['0']['Matematicas'] ?></h4>
    <h4> Lengua -> <?= $calificacionesMaria['1']['Lengua'] ?></h4>
    <h4> Ingles -> <?= $calificacionesMaria['2']['Ingles'] ?></h4>
    <h4> Tecnologia -> <?= $calificacionesMaria['3']['Tecnologia'] ?></h4>
    <h5>APROBADO</h5>

    <!-- MOSTRAMOS LOS DATOS DE ALUMNO 3 -->
    <h2><?= $estudiantes['2']['nombre'] ?> </h2>
    <h3> <?= $estudiantes['2']['fecha_nac'] ?>, <?= $estudiantes['2']['residencia'] ?>, <?= $estudiantes['2']['tlf'] ?>, <?= $estudiantes['2']['email'] ?>, <?= $estudiantes['2']['estado'] ?></h3>
    <h4> Matematicas -> <?= $calificacionesJuan['0']['Matematicas'] ?></h4>
    <h4> Lengua -> <?= $calificacionesJuan['1']['Lengua'] ?></h4>
    <h4> Ingles -> <?= $calificacionesJuan['2']['Ingles'] ?></h4>
    <h4> Tecnologia -> <?= $calificacionesJuan['3']['Tecnologia'] ?></h4>
    <h5>APROBADO</h5>

    <!-- MOSTRAMOS LOS DATOS DE ALUMNO 4 -->
    <h2><?= $estudiantes['3']['nombre'] ?> </h2>
    <h3> <?= $estudiantes['3']['fecha_nac'] ?>, <?= $estudiantes['3']['residencia'] ?>, <?= $estudiantes['3']['tlf'] ?>, <?= $estudiantes['3']['email'] ?>, <?= $estudiantes['3']['estado'] ?></h3>
    <h4> Matematicas -> <?= $calificacionesLucia['0']['Matematicas'] ?></h4>
    <h4> Lengua -> <?= $calificacionesLucia['1']['Lengua'] ?></h4>
    <h4> Ingles -> <?= $calificacionesLucia['2']['Ingles'] ?></h4>
    <h4> Tecnologia -> <?= $calificacionesLucia['3']['Tecnologia'] ?></h4>
    <h5>SUSPENSA</h5>

    <!-- MOSTRAMOS LOS DATOS DE ALUMNO 5 -->
    <h2><?= $estudiantes['4']['nombre'] ?> </h2>
    <h3> <?= $estudiantes['4']['fecha_nac'] ?>, <?= $estudiantes['4']['residencia'] ?>, <?= $estudiantes['4']['tlf'] ?>, <?= $estudiantes['4']['email'] ?>, <?= $estudiantes['4']['estado'] ?></h3>
    <h4> Matematicas -> <?= $calificacionesCarlos['0']['Matematicas'] ?></h4>
    <h4> Lengua -> <?= $calificacionesCarlos['1']['Lengua'] ?></h4>
    <h4> Ingles -> <?= $calificacionesCarlos['2']['Ingles'] ?></h4>
    <h4> Tecnologia -> <?= $calificacionesCarlos['3']['Tecnologia'] ?></h4>
    <h5>SUSPENSO</h5>
</body>

</html>