<?php

class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanqueInical;

    public function __construct($modelo, $consumo = 10, $tanqueInical = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanqueInicial = $tanqueInical;
    }

    public function abastecer($litros) {
    if ($litros > 0) {
        $this->tanqueInicial += $litros;

        echo '<p>Abastecidos ' . $litros . ' litros no ' . $this->modelo . '.</p>';
    } else {
        echo '<p>VALOR INVÁLIDO!</p>';
    }
}

    public function dirigir($km){
        $combustivelNecessario = $km / $this->consumo;
        if($combustivelNecessario <= $this->tanqueInicial){
            $this->tanqueInicial -= $combustivelNecessario;
            
            echo '<p>O carro ' . $this->modelo . ' percorreu ' . $km . ' km e consumiu ' . number_format($combustivelNecessario, 2, ',', '.') . ' litros.</p>';
            echo '<p>Seu tanque atual: ' . $this->tanqueInicial . 'L</p>';
        }
        else{
            echo '<p>TANQUE ESGOTADO! Não será possível realizar a viagem...</p>';
        }
    }

    public function exibirInfo(){
        echo '<p>Modelo: ' . $this->modelo . ' | Consumo: ' . $this->consumo . ' km/L | Tanque: ' . number_format($this->tanqueInicial, 2, ',', '.') . 'L</p>';
    }
}

$carro = new Carro('Honda Civic', 12, 20); // consumo: 12km/L ----- tanque inicial: 20L

$carro->exibirInfo();
$carro->dirigir(60); // deve consumir 5L
$carro->abastecer(10);
$carro->exibirInfo();
?>