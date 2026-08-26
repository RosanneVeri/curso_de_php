<?php
$pessoa = [
    'nome' => 'Maria', 
    'idade' =>   20
];
$nome =$pessoa[0];
$idade =$pessoa[1];

if ($idade >= 18){
    echo "A $nome é maior de idade";
}