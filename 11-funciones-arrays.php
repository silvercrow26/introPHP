<?php include 'includes/header.php';

//in_array busca elementos en un arreglo

$heroe = ['Ironman','Hulk','Thor'];
var_dump( in_array('Ironman', $heroe) );
echo '<br>';

//ordenar elementos de un array;

$numeros = array(12,3,54,1,34,5,3,7,6,3);
sort($numeros); // de menor a mayor;
rsort($numeros); // de mayor a menor;

echo '<pre>';
var_dump($numeros);
echo '</pre>';
echo '<br>';

echo '<pre>';
var_dump($numeros);
echo '</pre>';

$villanos = [
    'poder' => 153432,
    'habilidad' => 'Maestro del engaño',
    'nombre' => 'Loki',
];
echo '<pre>';
var_dump($villanos);
echo '</pre>';

asort($villanos); // Ordena por valores (Orden alfavetico)
arsort($villanos);// Ordena por valores (Z primero)
ksort($villanos); // Ordena por llaves (Orden alfavetico)
krsort($villanos);// Ordena por llaves (DE: Z - A)

echo '<pre>';
var_dump($villanos);
echo '</pre>';

include 'includes/footer.php';