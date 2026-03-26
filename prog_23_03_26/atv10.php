<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;
}

$prod = new Produto();
$prod->nome = "Caderno";
$prod->preco = 20;
$prod->quantidade = 10;

echo "Nome: " . $prod->nome . "<br>";
echo "Preço: " . $prod->preco . "<br>";
echo "Quantidade inicial: " . $prod->quantidade . "<br>";

$prod->quantidade = $prod->quantidade + 5;
echo "Após adicionar: " . $prod->quantidade . "<br>";

$prod->quantidade = $prod->quantidade - 3;
echo "Após remover: " . $prod->quantidade . "<br>";

?>