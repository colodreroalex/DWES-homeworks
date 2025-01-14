<?php
    function tablaMultiplicar(int $numero){
        echo "<h2>Tabla de Multuplicar con el numero $numero</h2> ";
        echo "<table border='1'>"; 
        for ($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo "<td> $numero x $i = " . $numero * $i . "</td>"; 
            echo "</tr>";
        } 
    }


    tablaMultiplicar(5);
?>
