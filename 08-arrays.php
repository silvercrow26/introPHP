<?php include 'includes/header.php';


//Los arrays son los mas importantes dentro de PHP

//Arrays Index

$carrito = ['Tablet','iPhone 11','Televisión','PC','Nintendo Switch'];
$carrito2 = array();

//Acceder a un elemento del array
echo $carrito[1];

//Agregar nuevo elemento en el indice 3 del arreglo
$carrito[5] = 'Nuevo producto';

//Util para ver los contenidos de un array
echo '<pre>';
var_dump($carrito);
echo '</pre>';

//Agregar elemento al final
array_push($carrito, 'Audifonos');
array_unshift($carrito, 'Smartwatch');



include 'includes/footer.php';