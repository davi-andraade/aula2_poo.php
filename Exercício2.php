<?php

class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $nota3;
    public float $media;


// MÉTODO CONSTRUTOR
    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia();
    }

    public function calcularMedia(){
        return ($this->nota1 + $this->nota2) / 2;
    }
    
    public function exibirMedia(){
        echo '<p>A média do aluno ' . $this->nome . ' é: ' . number_format($this->media, 2) . '</p>';
    }
}

$aluno1 = new Aluno('João', 7.5, 8.0);

echo '<pre>';
print_r($aluno1);
echo '</pre>';

?>