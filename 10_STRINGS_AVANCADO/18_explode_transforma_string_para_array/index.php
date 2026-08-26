<?php
$frase = "Testando o explode. E, adicionando mais texto para teste";
$frase2 = "Jesus, é, o, nosso, salvador";

// o delimitador precisa esta na string

$fraseArray = explode(" ", $frase); //delimitador e a string
print_r($fraseArray);
echo "<Br>";


$fraseArray2 = explode(",", $frase2); //delimitador e a string
print_r($fraseArray2);
echo "<Br>";
