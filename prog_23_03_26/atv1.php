<?php

class Livro {
    public $titulo;
    public $autor;
    public $numeroPaginas;
    public $anoPublicacao;
}

$livro1 = new Livro();
$livro1->titulo = "A casa";
$livro1->autor = "Geovana";
$livro1->numeroPaginas = 25;
$livro1->anoPublicacao = 2025;

echo "O livro se chama " . $livro1->titulo . "<br>";
echo "O livro foi escrito por " . $livro1->autor . "<br>";
echo "O livro tem " . $livro1->numeroPaginas . " páginas<br>";
echo "O livro foi publicado em " . $livro1->anoPublicacao . "<br>";

?>