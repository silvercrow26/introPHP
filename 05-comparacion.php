<?php include 'includes/header.php';

$numero1 = 23;
$numero2 = 12;
$numero3 = 19;
$numero4 = 12;


var_dump($numero1 > $numero2); //Retorna un bool
echo '<br/>';

var_dump($numero1 < $numero2); //Retorna un bool
echo '<br/>';

var_dump($numero1 >= $numero2); //Retorna un bool
echo '<br/>';

var_dump($numero1 <= $numero2); //Retorna un bool
echo '<br/>';

var_dump($numero1 == $numero2); //Revisa el valor, 
echo '<br/>';

var_dump($numero1 === $numero2); //Revisa el valor y el tipo de dato
echo '<br/>';

//Si 1 es menor que 2 retorna -1 | 0 si es igual | 1 si el de la izquierda es mayor al de la derecha.
var_dump($numero1 <=> $numero2); 
echo '<br/>';


include 'includes/footer.php';