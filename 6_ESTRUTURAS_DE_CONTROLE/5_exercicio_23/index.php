<?php
$idade = 15;
$idade1 = 28;
$maioridade = 18;
$msg = "é maior de idade entrou no if<br>";
$msg1 = "não é maior de idade  entrou no else<br>";

//if1
if ($idade >= $maioridade) {
    echo $msg ;
} else {
    echo $msg1;
}

//if2
if ($idade1 >= $maioridade) {
    echo $msg;
} else {
    echo $msg1;
}
