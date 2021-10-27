<?php
   
$nome = "Tiago";

function nome(){

    global $nome;
    echo $nome;
}

function nome2(){
    echo $nome."nome2";
}

nome();

nome2();



?>