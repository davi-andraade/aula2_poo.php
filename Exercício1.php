<?php

class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    // MÉTODO CONSTRUTOR
    public function __construct($titulo, $autor, $paginas, $anoPublicacao = 'Desconhecido'){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function exibirDetalhes(){
        echo '<p>Título: ' . $this->titulo . ' | Autor: ' . $this->autor . ' | Páginas: ' . $this->paginas . ' | Ano de Publicação: ' . $this->anoPublicacao . '</p>';
    }
}

$livro1 = new Livro('O Senhor dos Anéis', 'J.R.R. Tolkien', 19, 1954);
$livro2 = new Livro('1984', 'George Orwell', 328, 1948);

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();

?>