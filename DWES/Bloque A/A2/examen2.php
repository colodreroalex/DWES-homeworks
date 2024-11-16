<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen UD2 Ejercicio 2</title>
</head>

<body>


<?php
for ($i = 1; $i <= 3; $i++) {
    $rows = 5 * $i;
    $columns = 6 * $i;
    echo "<table border='1'>";
    for ($row = 1; $row <= $rows; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= $columns; $col++) {
            if ($row == 1 || $row == $rows || $col == 1 || $col == $columns) {
                echo "<td>($row, $col)</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr><br>";
}
?>





</body>

</html>