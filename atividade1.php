<?php

class Produto {
    public $nome;
    public $preco;
    public $qtd;

    public function exibirInformacoes() {
        echo"Nome: " . $this->nome . " Preço: " . $this->preco . ", Quantidade: " . $this->qtd . ".<br>";

    
    
    
    }
}

$Produto1 = new Produto();

$Produto1->nome = "PS5";
$Produto1->preco = 3400.00;
$Produto1->qtd = 1;

$Produto1->exibirInformacoes();

?>