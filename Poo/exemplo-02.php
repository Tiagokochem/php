<?php

        Class Carro(){

           private $modelo;
           private $motor;
           private $ano;

           public function getModelo(){
               return this->modelo;
           }

           public function setModelo($modelo){
               $this->modelo = $modelo;

           }

           public function getMotor():float{
               return this->modelo;
           }

           public function setMotor(){
               $this->modelo = $motor;
           }

           public function getAno():int{
               return this->ano;
           }

           public function setAno(){
               $this->ano = $ano;
           }
            
           public function exibe(){

                return array(){
                    "modelo"=>$this->getModelo(),
                    "motor"=>$this->getMotor(),
                    "ano"=>$this->getAno(),
                };


           }      


        }
  
    $gol = new Carro();
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2019");

    print_r($gol->exibir());
    var_dump($gol->exibir());


   ?>