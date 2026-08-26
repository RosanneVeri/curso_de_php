<?php
$contador = 10;
$finalContador = 100;
$arr = [];

while ($contador <= $finalContador) {


    array_push($arr, $contador);

    if ($contador === 30) {

        echo "Pulou o contado no $contador<br>";

        $contador += 10;


        if ($contador === 40) {
            echo "Pulou o contado no $contador<br>";

            $contador += 10;
        }
    }

    echo "O contador tem o valor de $contador <br>";
    print_r($arr);
    echo "<br>";
    //incrementador
    $contador += 10;
}


$arr1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];


$i = 0;

while ($i < count($arr1)) {
    $numeroAtual = $arr1[$i];
    if ($numeroAtual == 30 || $numeroAtual == 40) {
        $i++;
        continue;
    }
    echo "Elemento: $numeroAtual<br>";
    $i++;
}
