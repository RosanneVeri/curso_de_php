<?php
$arr = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]

];
//print_r($arr);
echo "<br>";

//loop no array externo
for ($i = 0; $i < count($arr); $i++) {

    //imprimindo o array externo
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";

    for ($j = 0; $j < count($arr[$i]); $j++) {
        //imprimindo array interno
        echo $arr[$i][$j] . "<br>";
    }
}
