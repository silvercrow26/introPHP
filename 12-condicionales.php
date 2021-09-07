<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

// || que se cumpla una o la otra, && deben cumplirse ambas
if($autenticado){
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario no autenticado, inicia sesion';
};

echo '<br>';
//If anidados...

$cliente = [
    'nombre' => 'Matías',
    'apellido' => 'Vallejos',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

echo '<br>';

if( !empty($cliente) ) { // !empty | Distinto de vacío
    echo 'El arreglo de cliente no está vacío.';
    if($cliente['saldo'] > 0 ) {
        echo 'El cliente tiene saldo disponible.';
    };
} else {
    echo 'El arreglo de cliente está vacío.';
};

//Else if

if($cliente['saldo'] > 0){
    echo 'El cliente tiene saldo';
} else if($cliente['informacion']['tipo'] === 'Premium') {
    echo 'El cliente es Premium';
} else {
    echo 'No hay cliente definido o no tienee saldo o no es premium';
};

echo '<br>';
//Switch

$tecnologia = 'JavaScript';

switch ($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje!';
        break;
    case 'JavaScript':
        echo 'JavaScript, el lenguaje de la web';
        break;
    case 'HTML':
        echo 'Mmmmhhh...';
        break;
    default:
        echo 'No cacho hrmnito';
}

include 'includes/footer.php';