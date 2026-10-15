<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){

        if($percentual > 0 && $percentual <= 10){
            $acrescimo = ($this->salario * $percentual) / 100;
            $this->salario += $acrescimo;

            echo '<p><b>Você recebeu um aumento de ' . $percentual . '%</b></p>';
        }
        else{
            echo '<p>Não foi possível realizar o aumento! O percentual deve ser maior que 0% e no máximo 10%.</p>';
        }
    }

    public function exibirSalario(){
        echo '<p>Funcionário: ' . $this->nome . ' - Salário: R$ ' . number_format($this->salario, 2, ',', '.') . '</p>';
    }
}

$funcionario = new Funcionario('Carlos', 1000);
$funcionario->aumentarSalario(10);
$funcionario->exibirSalario();

?>