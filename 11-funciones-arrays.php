<?php include 'includes/header.php';

// in_array - Buscar elements en un arreglo 

$carrito = ['Tablet', 'Ordenador', 'Telefono'];

var_dump(in_array('Ordenador', $carrito));
var_dump(in_array('Auriculares', $carrito));

//Ordenar elementos d eun arreglo 
$numeros = array(1,3,7,4,9,45);
sort ($numeros); // De menor a mayor
rsort($numeros); // De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // Ordena por valores

echo "<pre>";
var_dump($cliente);
echo "</pre>";

arsort($cliente); // Ordena por valores al reves Za A 

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente); //Ordena por llaves (Orden alfabetico)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

krsort($cliente); //Ordena por llaves pero al reves Z a A (Orden alfabetico)

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';