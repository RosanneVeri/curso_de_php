<?php

$arr = range(1, 30);
shuffle($arr);
print_r($arr);
echo "<br>";

function ordenarNumeros($arr)
{
    if ($arr != null) {

        sort($arr);
        return $arr;
    } else {
        echo "Arraay vazio";
    }
}
print_r(ordenarNumeros($arr));
