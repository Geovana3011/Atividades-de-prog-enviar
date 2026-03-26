<?php

class Circulo {
    public $raio;
}

$cir = new Circulo();
$cir->raio = 7;

$area = 3.14 * ($cir->raio * $cir->raio);
$perimetro = 2 * 3.14 * $cir->raio;

echo "Raio: " . $cir->raio . "<br>";
echo "Área: " . $area . "<br>";
echo "Perímetro: " . $perimetro . "<br><br>";

?>