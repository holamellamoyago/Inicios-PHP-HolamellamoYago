<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'ordenador'];





//Acceder a un elemento del array
echo $carrito[1];

//Anadir elemntos a un array
$carrito[3] = 'Nuevo producto';

//Anadir un elemento nuevo al fiunal
array_push($carrito , 'Auriculares');

//Anadir un elemento nuevo al inicio
array_unshift($carrito , 'Rejon inteligente');

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente1', 'Cliente2', 'Cliente3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

echo "<br>";
echo 'El cliente: ' . $clientes[3] . 'ha comprado un: ' . $carrito[2] ;

include 'includes/footer.php';