<?php
$palavra = "carro-navio-helicoptero-barco-jangada";

print_r($arrPalavra = explode("-", $palavra));

for ($i = 0; $i < count($arrPalavra); $i++) {
    echo "Item: $arrPalavra[$i]<br>";
}
