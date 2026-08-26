<?php
$a = 5;
$b = 2;
$c = "Matheus";
$d = "Pedro";
$e = 12;
$f = 11;

//condicao verdadeira
if ($a > $b) {
    echo "5 e maior que 1 <br>";
}

//condicao falsa
if ($c != $d) {
    echo "Matheus é diferente de Pedro<br>";
}
if ($c !== $d) {
    echo "Matheus é diferente de Pedro<br>";

    echo "C é um:" . gettype($c) . "<br>";
}

//utilizar op. logico
if ($e <= $f) {
    echo "não vai entrar no if 2<br>";
}

if (!($a >= $b) && 1) {
    echo "deu certo entrou no if 3<br>";
}

if ($a > $b) {
    echo $c . "if 5";
}
