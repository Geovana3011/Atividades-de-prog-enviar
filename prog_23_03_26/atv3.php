<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $velocidadeMaxima;

    public function acelerar() {
        echo "O carro está acelerando<br>";
    }

    public function frear() {
        echo "O carro está freando<br>";
    }
}

$carro = new Carro();
$carro->marca = "Chevrolet";
$carro->modelo = "Onix";
$carro->ano = 2015;
$carro->cor = "preto";
$carro->velocidadeMaxima = "180 km/h";

echo "Marca: " . $carro->marca . "<br>";
echo "Modelo: " . $carro->modelo . "<br>";
echo "Ano: " . $carro->ano . "<br>";
echo "Cor: " . $carro->cor . "<br>";
echo "Velocidade máxima: " . $carro->velocidadeMaxima . "<br>";

$carro->acelerar();
$carro->frear();

?>