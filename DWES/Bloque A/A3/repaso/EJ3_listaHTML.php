<?php



function generaLista($tipoLista){

    $productosCompra = [
        ["Leche", 1.5],
        ["Pan", 0.75],
        ["Huevos", 3.25],
        ["Azúcar", 1.15],
        ["Café", 4.75]
    ]; 

    switch($tipoLista){
        case "ul": 
            echo "<ul>"; 
                for($i = 0; $i < count($productosCompra); $i++){
                    echo "<li>" . $productosCompra[$i][0] . " - " . $productosCompra[$i][1]; 
                }
            echo "</ul>";
        break;
        case "ol": 
            echo "<ol>"; 
            for($i = 0; $i < count($productosCompra); $i++){
                echo "<li>" . $productosCompra[$i][0] . " - " . $productosCompra[$i][1]; 
            } 
            echo "</ol>"; 
            break; 

    }
}

generaLista("ul"); 

?>
