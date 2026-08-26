<?php

$operacao = "5" * 12;
echo $operacao . "<br>";
echo gettype($operacao);
echo "<br>";
//pode ser usado no array
echo gettype([]);
echo "<br>";

//pode ser usado com float
echo gettype(12.1);
echo "<br>";

//pode ser usado com string
echo gettype("Teste");
