<?php
$arr = range(1, 10);
function soma($a, $b)
{
    return $a + $b;
}
function subtracao($a, $b)
{
    return $a - $b;
}
$resultado = array_reduce($arr, "soma");
$resultado1 = array_reduce($arr, "subtracao");

echo "$resultado <br>";
echo "$resultado1 <br>";
