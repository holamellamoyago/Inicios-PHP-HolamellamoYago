<?php include 'includes/header.php';

$nombreCliente = "Yago    Otero";

// Conocer extension de un String 
echo strlen ($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo $texto;
echo strlen ($texto);

//Convertir a mayusculas
echo strtoupper($texto);

//Converir en minusculas
echo strtolower($texto);

$mail1 = 'correo@correo.com';
$mail2 = 'Correo@correo.com';

var_dump(strtolower($mail1) === strtolower($mail2));

//Remplaza letras
echo str_replace('Yago', 'J', $nombreCliente);

//Revisar si un string sxiste o no
echo strpos($nombreCliente, 'Otero');

echo '<br>';
$tipoCliente = 'premium';

echo 'El cliente' .$nombreCliente . ' es ' .$tipoCliente;

echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';