<?php

class ContaBancaria{
    private string $titular;
    private float $saldo;


    public function __construct($titular, $saldo){
    $this->titular = $titular;
    $this->saldo = $saldo;
    }

    public function exibirTitular(){
    echo '<p>O titular da conta é: ' . $this->titular . '</p>';
    }

    // MÉTODO PARA ALTERAR O TITULAR DA CONTA
    public function alterarTitular($novoTitular){
    $this->titular = $novoTitular;
    }

    public function exibirSaldo(){
    echo '<p>O saldo da conta é: R$ ' . number_format($this->saldo, 2, ',', '.') . '</p>';
    }

    public function depositar($valor){
    if($valor > 0){
        $this->saldo += $valor;
        echo '<p>Depósito de R$ ' . number_format($valor, 2, ',', '.') . ' realizado com sucesso!</p>';
    } else {
        echo '<p>Valor de depósito inválido.</p>';
    }
    }

    public function sacar($valor){
    if($valor > 0 && $valor <= $this->saldo){
        $this->saldo -= $valor;
        echo '<p>Saque de R$ ' . number_format($valor, 2, ',', '.') . ' <b>realizado com sucesso!</b></p>';
    } else {
        echo '<p>Saldo insuficiente ou valor de saque inválido.</p>';
    }
    }
}

$conta1 = new ContaBancaria('Davi', 1000);
$conta1->exibirTitular();

// EXIBINDO O NOVO TITULAR DA CONTA APÓS ALTERAÇÃO
$conta1->alterarTitular('Miguel');
$conta1->exibirTitular();
$conta1->exibirSaldo();

// EXIBINDO O SALDO APÓS DEPÓSITO E SAQUE
$conta1->depositar(500);
$conta1->exibirSaldo();
$conta1->sacar(200);
$conta1->exibirSaldo();

?>