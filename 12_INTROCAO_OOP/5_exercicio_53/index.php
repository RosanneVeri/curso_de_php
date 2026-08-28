<?php


class Cachorro
{


    function latir()
    {
        echo "Au Au..";
    }

    function andar($m)
    {
        echo "andando $m metros...";
    }
}

$caramelo = new Cachorro;
$lola = new Cachorro;
$clara = new Cachorro;

$clara->latir();
$caramelo->andar(10);
$lola->latir();
