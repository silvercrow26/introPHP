<?php 
declare(strict_types=1);
include 'includes/header.php';

# ? opcional...

function usuarioAutenticado(bool $autenticado): string|int{
    if ($autenticado) {
        return 'El usuario está autenticado';
    } else {
        return 20;
    }
}

    
$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';