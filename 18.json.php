<?php include 'includes/header.php';


$productos = [
    [
        'nombre' => 'tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo', 
        'precio' => 200,
        'disponible' => false
    ]

];

echo '<pre>';
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
$json_array = json_decode($json);


var_dump($json_array);
var_dump($json);


echo "<pre>";





include 'includes/footer.php';