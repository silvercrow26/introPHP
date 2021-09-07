<?php include 'includes/header.php';

// While

$i = 0; // Inicializador
while($i < 10){
    
    echo $i . "<br>";
    $i++;
}
echo '<br>';


// Do While ejecuta el codigo almenos una vez y dsp revisa la condicion

$i = 0;
do {
    echo $i.'<br>';

    $i++;
} while ($i < 10);
echo '<br>';

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir Fizz Buzz
 */

// For Loop.
for ($i=0; $i <= 30; $i++) { 
    if($i % 3 === 0 && $i % 5 === 0 || $i % 15 === 0) { //Algoritmo que permite saber multiplos de 3
        echo $i.'- Fizz Buzz </br>';
    }else if($i % 5 === 0 ){
        echo $i.'- Buzz </br>';
    }else if($i % 3 === 0 ){
        echo $i,'- Fizz </br>';
    }
}

//For each
$comidas = ['Papas Fritas','Puré','Fideos con salsa','Asado','Empanadas'];

echo '<br/>';

foreach ($comidas as $comida => $value) {
    echo $value.'<br/>';
}


include 'includes/footer.php';