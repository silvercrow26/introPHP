<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Spiderman','Hulk','Ironman');
$clientes4 = [
    'nombre' => 'Ironman',
    'power' => 5000
];

//Empty revisa si un arreglo está vacío y regresa un boolean
var_dump(empty( $clientes ));
var_dump(empty( $clientes2 ));
var_dump(empty( $clientes3 )); 


//isset revisa si un arreglo está creado o una propiedad está definida
echo '<br>';
var_dump( isset($clientes4) ); 
var_dump( isset($clientes2) );

//Revisa si una propiedad de un arreglo asociativo existe
var_dump( isset($clientes4['nombre']) ); //true
var_dump( isset($clientes4['edad']) ); //false

include 'includes/footer.php';