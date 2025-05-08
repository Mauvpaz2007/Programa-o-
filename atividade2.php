<?php

class Produto {

    public $nome;
    public $preco;
    public $qtd;

    
    
    public function exibirInformacoes() {
        echo"Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->quantidade . ".<br>";
    }
}

$Produto1 = new Produto();

$Produto1->nome = "Game Boy";
$Produto1->preco = 400.00;
$Produto1->qtd = 2;

$Produto2 = new Produto();
$Produto2->nome = "PSP";
$Produto2->preco = 350.00;
$Produto2->qtd = 5;

$Produto1->exibirInformacoes();
$Produto2->exibirInformacoes();
?>