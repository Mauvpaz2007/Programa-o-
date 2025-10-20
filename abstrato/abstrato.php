<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     abstract class Veiculo{
        protected $modelo;
        protected $ano;
        abstract public function mover(){

        } 
     }
     class Carro extends Veiculo{
        public function mover(){
            echo "acelerando...<br>";
        }
     }
     class Bicileta extends Veiculo{
         public function mover(){
            echo "pedalando...<br>";
     }
    }
$carro1 = new Carro ();
$carro1->modelo ="Fiat";
$carro1->ano ="2023";
$carro1->mover();


$bicicleta1 = new Bicicleta():
$bicicleta1 ->modelo="Absolute";
$bicicleta1->ano ="2020";
$bicicleta1->mover();


  ?>
</body>
</html>