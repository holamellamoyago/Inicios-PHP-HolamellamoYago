<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

// if($autenticado){
//     if($admin && $admin){
//         echo 'El usuario es administrador';
//     } else {
//         echo 'No admin';
//     }
// }else{
//     echo 'Usuario no autenticado , inicia sesion';
// };

// if ($autenticado && $admin){
//     echo 'Respuesta de que si es admin';
// } else {
//     echo 'No esta registrado';
// };

// If aninados
$clientes = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'premium'
    ]
];


if( !empty($clientes)   ) {
    echo 'El arreglo NO esta vacio';
    echo "<br>";

    if ($clientes['saldo'] > 0 ) {
        echo 'El saldo del ciente esta disponible';
    } else {
        echo 'No hay saldo';
    }
} else {
    echo 'Respuesta else';
}
echo "<br>";


//Else if
if ($clientes['saldo'] > 0){
    echo 'El cliente tiene saldo'; 
} else if ($clientes['informacion']['tipo'] === 'premium'){
    echo 'El cliente es premium';
} else{ 
    echo 'No tiene saldo / no es premium';
}

echo "<br>";




//Switch
$tecnologia = 'JS';

switch($tecnologia) {
    case 'PHP':
        echo "PHP , un excelente lenguaje";
        break;

    case 'JS':
        echo 'Genial el lenguiaje de la web';
        break;
    case 'HTML':
        echo 'Aprendiendo WEB';

    default:
    echo 'Algun lenguaje que no se cual es';
    break;
}

include 'includes/footer.php';