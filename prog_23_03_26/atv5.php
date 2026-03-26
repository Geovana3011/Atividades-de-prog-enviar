<?php

class Retangulo {
    public $comprimento;
    public $largura;
}

$ret = new Retangulo();
$ret->comprimento = 10;
$ret->largura = 5;

$area = $ret->comprimento * $ret->largura;
$perimetro = 2 * ($ret->comprimento + $ret->largura);

echo "Comprimento: " . $ret->comprimento . "<br>";
echo "Largura: " . $ret->largura . "<br>";
echo "Área: " . $area . "<br>";
echo "Perímetro: " . $perimetro . "<br><br>";

?>