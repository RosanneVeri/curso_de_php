<?php

$a = True;

if (is_bool($a)) {
    echo "É um booleano 1";
}
if (is_bool(0)) {
    echo "É um booleano 2";
}
if (is_bool(false)) {
    echo "É um booleano 3";
}
if (0.0 == false) {
    echo "0 é considerando false";
}
