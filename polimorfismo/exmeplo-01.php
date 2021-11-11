<?php
     abstract class Animal {

        public function falar(){
            return "Som";
        }

        public function mover(){
            return "anda";
        }
    }


class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{
    public function voar(){
        echo "voou";
    }

    public function falar(){
        return "canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();//usa o método da classe pai
    }
}

echo $pluto->falar(). "<br/>";
echo $pluto->mover(). "<br/>";
echo "----------------------------<br/>";

$garfield = new Gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "===================================<br/>";
$ave = new Passaro();
$ave->voar();
echo $ave->falar(). "<br/>";
echo $ave->mover() . "<br/>";

?>