<?php

class Funcionario {
    public $nome;
    public $salario;

    public function calcularBonus() {
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario {

}

class Desenvolvedor extends Funcionario {

}

$g1 = new Gerente();
$g1->nome = "João";
$g1->salario = 20000;

$d1 = new Desenvolvedor();
$d1->nome = "Maria";
$d1->salario = 8000;

echo "Nome: " . $g1->nome . "<br>";
echo "Cargo: Gerente<br>";
echo "Bônus: " . $g1->calcularBonus() . "<br><br>";

echo "Nome: " . $d1->nome . "<br>";
echo "Cargo: Desenvolvedor<br>";
echo "Bônus: " . $d1->calcularBonus();

?>