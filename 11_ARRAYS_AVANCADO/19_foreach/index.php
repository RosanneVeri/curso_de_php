<?php

$matheus = [
    'nome' => 'Maria',
    'idade' => 29,
    'profissao' => 'Desenvolvedor'
];
$alexia = [
    'nome' => 'alexia',
    'idade' => 21,
    'profissao' => 'Cozinheira'
];
$matheus = [
    'nome' => 'Pedro',
    'idade' => 23,
    'profissao' => 'Encanador'
];

foreach ($matheus as $caracteristica => $value) {
    echo "$caracteristica => $value <br>";
}

foreach ($alexia as $carac => $value) {
    echo "$carac => $value <br>";
}
//pega so valor 
foreach ($alexia as $value) {
    echo "$value <br>";
}

//pega so a chave
foreach ($alexia as $carac) {
    echo "$carac <br>";
}
