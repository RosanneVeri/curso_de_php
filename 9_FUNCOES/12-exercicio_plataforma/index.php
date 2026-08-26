<?php

$somaPares = null;

function sumEvenNunbers($num)
{
    global $somaPares;
    if ($num >= 0) {
        for ($i = $num; $i >= 0; $i--) {
            if ($i % 2 == 0) {
                $somaPares += $i;
            }
        }
        //print($somaPares);
        return "A soma de todos os numeros positivos pares menores que $num  é " . $somaPares . "!<br>";
    } else {

        echo "digite um numero positivo";
    }
}
echo sumEvenNunbers(10);
echo sumEvenNunbers(200);
echo sumEvenNunbers(100);
echo sumEvenNunbers(110);
echo sumEvenNunbers(190);
