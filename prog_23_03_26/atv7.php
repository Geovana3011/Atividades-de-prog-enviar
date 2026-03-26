<?php

class Triangulo {
    public $base;
    public $altura;
}

$tri = new Triangulo();
$tri->base = 10;
$tri->altura = 5;

$area = ($tri->base * $tri->altura) / 2;

echo "Base: " . $tri->base . "<br>";
echo "Altura: " . $tri->altura . "<br>";
echo "Área: " . $area . "<br><br>";

?>