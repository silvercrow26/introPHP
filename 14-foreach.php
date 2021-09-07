<?php include 'includes/header.php';

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
        'nombre' => 'Monitor MSI',
        'precio' => 350000,
        'disponible' => false
    ]
];

foreach( $productos as $producto ) { ?>
    
    <li>
        <p>Producto: <?php echo $producto['nombre'] ?></p>
        <p>Precio: <?php echo '$' . $producto['precio'] ?></p>
        <p><?php echo ($producto['disponible']) ? 
                                '<p>Disponible</p>':'<p>No Disponible</p>'?> </p>
    </li>

    <?php

    echo '<pre>';
    var_dump($producto);
    echo '</pre>';
}


include 'includes/footer.php';