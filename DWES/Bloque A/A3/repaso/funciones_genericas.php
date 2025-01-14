<?php
# 1. Escriba una función lógica que reciba un carácter y determine si este es un dígito entre ‘0’ a ‘9’.
function digito($digito)
{
    // La función ord() devuelve el ascii de un carácter
    // El 0 es el 48 y el 9 el 58
    if (ord($digito) > 47 && ord($digito) <= 58)
        return true;
    else
        return false;
}

//2. Escriba una función que reciba una cadena de caracteres y devuelva su longitud.
function logitud_cadena($cadena)
{
    // la función strlen () nos dice longitud cadena
    return strlen($cadena);
}

//3. Escriba una función que dado dos números enteros a y b, realice la operación de potencia ab.
function potencia($base, $exponente)
{
    // La función pow calcula la potencia de un numero base, elevado a un exponente
    return  pow($base, $exponente);
}

//4. Escriba una función lógica que reciba un carácter y retorne si este es una vocal.
function vocales($cadena)
{
    // La función strtoupper convierte a mayúsculas
    // La función strpos encuentra la posición del segundo parámetro detro dentro del primero
    $cadena = strtoupper($cadena);
    $temp = strpos("AEIOU", $cadena);
    if ($temp == "")
        return false;  // No lo encontró
    else if ($temp >= 0)
        return true;   // Encontro el carácter

}

//5. Escriba una función que permita verificar si un número n es par o impar.
function par_impar($numero)
{
    if (($numero % 2) == 1)
        return true;
    else
        false;
}

//6. Escriba una función que reciba como parámetro una cadena cad y una variable ch de tipo char. La función devolverá la posición de la primera ocurrencia de ch en card.
function concurrencia($cadena, $caracter)
{
    $temp = strpos($cadena, $caracter);
    return $temp;
}

//7. Escriba una función que reciba una letra y devuelva la correspondiente en mayúsculas (usar función de se que transforma una minúscula en mayúscula). Debe validarse si el carácter recibido no es una letra mayúscula, en cuyo caso se devuelve el mismo carácter.
function mayusculas($cadena)
{
    // La función strtoupper convierte a mayúsculas
    return strtoupper($cadena);
}

//8. Escriba una función que reciba una cadena cad y devuelva los caracteres de cad en mayúsculas.
// Ya la hicimos en el 7

//9. Escriba una rutina que permita concatenar dos cadenas de caracteres. Concatenar significa unir dos cadenas. Ejemplo: cadena1=”Hola”, cadena2=” mundo”, cadenafinal=”Hola mundo”. La cadena final debe ser retornada por la función y recibida como parámetro (por referencia).
function UnirCadenas($cadena1, $cadena2)
{
    return $cadena1 . $cadena2;
}

//10. Realizar una función que retorne el cuadrado de un número.
function cuadrado($numero)
{
    return $numero * $numero;
}


