<?php

$cincodias = strtotime("5 days");

echo $cincodias . "<br>";

$dezdias = strtotime("10 days");

echo $dezdias . "<br>";

$dataAtualMaisCinco = date('d/m/y', $cincodias);

echo $dataAtualMaisCinco . "<br>";


$dataAtualMaisDez = date('d/m/y', $dezdias);

echo $dataAtualMaisDez . "<br>";


//meses
$doisMeses = strtotime("2 months");
echo $doisMeses . "<br>";
echo $dataAtualMaisDoisMeses = date('d/m/Y', $doisMeses);
