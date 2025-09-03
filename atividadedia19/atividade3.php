<?php

class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function imprimeValor() {
        echo "Valor do ingresso: R$ " . number_format($this->valor, 2, ',', '.') . "<br>";
    }
}

class IngressoVIP extends Ingresso {
    protected $valorAdicional;

    public function __construct($valor, $valorAdicional) {
        parent::__construct($valor);
        $this->valorAdicional = $valorAdicional;
    }

    public function setValorAdicional($valorAdicional) {
        $this->valorAdicional = $valorAdicional;
    }

    public function getValorAdicional() {
        return $this->valorAdicional;
    }

    public function imprimeValor() {
        $total = $this->valor + $this->valorAdicional;
        echo "Valor do ingresso VIP: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }
}

class IngressoNormal extends Ingresso {
    public function declaracao() {
        echo "Ingresso normal";
    }

    public function imprimeValor() {
        parent::imprimeValor();
    }
}

class CamaroteInferior extends IngressoVIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function imprimeValor() {
        $total = $this->valor + $this->valorAdicional;
        echo "Valor do Camarote Inferior: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }

    public function imprimeLocalizacao() {
        echo "Localização: " . $this->localizacao . "<br>";
    }
}

class CamaroteSuperior extends IngressoVIP {
    private $localizacao;

    public function __construct($valor, $valorAdicional, $localizacao) {
        parent::__construct($valor, $valorAdicional);
        $this->localizacao = $localizacao;
    }

    public function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    public function getLocalizacao() {
        return $this->localizacao;
    }

    public function imprimeValor() {
        $total = $this->valor + $this->valorAdicional;
        echo "Valor do Camarote Superior: R$ " . number_format($total, 2, ',', '.') . "<br>";
    }

    public function imprimeLocalizacao() {
        echo "Localização: " . $this->localizacao . "<br>";
    }
}

$ingressoNormal = new IngressoNormal(50);
$ingressoNormal->declaracao();
echo "<br>";
$ingressoNormal->imprimeValor();
echo "<hr>";

$ingressoVIP = new IngressoVIP(100, 50);
$ingressoVIP->imprimeValor();
echo "<hr>";

$camaroteInferior = new CamaroteInferior(150, 75, "Setor A");
$camaroteInferior->imprimeValor();
$camaroteInferior->setLocalizacao("Setor B");
$camaroteInferior->imprimeLocalizacao();
echo "<hr>";

$camaroteSuperior = new CamaroteSuperior(200, 100, "Setor C");
$camaroteSuperior->imprimeValor();
$camaroteSuperior->setLocalizacao("Setor D");
$camaroteSuperior->imprimeLocalizacao();

?>
