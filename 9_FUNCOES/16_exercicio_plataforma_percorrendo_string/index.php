<?php



//duas formar de percorrer strings:
//strlen() com for ou
// transformar a string em array de letras usando str_split() e usar um laco foreach

function countVowels($palavra)
{
    $palavra_maiuscula = strtoupper($palavra);
    foreach (str_split($palavra_maiuscula) as $letra) {

        //$letraMiusc = strtoupper($letra);

        if ($letra === "A" || $letra === "E" || $letra === "I" || $letra === "O" || $letra === "U") {
            echo "A palavra $palavra_maiuscula tem as seguintes vogais: $letra <br>";
        }
    }
    return $palavra;
}

$palavra = countVowels("Amor");

countVowels('love');


echo "<Br>";
echo "<Br>";

function countVowels1($palavra)
{
    $palavra_minuscula = strtoupper($palavra);

    for ($i = 0; $i < strlen($palavra_minuscula); $i++) {
        if ($palavra_minuscula[$i] === "A" || $palavra_minuscula[$i] === "E" || $palavra_minuscula[$i] === "I" || $palavra_minuscula[$i] === "O" || $palavra_minuscula[$i] === "U") {
            echo "as vogais da palavra $palavra_minuscula é $palavra_minuscula[$i]<br>";
        }
    }
}

countVowels1("Rosanne");
countVowels1("Rosanne Alves");
countVowels1("Rosanne Alves Veri");
