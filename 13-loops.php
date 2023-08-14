<?php include 'includes/header.php';

//While

$i = 0; // Inicializador

while( $i < 10):
    echo $i . "<br>";

    $i++;
endwhile;


// Do While
$i = 0; 

// do {
//     echo $i . "<br>";
//     $i++;
// } while($i < 10);

// //For LOOP.
// for($i = 0; $i <100; $i++){
//     if($i % 5 === 0 && $i %3 ===0){
//         echo $i . 'Fizz BUZZ <br>';
//     }
//     else if($i % 3 === 0){
//         echo  $i . 'Fizz <br>';
//     }
//     else if($i % 5 === 0){
//         echo $i . "Buzz <br>";
//     } else{
//         echo $i ."<br>";
//     }
// };



//For each 

$clientes = array( 'Pedro' , 'Juan' , 'Karen');

foreach($clientes as $cliente):
    echo $cliente . "<br>";
endforeach;

$cliente = [
    'nombre' => 'juan',
    'saldo' => 200,
    'tipo' => 'premium'
];

foreach($cliente as $key => $valor):
    echo $key . "-" . $valor . "<br>";
endforeach;








include 'includes/footer.php';