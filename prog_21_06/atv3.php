<?php

class Funcionario {
    public $nome;
    public $salario;

    public function calcularBonus() {
        return $this->salario * 0.10;
    }

    public function exibirDados() {
        echo "Funcionário: " . $this->nome . "<br>";
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

$func1 = new Gerente();
$func1->nome = "João";
$func1->salario = 10000;

$func2 = new Desenvolvedor();
$func2->nome = "Maria";
$func2->salario = 8000;

$func3 = new Gerente();
$func3->nome = "Carlos";
$func3->salario = 15000;

$funcionarios = array($func1, $func2, $func3);

foreach ($funcionarios as $f) {
    $f->exibirDados();
    echo "Bônus: " . $f->calcularBonus() . "<br><br>";
}

?>