<?php

// formatear textos 

$title = 'bienvenidos al curso de PHP';

//echo strtoupper($title); // mayusculas 
//echo strtolower($title); // minusculas 

echo $title . '<br>'; 
echo lcfirst($title) . '<br>';
echo ucfirst($title) . '<br>'; 

// reemplazar caracteres x otros
// pasto --> p4sto (a->4)

$city = 'Pasto';

$rCity = str_replace('a', '4', $city); 
$rTitle = str_replace(' ', '_', $title);

echo $rCity . '<br>';
echo $rTitle . '<br>'; 

// modificar (facturas)

$code = 123; 

echo str_pad($code, 10, '-', STR_PAD_BOTH) . '<br>'; // 123-----

// formatear texto para almacenar 

$text = '<h1> Hola PHP, bienvenido al año 2021 </h1>';
//echo strip_tags($text);
echo mb_strtoupper($text); // multibyte 
