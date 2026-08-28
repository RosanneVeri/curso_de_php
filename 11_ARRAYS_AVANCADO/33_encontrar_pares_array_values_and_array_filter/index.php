<?php

$arr = [20, 36, 54, 85, 56, 95, 87, 43, 64, 19, 18, 22, 24, 26];

function encontrarPares($arr)
{

    if ($arr != null) {

        $arrPares = array_values(
        array_filter($arr, function ($num) {
            return $num % 2 === 0;
        }));
        return $arrPares;
    } else {
        echo "Array vazio";
    }
}
print_r(encontrarPares($arr));
