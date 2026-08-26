<?php
//&&, ||, !, XOR
$a = 5;
$b = 10;

if ($a > $b && $b > $a) { //false ou true
    echo "entrou no if 1 <Br>";
}
if ($a < $b && $b > $a) { //false or true
    echo "entrou no if 2 <Br>";
}


$c = 4;
$d = 5;
$e = 6;
$f = 6;

if ($a > $b && $d >= $e) {
    echo "A é igual a B if1";
    echo "<br>";
}
if ($b > $a && $a >= $d) {
    echo "B é igual a A if2";
    echo "<br>";
}
if ($d >= $c && $e == $f && $e === $f) {
    echo "D é igual a C if3";
    echo "<br>";
}
if (($d >= $a && $a == $b) && $b >$a){
    echo "D é igual a A if4";
}
