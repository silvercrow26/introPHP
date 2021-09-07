<?php include 'includes/header.php';
#Comunicar mi app con otra plataforma por ej js, bluejj tiene que hacerce la conexion por el json.

$productos = [
    [    
        'nombre' => 'Samsung S8',
        'precio' => 450000,
        'disponible' => true
    ],
    [    
        'nombre' => 'Tablet',
        'precio' => 120000,
        'disponible' => true
    ],
    [    
        'nombre' => 'Monitor MSÍ',
        'precio' => 350000,
        'disponible' => false
    ]
];

echo '<pre>';
var_dump($productos);
echo '</pre>';

# Encode convierte arreglos a string 
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); # Constante para convertir los acentos

# Decode convierte el string json a array.
$json_array = json_decode($json);


echo '<pre>';
var_dump($json); # Este string lo pueden leer otras tecnologias.
var_dump($json_array);
echo '</pre>';


include 'includes/footer.php';