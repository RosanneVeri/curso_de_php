<?php
//C:\xampp\htdocs\curso_php_matheus\6_ESTRUTURAS_DE_CONTROLE\7_exercicio24_b> php index.php
//$peso = readline("Digite seu peso: ");
$peso = 80;
$pesoMax = 80;
$msg = "Está pesando demais";
$msg1 = "Peso dentro do limite!";


if ($peso >= $pesoMax) {
    echo $msg;
} else {
    $msg1;
}
