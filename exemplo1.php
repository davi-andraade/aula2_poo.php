<?php

class Pessoa{
    public string $nome;
    public int $idade;

    // MÉTODO CONSTRUTOR (deixa alguns campos obrigatórios para serem preenchidos)
    public function __construct($valor1, $valor2){
        $this->nome = $valor1;
        $this->idade = $valor2;
    }

    public function exibirDadosPessoa(){
        echo '<p>Olá, meu nome é ' . $this->nome . '| Idade: ' . $this->idade . ' anos.</p>';
    }
}

$pessoa = new Pessoa('Davi', 17);
$pessoa->exibirDadosPessoa();

$pessoa->nome = 'Recebe nome';
$pessoa->idade = 17;

$pessoa->exibirDadosPessoa();

?>