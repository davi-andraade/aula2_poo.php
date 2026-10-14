<?php

class Triangulo{
    public float $base;
    public float $altura;
    public float $area;

    // MÉTODO CONSTRUTOR
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
        $this->area = $this->calcularArea();
    }

    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }
    
    public function exibirArea(){
        echo '<p>A área do triângulo é: ' . $this->area . '</p>';
    }
}

$triangulo1 = new Triangulo(10, 20);

echo '<pre>';
print_r($triangulo1);
echo '</pre>';

?>