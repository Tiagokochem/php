<?php

function ola(){

    $argumentos = func_get_args();

    return $argumentos;
    
};

var_dump(ola("Bom dia!", 10, 20, 30, 40, 50, 60));
foreach($argumentos as $arg => $indice){
    echo $indice. "<br>";
    echo $arg . "<br>";
} 

foreach ($variable as $key => $value) {
    # code...
}





?>