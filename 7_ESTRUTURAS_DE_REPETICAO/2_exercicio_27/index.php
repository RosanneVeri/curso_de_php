<?php

$arr = ["Maria", 25, true, false, [], 10, 20.5, 17.9, "Joao", "Pedro", true, 17];

//contar para percorrer o array
$x = count($arr);

//contador
$y = 0;

while ($y < $x) {

    if (is_string($arr[$y])) {
        echo "$arr[$y] É um string";
    }
    $y++;
}
