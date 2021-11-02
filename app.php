<?php

function calcular($num1, $num2)
{
    return $num1 * $num2; 
}

echo $_POST['num1'] . ' x ' . $_POST['num2'] . ' es igual a: ' . calcular($_POST['num1'], $_POST['num2']);

/*
EJERCICIO 8: ¿Recuerdas tus clases de Geometría? 
Es momento de poner ese conocimiento a la práctica. 
El área de un triángulo se describe de la siguiente 
manera: A = (b * h) / 2 .
El reto del día de hoy es escribir un programa que 
tome la base y la altura como parámetros y calcule el 
área del triángulo. Bonus: El programa debe determinar 
si el triángulo es isósceles, equilátero o escaleno.

X2

*/

?>

