<?php
$nome = "Mingau";
$apelido = "bolinha de pelo";
$peso = 2600;

$gato = compact("nome", "apelido", "peso");
print_r($gato);

foreach($gato as $carateristica => $value){
    echo "$carateristica: $value <br>";
}