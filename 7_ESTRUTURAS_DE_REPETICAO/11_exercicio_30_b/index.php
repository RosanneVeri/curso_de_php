<?php
$contador = 1;
$contadorFinal = 10;
$arr = [];

for ($contador; $contador <= $contadorFinal; $contador++) {

    array_push($arr, $contador);
}

print_r($arr);
