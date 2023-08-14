
<?php
include 'includes/header.php';



function sumar(int $numero1  = 0 , float $numero2 = 0){
    echo $numero1 + $numero2;
}

sumar(10, 20.3);



include 'includes/footer.php';