<?php
//encotrar a ultima ocorrencia de um texto
$str = "Testando encontrado palavra teste, em uma string que tem teste";

$palavra = strrpos($str, "teste");

echo "$palavra <br>";


//primeira palavra
$palavra2 = strpos($str, "teste");

echo "$palavra2 <br>";

if (strrpos($str, "Java") === false) {
    echo "A palavra não foi encontrada!<br>";
}
//colocando strpos no lugar do incice para encontrara palavre sem saber seu indice
$p = substr($str, strpos($str, "teste"), 5);
echo $p;
