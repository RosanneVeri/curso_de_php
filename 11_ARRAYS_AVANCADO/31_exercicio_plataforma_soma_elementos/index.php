<?php

$arr = [54, 68, 23, 15, 62, 49, 73, 40];

function somaElementos($arr)
{
    if ($arr != null) {

        $soma = array_sum($arr);
        return $soma;
    } else {

        echo "Array vazio!";
    }
}

echo somaElementos($arr);
