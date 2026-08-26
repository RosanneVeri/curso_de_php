<?php
$a = 102;
$b = 2;
$c = "Matheus";
$d = "Pedro";

if (is_int($a)) {
    echo "É um inteiro e entrou ni if 1<br>";
    $f = $a * 2;
    if ($f > 100) {
        echo "Entrou no if 2 ";

        echo "O valor de F é $f e no caso é maior que 100<br>";
    }
} else {
    echo "caiu no else e é do tipo: " . gettype($a) . "<br>";
}
if (is_int($b)) {
    echo "É um inteiro<br>";
    $f = $b * 2;
    if ($f > 100) {
        echo "F é maior que 100<br>";
    }
} else {
    echo "caiu no else e é do tipo: " . gettype($b) . "<br>";
}
