<?php
$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);
echo $dataNascimento . "<br>";
echo $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
echo "<bR>";

$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
$dataFuturaformatada = date('m/d/y', $dataEspecifica);
echo $dataFuturaformatada;
