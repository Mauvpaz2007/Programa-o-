<?php

class Animal {
    protected $nome;
    protected $raca;

    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function setAnimal($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function getAnimal() {
        return $this->nome . ", " . $this->raca;
    }

    public function exibeDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Raça: " . $this->raca . "<br>";
    }

    public function caminha() {
        echo $this->nome . " está caminhando.<br>";
    }
}

class Cachorro extends Animal {
    public function __construct($nome, $raca) {
        parent::__construct($nome, $raca);
    }

    public function late() {
        echo "O cachorro está latindo.<br>";
    }
}

class Gato extends Animal {
    public function mia() {
        echo "O gato está miando.<br>";
    }
}

$Cachorro = new Cachorro("Rex", "Labrador");
$Cachorro->exibeDados();
$Cachorro->caminha();
$Cachorro->late();
echo "<hr>";

$Gato = new Gato("Mia", "Siamês");
$Gato->exibeDados();
$Gato->caminha();
$Gato->mia();
echo "<br><hr><br>";


class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function setPessoa($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getPessoa() {
        return $this->nome . ", " . $this->idade;
    }

    public function exibeDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Idade: " . $this->idade . "<br>";
    }
}

class Rica extends Pessoa {
    private $dinheiro;

    public function fazCompras() {
        echo $this->nome . " está fazendo compras.<br>";
    }
}

class Pobre extends Pessoa {
    private $trabalho;

    public function trabalha() {
        echo $this->nome . " está trabalhando.<br>";
    }
}

class Miseravel extends Pessoa {
    public function mendiga() {
        echo $this->nome . " está mendigando.<br>";
    }
}

$Rica = new Rica("João", 30);
$Rica->exibeDados();
$Rica->fazCompras();
echo "<hr>";

$Pobre = new Pobre("Maria", 25);
$Pobre->exibeDados();
$Pobre->trabalha();
echo "<hr>";

$Miseravel = new Miseravel("José", 40);
$Miseravel->exibeDados();
$Miseravel->mendiga();

?>
<br><hr><br>