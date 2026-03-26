<?php

class Funcionario {
    public $nome;
    public $cargo;
    public $salario;
    public $dataAdmissao;
}

$funcionario1 = new Funcionario();
$funcionario1->nome = "Julia";
$funcionario1->cargo = "Gerente";
$funcionario1->salario = 3500;
$funcionario1->dataAdmissao = 2025;

$salarioAnual = $funcionario1->salario * 12;

echo "O funcionário se chama " . $funcionario1->nome . "<br>";
echo "Cargo: " . $funcionario1->cargo . "<br>";
echo "Salário mensal: " . $funcionario1->salario . "<br>";
echo "Admitido em: " . $funcionario1->dataAdmissao . "<br>";
echo "Salário anual: " . $salarioAnual . "<br>";

?>