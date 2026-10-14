<?php

class ContaBancaria{
    public string $titular;
    public float $saldo;

    // MÉTODO CONSTRUTOR
    public function __construct($titular, $saldo = 0.0){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        if($valor > 0){
            $this->saldo += $valor;
            echo '<p>Depósito de R$ ' . number_format($valor, 2) . ' realizado com sucesso!</p>';
        } else {
            echo '<p>Valor de depósito inválido.</p>';
        }
    }

    public function sacar($valor){
        if($valor > 0 && $valor <= $this->saldo){
            $this->saldo -= $valor;
            echo '<p>Saque de R$ ' . number_format($valor, 2) . ' realizado com sucesso!</p>';
        } else {
            echo '<p>Saldo insuficiente ou valor de saque inválido.</p>';
        }
    }

    public function exibirSaldo(){
        echo '<p>Titular: ' . $this->titular . ' - Saldo atual: R$ ' . number_format($this->saldo, 2) . '</p>';
    }
}

// CRIANDO OBJETO
$conta1 = new ContaBancaria('Davi', 1000.00);
$conta1->depositar(500.00);
$conta1->sacar(200.00);
$conta1->exibirSaldo();

?>