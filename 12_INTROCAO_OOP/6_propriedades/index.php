<?php

class Car
{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "prata";
    private $chassi;

    function ligar()
    {
        echo "Vruummm o carro foi ligado!<br>";
    }
}
$ferrari = new Car;


$ferrari->cor = "Preto";
$ferrari->aro = 17;

echo $ferrari->cor . "<br>";
echo $ferrari->aro . "<br>";
$ferrari->ligar();

