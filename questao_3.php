<?php 
// Orientação a objeto *
// Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que 
// multiplique as 3 retornando o produto. Deixe um exemplo de utilização da sua classe no final do código.

class Caixa {
    protected $valor; 
    protected $imposto;
    protected $quantidade;
    public function getValor():float {
        return $valor;
    }
    public function setValor(float $valor) {
        $this->valor = $valor;
    }
    public function getImposto():float {
        return $imposto;
    }
    public function setImposto(float $imposto) {
        $this->imposto = $imposto;
    }
    public function getQuantidade():float {
        return $quantidade;
    }
    public function setQuantidade(float $quantidade) {
        $this->quantidade = $quantidade;
    }
    public function calcularPreco():float {
        return $this->quantidade * $this->imposto * $this->valor;
    }
}

$caixa = new Caixa;
$caixa->setValor(2.5);
$caixa->setImposto(1);
$caixa->setQuantidade(5);
print_r($caixa->calcularPreco()); // 12.50