<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou";
    }

    public function parar() {
        echo "Parou";
    }
}

class Carro extends Veiculo {
    public function ligarLimpador() {
        echo "Limpador ligado";
    }
    public $tipoCombustìvel;
    public function mostrarCombustível() {
        echo "O tipo de combustível é: " . $this->tipoCombustìvel;
    }
}

class Moto extends Veiculo {
    public function darGrau() {
        echo "Deu grau!";
    }
    public function andar(){
        echo "Moto está em movimento";
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!";
    }
}

class CarroElétrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada!";
    }
}


// Exemplo de uso
$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->tipoCombustìvel = "Gasolina";
$carro->andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
$carro->parar();
echo "<br>";
$carro->mostrarCombustível();

echo "<hr>";

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->andar()  ;
echo "<br>";
$moto->parar();
echo "<br>";
$moto->darGrau();

echo "<hr>";

$caminhao = new Caminhao();
$caminhao->modelo = "Mercedes-Benz";
$caminhao->cor = "Cinza";
$caminhao->ano = 2020;
$caminhao->andar();
echo "<br>";
$caminhao->carregarCarga();

echo "<hr>";

// Carro 1
$carro =new Carro();
$carro->modelo = "Onix";
$carro->cor = "Branco";
$carro->ano = 2019;
$carro->andar();
$carro->tipoCombustìvel = "Álcool";
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
$carro->parar();
echo "<br>";
$carro->mostrarCombustível();

echo "<hr>";
//Carro 2
$carro2 = new Carro();
$carro2->modelo = "Fusca";
$carro2->cor = "Amarelo";
$carro2->ano = 1970;
$carro2->andar();
$carro2->tipoCombustìvel = "Gasolina";
echo "<br>";
$carro2->ligarLimpador();
echo "<br>";
$carro2->parar();
echo "<br>";
$carro2->mostrarCombustível();

echo "<hr>";

//Moto 1
$moto1 = new Moto();
$moto1->modelo = "Kawasaki Ninja";
$moto1->cor = "Verde";
$moto1->ano = 2021;
$moto1->andar();
echo "<br>";
$moto1->darGrau();
echo "<br>";
$moto1->parar();

echo "<hr>";
//Moto 2
$moto2 = new Moto();    
$moto2->modelo = "Yamaha MT-09";
$moto2->cor = "Preto";
$moto2->ano = 2020;
$moto2->andar();
echo "<br>";
$moto2->darGrau();
echo "<br>";
$moto2->parar();



echo "<hr>";

//Carro elétrico
$carroEletrico = new CarroElétrico();
$carroEletrico->modelo = "Tesla Model 3";
$carroEletrico->cor = "Prata";
$carroEletrico->ano = 2022;
$carroEletrico->andar();
echo "<br>";
$carroEletrico->ligarLimpador();
echo "<br>";
$carroEletrico->parar();
echo "<br>";
$carroEletrico->carregarBateria();
echo "<br>";
?>





