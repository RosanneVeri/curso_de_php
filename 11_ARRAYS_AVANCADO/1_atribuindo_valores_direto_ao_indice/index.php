<?php
$arr = [];
print_r($arr);
echo "<br>";
//adicionando valores
$arr[0] = 10;
print_r($arr);
echo "<br>";

$arr[1] = 200;
print_r($arr);
echo "<br>";

//pode mas nao e indicado pular o indice
$arr[5] = 30;
print_r($arr);
echo "<br>";

//modificando valores: somando 20 ao numero que ja existe
$arr[1] += 20;
print_r($arr);
echo "<br>";

//array associativo
$arrAssoc = [];
$arrAssoc["carro"] = "BMW";
print_r($arrAssoc);
echo "<br>";

$arrAssoc["aviao"] = "Boeing";
print_r($arrAssoc);
echo "<br>";

//modificado
$arrAssoc["carro"] = "Ferrari";
print_r($arrAssoc);
echo "<br>";
