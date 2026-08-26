<?php

$nome = "Maria";
$idade = 15;
$temCarro = true;

if (is_int($nome)) {

    echo "Entrou no if 1 e é um inteiro<br>";
} else {

    echo "Entrou no else 1 e é um: " . gettype($nome) . "<br>";
}
if (is_int($idade)) { //

    echo "Entrou no if 2 e é um inteiro<br>";
} else {

    echo "Entrou no else 2 e é um: " . gettype($idade) . "<br>";
}
if (is_int($temCarro)) { // boolean

    echo "Entrou no if 3 e um inteiro<br>";
} else {
    echo "Entrou no else 3 e é um: " . gettype($temCarro) . "<br>";
}
