<?php

//sentencia switch
$i=1;

switch($i)
{
    case 1: echo "Hola mundo <br>";
            break;
    case 2: echo "soy 2 <br>";
            break;
    case 3: echo "doy el 3 <br>";
            break;
    
    default: "Soy del valor por default <br>";
    break;
}

echo "////////////////////////// <br>";
$fruta="mango";
switch($fruta)
{
    case 'a': echo "Soy una a <br>";
            break;
    case "manzana": echo "La fruta es un manzana <br>";
            break;
    case "mango": echo "La fruta es un mango <br>";
            break;
    case 'pera': echo "La fruta es una pera <br>";
            break;
    default: "No se encontro la fruta <br>";
            break;
}

echo "///////////////////////// <br>";
$dato=1.2;
switch($dato)
{
    case 'a': echo "Es una a";
            break;
    case 1: echo "es el numero 1";
            break;
    case 1.2: echo "Es un numero flotante";
            break;
    case "cadena": echo "Esto es un string";
            break;
    default: echo "Prueba otro dato";
            break;
            

}
?>