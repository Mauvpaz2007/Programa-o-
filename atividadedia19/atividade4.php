<?php

class Imovel {
    private $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function setImovel($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getImovel() {
        return "Endereço: " . $this->endereco . ", Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }

    public function exibeDados() {
        echo "Endereço: " . $this->endereco . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}

class Novo extends Imovel {
    private $valorAdicional;

    public function __construct($endereco, $preco, $valorAdicional) {
        parent::__construct($endereco, $preco);
        $this->valorAdicional = $valorAdicional;
    }

    public function setValorAdicional($valorAdicional) {
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorAdicional() {
        return $this->valorAdicional;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Valor Adicional: R$ " . number_format($this->valorAdicional, 2, ',', '.') . "<br>";
        echo "Preço Total: R$ " . number_format($this->preco + $this->valorAdicional, 2, ',', '.') . "<br>";
    }
}

class Velho extends Imovel {
    private $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function exibeDados() {
        parent::exibeDados();
        echo "Desconto: R$ " . number_format($this->desconto, 2, ',', '.') . "<br>";
        echo "Preço Final: R$ " . number_format($this->preco - $this->desconto, 2, ',', '.') . "<br>";
    }
}

$novo = new Novo("Rua A, 123", 300000, 50000);
$novo->exibeDados();
echo "<hr>";
$velho = new Velho("Rua B, 456", 200000, 30000);
$velho->exibeDados();

?>
