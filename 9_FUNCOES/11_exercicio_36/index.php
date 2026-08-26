<?php
$arr = [1, 2, 3, 4, 5, 10, 23, 35, 26, 59, 75];
$arr1 = [];

function novoArray($arr)
{
    foreach ($arr as $item) {
        global $arr1;
        if ($item >= 5) {
            array_push($arr1, $item);
        }
    }
    $resultado = implode(", ", $arr1);

    return $resultado;
}
echo novoArray($arr);
