<?php 

class Livro {
private string $titulo;
private string $autor;
private bool $disponivel;

public function __construct(string $titulo, string $autor) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->disponivel = true; 
}


public function emprestar():void{
    if($this->disponivel){
        $this->disponivel= false;
        echo "Livro '{$this->titulo}' emprestado com sucesso.";
    } else {
        echo "Livro '{$this->titulo}' não está disponível para empréstimo.";
    }


}}
