<?php
$frase = "testando o case de uma palavra <br>";
$frase1 = "Testando o case de uma palavra <br>";

$restateString = substr($frase, 10, 5); //STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA
echo $restateString . "<br>";
$restateString2 = substr($frase1, 8); //OMITIR COMPRIMENTO = PEGAR ATE O FIM
echo $restateString2 . "<br>";
$restateString3 = substr($frase1, 8, -7); //COMPRIMENTO NEGATIVO = REMOVER DO ULTIMO INDICE
echo $restateString3 . "<br>";
