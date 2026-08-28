<?php

$arr = [
    'Matheus' => 33,
    'Jose' => 38,
    'Miriam' => 43,
    'Joaquina' => 58,
    'Josue' => 55
];

//ordena em ordem decrescente
arsort($arr);
print_r($arr);
echo "<br>";

$arr1 = [
    'Matheus' => 33,
    'Jose' => 38,
    'Miriam' => 43,
    'Joaquina' => 58,
    'Josue' => 55

];

//ordena em ordem crescente
asort($arr1);
print_r($arr1);
echo "<br>";

$arr2 = [
    'Matheus' => 33,
    'Jose' => 38,
    'Miriam' => 43,
    'Joaquina' => 58,
    'Josue' => 55

];
//ordena em ordem alfabetica
ksort($arr2);
print_r($arr2);
echo "<br>";
