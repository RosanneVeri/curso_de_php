<?php

class Pessoa
{

    function falar()
    {
        echo "Hi,I'm Joao! how are you?";
    }
    function somar($x, $y)
    {

        echo $x + $y . "<br>";
    }
}
$joao = new Pessoa;
$maria = new Pessoa;
$joao->falar();
echo "<br>";

$maria->somar(10, 2);
$joao->somar(8, 2);
echo "<br>";
