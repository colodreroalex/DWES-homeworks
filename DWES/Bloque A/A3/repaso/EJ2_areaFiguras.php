<?php 
function calculoFiguras($dimension1, $dimension2 = null, $figura = "cuadrado"){
    
    switch($figura){
        case "cuadrado":
            $area = $dimension1 * $dimension2; 
            echo "<p>El área del cuadrado es: $area</p>";
            break;
        case "triangulo":
            $area = ($dimension1 * $dimension2) / 2; 
            echo "<p>El área del triángulo es: $area</p>";
            break;
        case "circulo":
            $area = pi() * pow($dimension1, 2);
            echo "<p>El area del circulo es: $area</p>"; 
            break; 
        default:
            echo "<p>La figura no es válida</p>";
            break; 
    }
}

calculoFiguras(5,3,"triangulo");

?>
