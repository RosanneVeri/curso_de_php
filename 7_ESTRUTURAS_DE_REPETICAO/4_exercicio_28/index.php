<?php
$contador = 4;
$finalContador = 30;
while ($contador <= $finalContador) {
    echo "Executando o loop $contador <br>";
    if ($contador === 24) {
        echo "Parando o contador no numero 24";
        break;
    }
    $contador += 2;
}
