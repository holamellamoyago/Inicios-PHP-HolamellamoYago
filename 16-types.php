<?php 
declare(strict_types = 1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string|int{
    if($autenticado){
        return 'El usuario esta autenticado' ;
    }else {
        return 20;
    };
};

$usuario = usuarioAutenticado(true);

echo $usuario;


include 'includes/footer.php';