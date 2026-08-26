<?php
$gato = [
    'nome' => 'Apolo',
    'peso' => 2000
];
print_r($gato);

//echo "O $gato[0], tem $gato[1] quilos.";

echo "<br>";
//atribuindo em variaveis
$nome = $gato['nome'];
echo $nome;
echo "<br>";

$peso = $gato['peso'];
echo $peso;
echo "<br>";

echo "O $nome tem $peso kilos.";
