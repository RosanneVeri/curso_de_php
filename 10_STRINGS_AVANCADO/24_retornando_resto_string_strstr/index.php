<?php

//encontra a palavra com o seu resto
 
$str = "Testando resto da string, pra ver se dá certo";


$resto = strstr($str, "resto");

echo "$resto <br>";


$s = "string";

$resto2 = strstr($str, $s);

echo "$resto2 <br>";

if (strstr($str, ".NET") === false) {
    echo "Não encontrada a palavra";
}
