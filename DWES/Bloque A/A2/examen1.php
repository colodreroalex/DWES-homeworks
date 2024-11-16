<?php

$number = 7; 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen UD2 Ejercicio 1</title>
    <style>
        table {
 width: 50%;
 margin: auto;
 border-collapse: collapse;
 font-family: Arial, sans-serif;
 text-align: center;
}
/* Estilos para las celdas y bordes */
th, td {
 border: 1px solid #ddd;
 padding: 8px;
}
/* Color de fondo para el encabezado */
th {
 background-color: #f2f2f2;
 font-weight: bold;
}
/* Color alterno para filas */
tr:nth-child(even) {
 background-color: #f9f9f9;
}
/* Efecto de hover en las filas */
tr:hover {
 background-color: #e0e0e0;
}
/* Estilo de los símbolos */
td:nth-child(2),
td:nth-child(4) {
 font-weight: bold;
}

    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>a</th>
            <th>*</th>
            <th>b</th>
            <th> = </th>
            <th>a*b</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$number</td>";
            echo "<td>*</td>";
            echo "<td>$i</td>";
            echo "<td>=</td>";
            echo "<td>" . ($number * $i) . "</td>";
            echo "</tr>";
        }
        ?>
        </tr>
        
    
        
        
    </table>
</body>
</html>