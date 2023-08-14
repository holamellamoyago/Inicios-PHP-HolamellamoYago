<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'Informacion' => [
        'tipo' => 'premium',
        'disponible' => 200
    ]
];

echo "<pre>";
var_dump($cliente['Informacion']);
echo "</pre>";

//echo $cliente['Informacion']['tipo'];

$cliente['codigo'] = 20023232;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


$bebidas = [
    'Cafe' => [
        'solo' => 'Cafe Solo',
        'con leche' => 'Bonbon' , 'Manchado'
    ],
    'Refrescos' => 'Cocacola' , 'Nestea',
    'Infusiones' => 'Te verde' , 'Tila'
];



var_dump($bebidas['Cafe']['con leche']);


include 'includes/footer.php';