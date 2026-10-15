
<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;
    private int $quantidadeVendida = 0;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade){
        if($quantidade > 0 && $quantidade <= $this->estoque){

            $this->estoque -= $quantidade;
            $this->quantidadeVendida += $quantidade;

            echo '<p>Compra realizada com sucesso!</p>';
        }
        else{
            echo '<p>Estoque insuficiente ou quantidade inválida!</p>';
        }
    }

    public function reajustarPreco($percentual){
        if($percentual > 0 && $percentual <= 100){
            $desconto = ($this->preco * $percentual) / 100;
            $this->preco -= $desconto;

            echo '<p><b>Você ganhou um desconto de ' . $percentual . '%!</b></p>';
        }
    }

    public function exibirInfo(){
        echo '<p>Venda de ' . $this->quantidadeVendida . ' unidade(s) de ' . $this->nome . ' realizada!</p>';

        echo '<p>' . $this->nome . ' -> R$ ' . number_format($this->preco, 2, ',', '.') . ' | Estoque: ' . $this->estoque . ' unidades</p>';
    }
}

$produto = new Produto('Teclado Gamer', 250, 10);

$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();

?>
