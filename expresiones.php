<?php

// #EXPRESIONES REGULARES
// /*
// /:  CONTENEDOR
// ^: INICIO
// $: FINAL
// -: RANGO
// []: PATRÓN 
// {}: CONDICIÓN


$password = '123456'; // password

//echo preg_match('/^[0-9]{6,9}$/', $password);

echo preg_match('/^[a-z]{6,8}$/', $password); // true 

echo "<br> <h1>'/^[a-z]{6,8}$/'</h1>";



// almacene en una variabla el nombre de usuario y en otra
// la constraseña, verifique que la contraseña tenga las 
// siguientes caracteristicas: a-z y 0-9 ; caracteres 6 a 9
// si esta correcto imprima pantalla su contraseña es valida
// o contraseña invalida. Adicionalmente que el nombre del 
// usuario se imprima en pantalla con primera letra en mayuscula 
// y las demas en minuscula con un mensaje de bienvenida. 