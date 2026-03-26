<?php

class Pessoa {
    public $nome;
    public $idade;
    public $genero;
}

$pessoa = new Pessoa();
$pessoa->nome = "Luiza";
$pessoa->idade = 17;
$pessoa->genero = "Feminino";

echo "Nome: " . $pessoa->nome . "<br>";
echo "Idade: " . $pessoa->idade . "<br>";
echo "Gênero: " . $pessoa->genero . "<br><br>";

?>