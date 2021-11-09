<?php

class Documento{
    private $numero;

    public function getNumero(){
        return this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
}

class CPF extends Documento{
    public function validar():bool{

        $numeroCPF = $this->getNumero();
        return true;
        //validação cpf

    }
}

$doc = new CPF();
$doc->setNumero("12312312-21");
$doc->validar();

echo </br>;

echo $doc->getNumero();


?>