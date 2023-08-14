<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro' , 'Juan' , 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty revisa si un array esta vacio
Echo 'Funcion Empty: ';
var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($clientes2));
echo "<br>";

// Isset  - Revisar si un arreglo esta creado o una propiedad esta definida
Echo 'Funcion Isset: '; 
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

// Isset - premite revisar si una propiedad de un array asociativo existe
var_dump(isset($cliente['nombre']));
var_dump(isset($clientes3[100]));


include 'includes/footer.php';