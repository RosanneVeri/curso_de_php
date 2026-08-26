<?php
$arr = [1, 2, 3];
$arr[] = 4;
print_r($arr);
echo "<br>";

$arr[] = "Rosanne";
print_r($arr);
echo "<br>";

$arr2 = [];

$arr2[] = 10;
print_r($arr2);
echo "<br>";
$arr2[] = 20;
print_r($arr2);
echo "<br>";

//array asssociativo sempre adiciona no fim
$arr3 = [];

$arr3["name"] = "Maria";
$arr3["idade"] = 25;
$arr3["cidade"] = "Planaltina";
print_r($arr3);
