<?php

class Carro
{

    public $velocidade_maxima = 250;

    function setVelocidadeMAxima($num)
    {
        $this->velocidade_maxima = $num;
    }

    function getVelocidadeMaxima()
    {

        echo  "Este carro tem a velocidade maxima de $this->velocidade_maxima KM por hora ";
    }
}

$ferrari = new Carro;

$ferrari->getVelocidadeMaxima();
$ferrari->setVelocidadeMAxima(270);
echo "<br>";
$ferrari->getVelocidadeMaxima();
echo "<br>";
$ferrari->setVelocidadeMAxima(280);
$ferrari->getVelocidadeMaxima();
