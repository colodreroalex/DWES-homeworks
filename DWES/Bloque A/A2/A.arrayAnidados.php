<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicación</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>

    <h2 style="text-align: center;">Tabla de Multiplicación</h2>

    <table>
        <tr>
            <th>X</th>
            <?php for ($fila = 1; $fila <= 10; $fila++) { ?>
                <th><?= $fila ?></th>
            <?php } ?>
        </tr>

        <?php for ($fila = 1; $fila <= 10; $fila++) { ?>
            <tr>
                <th><?= $fila ?></th>
                <?php for ($celda = 1; $celda <= 10; $celda++) { ?>
                    <td><?= $fila * $celda ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

</body>

</html>
