<?php

class Funcionario {
    public $nome;
    public $salario;

    public function calcularBonus() {
        return $this->salario * 0.10;
    }

    public function exibirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: " . $this->salario . "<br>";
    }
}

class Gerente extends Funcionario {

    public function calcularBonus() {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario {

    public function calcularBonus() {
        return $this->salario * 0.15;
    }
}

$g1 = new Gerente();
$g1->nome = "João";
$g1->salario = 10000;

$d1 = new Desenvolvedor();
$d1->nome = "Maria";
$d1->salario = 8000;

echo "<h3>Gerente</h3>";
$g1->exibirDados();
echo "Bônus: " . $g1->calcularBonus();

echo "<h3>Desenvolvedor</h3>";
$d1->exibirDados();
echo "Bônus: " . $d1->calcularBonus();

?>