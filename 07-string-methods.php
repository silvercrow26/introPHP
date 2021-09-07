<?php include 'includes/header.php';

$nombreCliente = 'Matías Vallejos Hidalgo';

//Extension de un string, toma en cuenta los espacios en blanco
echo strlen($nombreCliente);
var_dump($nombreCliente); //Datos de la variable.
echo '</br>';
//Eliminar espacios en blanco
$texto = trim($nombreCliente);

echo strlen($texto);
echo '</br>';

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);
echo '</br>';

//Convertirlo a minusculas
echo strtolower($nombreCliente);
echo '</br>';

$mail1 = 'maatias97@gmail.com';
$mail2 = 'lessxend@gmail.com';

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Matías', 'F' , $nombreCliente); //Busca la cadena de texto y la reemplaza por la otra;
echo '</br>';

// Revisar si un string existe o no y regresa la posicion
echo strpos($nombreCliente, 'Vallejos');
$tipoCLiente = 'Premium';

echo '</br>';
echo 'El Cliente '.$nombreCliente.' es '.$tipoCLiente;

echo '</br>';
echo "El Cliente {$nombreCliente} es {$tipoCLiente}"; //Funcionan con llaves 2bles


include 'includes/footer.php';