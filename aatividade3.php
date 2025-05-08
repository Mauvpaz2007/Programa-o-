<?php


class Produto{
public $nome;
public $preco;
public $qtd;


public function exibirPreco() {
    echo"Preço: " . $this->preco . ";<br>";
}


public function mostrarMediaPrecos($Produto1, $Produto2) {
    $media = ($Produto1->preco + $Produto2->preco) / 2;
    echo "A média entre os produtos é: " . $media . "<br>";
}
}

$Produto1 = new Produto();

$Produto1->nome = "PS5";
$Produto1->preco = 3800.00;
$Produto1->qtd = 3;

$Produto2 = new Produto();
$Produto2->nome = "XBOX SERIES X";
$Produto2->preco = 4000.00;
$Produto2->qtd = 2;

$Produto1->exibirPreco();
$Produto2->exibirPreco();
$Produto1->mostrarMediaPrecos($Produto1, $Produto2);
?>
