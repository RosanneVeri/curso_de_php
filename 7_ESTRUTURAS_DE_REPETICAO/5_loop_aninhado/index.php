<?php
$c ="Variavel teste ";
    $i = 1;

while ($i <= 10) {
    echo "Loop interno $i <br>";
    //segundo contador
    $j = 1;
    while ($j <= 10) {
        echo "Loop externo $j <br>";
        echo "$c 2<br>";
        $j++;
    }
    $i++;
}
