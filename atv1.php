<?php
class Livro {
    private $titulo;
    private $autor;
    private $anoDePublicacao;
    private $disponivel;
    private $leitorAtual; 
    public function __construct($titulo, $autor, $anoDePublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoDePublicacao = $anoDePublicacao;
        $this->disponivel = true; 
        $this->leitorAtual = null; 
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAutor() {
        return $this->autor;
    }
    public function getAnoDePublicacao() {
        return $this->anoDePublicacao;
    }
    public function isDisponivel() {
        return $this->disponivel;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
     public function setAutor($autor) {
        $this->autor = $autor;
    }
    public function setAnoDePublicacao($anoDePublicacao) {
        $this->anoDePublicacao = $anoDePublicacao;
    }
    
    public function emprestar(string $nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro '" . $this->titulo . "' emprestado para " . $nomeLeitor . " com sucesso.<br>";
        } else {
            echo "Livro '" . $this->titulo . "' não está disponível para empréstimo.<br>";
        }
    }
    public function devolver() {
        if (!$this->disponivel) {
            echo "Livro '" . $this->titulo . "' devolvido por " . $this->leitorAtual . " com sucesso.<br>";
            $this->disponivel = true;
            $this->leitorAtual = null; 
        } else {
            echo "Este livro já está disponível.<br>";
        }
    }
    public function estaDisponivel() {
        if ($this->disponivel) {
            return "O livro '" . $this->titulo . "' está disponível para empréstimo.<br>";
        } else {
            return "O livro '" . $this->titulo . "' não está disponível para empréstimo.<br>";
        }
    }
    public function quemPegou() { 
        if ($this->leitorAtual) {
            return "O livro '" . $this->titulo . "' está emprestado para " . $this->leitorAtual . ".<br>";
        } else {
            return "O livro '" . $this->titulo . "' não está emprestado no momento.<br>";
        }
    }
    public function exibirInformacoes() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Ano de Publicação: " . $this->anoDePublicacao . "<br>";
        echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br>";
        if ($this->leitorAtual) {
            echo "Emprestado para: " . $this->leitorAtual . "<br>";
        }
    }
}

class Leitor {
    private $nome;
    private $email;
    private $telefone;
    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getTelefone() {
        return $this->telefone;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function exibirLeitor() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Telefone: " . $this->telefone . "<br>";
    }
}

class Biblioteca {
    public $nomeBiblioteca;
    private $livros = []; 
    private $leitores = []; 
    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }
    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }
    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }
    public function listarLivros() {
        echo "<h3>Livros na Biblioteca " . $this->nomeBiblioteca . ":</h3>";
        if (empty($this->livros)) {
            echo "Nenhum livro cadastrado.<br>";
            return;
        }
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
            echo "<br>";
        }
    }
    public function listarLeitores() {
        echo "<h3>Leitores da Biblioteca " . $this->nomeBiblioteca . ":</h3>";
        if (empty($this->leitores)) {
            echo "Nenhum leitor cadastrado.<br>";
            return;
        }
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
            echo "<br>";
        }
    }
}
        $biblioteca = new Biblioteca("Biblioteca do Maurício");
        $livro1 = new Livro("Dom Casmurro", "Machado de Assis", 1899);
        $livro2 = new Livro("O Guarani", "José de Alencar", 1857);  
        $leitor1 = new Leitor("João Silva", "josilva@gmail.com", "1234-5678");
        $leitor2 = new Leitor("Maria Oliveira", "oliveiram@gmail.com", "8765-4321");
        $biblioteca->adicionarLivro($livro1);   
        $biblioteca->adicionarLivro($livro2);
        $biblioteca->adicionarLeitor($leitor1);
        $biblioteca->adicionarLeitor($leitor2);
        $biblioteca->listarLivros();
        $biblioteca->listarLeitores();

        echo "<h3>Simulação de Empréstimo e Devolução:</h3>";
echo $livro1->estaDisponivel();
$livro1->emprestar($leitor1->getNome());
echo $livro1->estaDisponivel();
echo $livro1->quemPegou();
$livro1->devolver();
echo $livro1->estaDisponivel();
echo $livro1->quemPegou();
    

?>

