<?php
$teste1 = "asd";

echo "$teste1 global 1 <br>";

if (5 > 2) {
    $teste1 = "dsa if";
    echo "$teste1 if <br>";
}

echo "$teste1 global 2 <br>";

function funcao()
{
    global $teste;
    $teste = "variavel global criada no local e chamada ";
    echo "$teste localmente <br>";
}
funcao();
echo "<br>";
echo "$teste chamada globalmente";
echo "<br>";

function funcao2()
{
    global $teste1;
    echo $teste1;
    echo "<br>";
    $teste1 = "sdf";
    echo $teste1;
}
funcao2();

$teste1 = 'fdsa';

funcao2();