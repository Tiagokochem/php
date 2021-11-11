<?php

$carro = new DelRey();
$carro->acelerar(80);


function incluirClasses($nomedaclasse){

    if(file_exists($nomedaclasse . "php")===true {
        require_once($nomedaclasse . "php");
    }
}


?>