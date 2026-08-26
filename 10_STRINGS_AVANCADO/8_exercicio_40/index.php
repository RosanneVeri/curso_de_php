<?php


$str = "O rato roeu a roupa do rei de Roma";

function percorrendoString($str)
{
    $contador = 0;

    for ($i = 0; $i < strlen($str); $i++) {


        if ($str[$i] === "a") {
            $contador += 1;
        }
    }
    echo $contador . '<br>';
}
$frase = percorrendoString($str);
echo $frase;
