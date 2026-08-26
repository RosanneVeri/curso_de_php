<?php

function teste($a = "teste")
{
    echo "O valor de A é: $a <br>";
}

teste();

teste("ads");

function testando($b, $a = "x-default")
{
    echo "O valor de A é $a e o valor de b é $b! <br>";
}
testando(10);
testando("10", "2");
