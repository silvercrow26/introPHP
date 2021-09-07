<?php include 'includes/header.php';

//Se accede a ellos por medio de una propiedad

$cliente = [
    'Nombre' => 'Matías',
    'Apellido' => 'Vallejos',
    'info' => [
        'tipo' => 'Premium',
        'disponible' => 2000
    ]
];

echo '<pre>';
var_dump($cliente);
echo '</pre>';

echo $cliente['Nombre'];
echo $cliente['info']['tipo'];

$cliente['codigo'] = 3423432; //Agrega una propiedad adicional

echo '<pre>';
var_dump($cliente);
echo '</pre>';



include 'includes/footer.php';