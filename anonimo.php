<?php

// funciones anonimas 

// $saludo = function ($name) 
// {
//     return "Hola... Bienvenido $name a PHP!"; 
// };

// echo $saludo('Juan Diaz'); 

// Ejemplo - Configurar un saludo dependiendo del idioma (2 variables)

// function greet(Closure $lang, $name) 
// {
//     return $lang($name);
// }

// $es = function ($name) 
// {
//     return "Hola $name!";
// };

// $en = function ($name) 
// {
//     return "Hello $name!";
// };

// echo greet($en, 'Pepito');

// detectar si el numero es par 


$par = function ($numero) 
{
    // code
    if ($numero % 2 == 0) 
    {
        return "El número $numero es Par!";
    } else 
    {
        return "El número $numero es Impar!";
    }
};

$menor = function ($numero) 
{
    if ($numero <= 10 )
    {
        return "El número $numero es menor o igual a 10!";
    }
}; 

echo $menor(9); 







// normal 

// function greet($name) 
// {
//     //proceso 
//     return "Hola, $name!";
// }

// echo greet('Johan Legarda');


?>