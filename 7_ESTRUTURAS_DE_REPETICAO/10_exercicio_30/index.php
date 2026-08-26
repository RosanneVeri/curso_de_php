<?php
$numeros1 = range(1, 20);
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

for ($i = 0; $i <= count($numeros); $i++) {


    $numeroAtual = $numeros[$i];

    //numeros impares
    /* if ($numeroAtual % 2 === 1) {
        echo "  Numero impar: $numeroAtual <br>";
    } */

    //numeros pares
    if ($numeroAtual % 2 === 0) {
        echo "  Numero par: $numeroAtual <br>";
    }
}
