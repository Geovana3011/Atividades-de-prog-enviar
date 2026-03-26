<?php

class Aluno {
    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;
    public $nota3;
}

$aluno = new Aluno();
$aluno->nome = "Alita";
$aluno->matricula = 123;
$aluno->nota1 = 8;
$aluno->nota2 = 7;
$aluno->nota3 = 6;

$media = ($aluno->nota1 + $aluno->nota2 + $aluno->nota3) / 3;

echo "Nome: " . $aluno->nome . "<br>";
echo "Média: " . $media . "<br>";

if ($media >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}

?>