<?php


class Car
{
    public String $marca;
    public $ano;
    public $cor;

    function kmLitro()
    {
        echo "Olá eu sou um objeto";
    }
}
$BMW = new Car;
$ferrari = new Car;
$newCivic = new Car;

$ferrari->marca = "Ferrari";
echo $ferrari->marca . "<br>";
$ferrari->kmLitro();
