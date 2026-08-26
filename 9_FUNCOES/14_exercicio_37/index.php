<?php

function defineCorCarro($cor = "Vermelha")
{
    return "A cor do carro é $cor <br>";
}

$carroVermelho = defineCorCarro();
echo $carroVermelho;
$carroAzul = defineCorCarro("Azul");
echo $carroAzul;