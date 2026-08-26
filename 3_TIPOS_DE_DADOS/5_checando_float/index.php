<?php

$b = "teste";
$c =  12.5;


if (is_float($b)) {
    echo "É float 1! <br>";
}
if (is_float($c)) {
    echo "É float 2! <br>";
}
if (is_float(55.59)) {
    echo "É float 3!<br>";
}
if (is_float('teste')) {
    echo "É float 4!<br>";
}
