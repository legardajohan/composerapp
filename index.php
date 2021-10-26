<?php

require __DIR__ . '/vendor/autoload.php';

// Llamando a una funcion para MAYUSCULAS

//echo upper('hola mundo!');

// Llamando a una funcion para minusculas

//echo '<br>' . lower('HOLA MUNDO!');

// Funcion si es Par o Impar

//echo '<br>' . 'El numero 11 es: ' . mate(11);

// Ejercicio realice una funcion donde indique si 
// divisible entre 3 

// Nota: todas los estudiantes que quieran presentarlo 

// Uso de comillas 

// Este caracter es slash / y comillas sencillas '

//echo 'Este caracter es back slash \\ y comillas sencillas \'';

$name = 'Pedro';

// echo 'Mi nombre es: $name' . $name;
// echo "Mi nombre es: $name";

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum fugiat unde culpa, temporibus atque, possimus, obcaecati aperiam error corrupti iste fuga eos commodi iure cupiditate enim nisi. Odio, impedit vitae?";
//echo $text[4];

$resumen = substr($text, 0, 30);

echo "$resumen... [ver más] <br>";

// explode --> cadena de caracteres a un array

$courses = 'JavaScript, PHP, Laravel'; 

$aCourses = explode(', ', $courses); // array ('JavaScript', 'PHP', 'Laravel')

//echo $aCourses[1];
var_dump($aCourses);

// array a cadena de texto

$colors = ['green', 'red', 'black'];

$tColors = implode(' _ ', $colors);

echo '<br>' . $tColors;

// eliminar espacios en una cadena de texto

$course = "<h1>       Curso   de    PHP    </h2>";
echo trim($course);
 
// pegue un texto de 50 o 70 palabras y almacenelo en una variable, 
// conviertalo en array e imprima cada palabra en orden venrtical 
// de la posicion 0 a 10 array 

// Pasto es la ciudad sorpresa .... 

// Pasto 
// es 
// la 
// ciudad 
// sorpresa 
// ...
// ...



?>