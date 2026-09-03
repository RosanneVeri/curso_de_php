<?php

class Calculadora
{

    public function somar($a, $b)
    {
        return $a + $b;
    }
    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {

        return $a / $b;
    }
}
$calculadora = new Calculadora;
echo $calculadora->somar(10, 2) . "<br>";
echo $calculadora->subtrair(10, 2) . "<br>";
echo $calculadora->multiplicar(10, 2) . "<br>";
echo $calculadora->dividir(10, 2) . "<br>";
