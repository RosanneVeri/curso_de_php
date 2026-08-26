<?php
$arr = [
    "porta" => 100,
    "macaneta" => 5,
    "motor" => 1200,
    "chassi" => 1999
];

function retornaItensCaros($arr)
{
    $arrItensCaros = [];
    foreach ($arr as $item => $preco) {
        if ($preco > 10) {
            array_push($arrItensCaros, $item);
            echo $item . " custa " . $preco . "<br>";
        }
    }
    return $arrItensCaros;
}

$novo_array = retornaItensCaros($arr);
print_r($novo_array);
