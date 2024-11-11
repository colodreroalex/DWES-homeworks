<?php

$horario = [
    ['Lunes' => ['DIW', 'DIW', 'EIE', 'EIE', 'DWEC', 'DWEC']],
    ['Martes' => ['DAW', 'DWES', 'DWES', 'DWEC', 'DWEC', 'HLC']],
    ['Miercoles' => ['DWES', 'DWES', 'DWEC', 'DWEC', 'HLC', 'DAW']],
    ['Jueves' => ['DWES', 'DWES', 'DIW', 'DIW', 'EIE', 'EIE']],
    ['Viernes' => ['DWES', 'DWES', 'DIW', 'DIW', 'DAW', 'HLC']]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>¨
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <table>
        <tr>
            <th>HORA</th>
            <th>LUNES</th>
            <th>MARTES</th>
            <th>MIERCOLES</th>
            <th>JUEVES</th>
            <th>VIERNES</th>
        </tr>

        <tr>
            <th>1ª Hora</th>
            <th> <?= $horario[0]['Lunes'][0] ?> </th>
            <th><?= $horario[1]['Martes'][0] ?> </th>
            <th><?= $horario[2]['Miercoles'][0] ?> </th>
            <th><?= $horario[3]['Jueves'][0] ?> </th>
            <th><?= $horario[4]['Viernes'][0] ?> </th>
        </tr>
        <tr>
            <th>2ª Hora</th>
            <th> <?= $horario[0]['Lunes'][1] ?> </th>
            <th><?= $horario[1]['Martes'][1] ?> </th>
            <th><?= $horario[2]['Miercoles'][1] ?> </th>
            <th><?= $horario[3]['Jueves'][1] ?> </th>
            <th><?= $horario[4]['Viernes'][1] ?> </th>
        </tr>
        <th>3ª Hora</th>
        <th> <?= $horario[0]['Lunes'][2] ?> </th>
        <th><?= $horario[1]['Martes'][2] ?> </th>
        <th><?= $horario[2]['Miercoles'][2] ?> </th>
        <th><?= $horario[3]['Jueves'][2] ?> </th>
        <th><?= $horario[4]['Viernes'][2] ?> </th>
        </tr>
        <tr>
            <th>RECREO</th>
            <th colspan="5">RECREO</th>
        </tr>
        <th>4ª Hora</th>
        <th> <?= $horario[0]['Lunes'][3] ?> </th>
        <th><?= $horario[1]['Martes'][3] ?> </th>
        <th><?= $horario[2]['Miercoles'][3] ?> </th>
        <th><?= $horario[3]['Jueves'][3] ?> </th>
        <th><?= $horario[4]['Viernes'][3] ?> </th>
        </tr>
        <th>5ª Hora</th>
        <th> <?= $horario[0]['Lunes'][4] ?> </th>
        <th><?= $horario[1]['Martes'][4] ?> </th>
        <th><?= $horario[2]['Miercoles'][4] ?> </th>
        <th><?= $horario[3]['Jueves'][4] ?> </th>
        <th><?= $horario[4]['Viernes'][4] ?> </th>
        </tr>
        <th>6ª Hora</th>
        <th> <?= $horario[0]['Lunes'][5] ?> </th>
        <th><?= $horario[1]['Martes'][5] ?> </th>
        <th><?= $horario[2]['Miercoles'][5] ?> </th>
        <th><?= $horario[3]['Jueves'][5] ?> </th>
        <th><?= $horario[4]['Viernes'][5] ?> </th>
        </tr>




    </table>
</body>

</html>