<?php

function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse . "php") ===true){
        require_once($nomeClasse . "php");
    }
}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstrata" .DIRECTORY_SEPARATOR. $nomeClasse . "php")=== true){
        require_once("Abstrata" .DIRECTORY_SEPARATOR. $nomeClasse . "php");
    }
});

//function __autoload($nomeClasse){
 //   var_dump($nomeClasse);
    
//require_once("$nomeClasse.php");

spl_autoload_register("")

//}


$carro = new DelRey();
$carro->acelerar(80);

?>