<?php

// a. Declaración de Variables:
// Define al menos cinco variables de diferentes tipos de datos (integer, float, string, boolean, array).
$entero = 10;
$flotante = 20.5;
$cadena = "Hola, mundo";
$booleano = true;
$arreglo = array(1, 2, 3, 4, 5);

// Asigna valores a estas variables (hecho en la declaración).

// b. Operaciones Aritméticas:
// Realiza al menos dos operaciones aritméticas con las variables numéricas que has creado.
$suma = $entero + $flotante;
$producto = $entero * $flotante;

// Muestra el resultado usando la función `echo`.
echo "La suma del entero y el flotante es: " . $suma . "<br>";
echo "El producto del entero y el flotante es: " . $producto . "<br>";

// c. Manipulación de Cadenas:
// Crea una variable de tipo cadena y realiza las siguientes acciones:
$otraCadena = "Mi nombre es Fabian <br>";

// Concatenación de dos cadenas.
$cadenaConcatenada = $cadena . " " . $otraCadena;
echo $cadenaConcatenada;

// Obtén la longitud de la cadena.
$longitudCadena = strlen($cadena);
echo "La longitud de la primera cadena es: " . $longitudCadena . "<br>";

// d. Uso de Condicionales:
// Crea una estructura de control condicional que verifique el valor de una variable booleana y muestre un mensaje diferente según sea `true` o `false`.
if ($booleano) {
    echo "La variable booleana es verdadera<br>";
} else {
    echo "La variable booleana es falsa<br>";
}


// e. Creación de un Array:
// Define un arreglo con al menos cinco elementos.
// Muestra un elemento específico del arreglo utilizando su índice.
echo "El tercer elemento del arreglo es: " . $arreglo[2] . "<br>";
?>


