<?php

class Conta {
    public $numero;
    public $titular;
    public $saldo;
}

$conta = new Conta();
$conta->numero = 1;
$conta->titular = "Pedro Henrique";
$conta->saldo = 1000;

echo "Número: " . $conta->numero . "<br>";
echo "Titular: " . $conta->titular . "<br>";
echo "Saldo inicial: " . $conta->saldo . "<br>";

$conta->saldo = $conta->saldo + 500;
echo "Após depósito: " . $conta->saldo . "<br>";

$conta->saldo = $conta->saldo - 200;
echo "Após saque: " . $conta->saldo . "<br><br>";

?>