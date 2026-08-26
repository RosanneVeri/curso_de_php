<?php

//incrementando com while

$x = 0;
while ($x < 5) {
    echo $x . "<br>";
    $x++;
}
echo "continuando código<br>";

$y = 0;
while ($y <= 10) {
    echo $y . "<br>";
    $y += 2;
}
echo "continuando código<br>";

//decrementando(10, 9, 8 ...)
//defini;cao do contador
$z = 10;

//inicio / definicão da estrutura
while ($z > 0) {
    //corpo do loop
    echo $z . "<br>";

    //incremento do contador
    $z--;
}
echo "continuando código<br>";

// A definicao do contador
$a = 10;

//Inicio / Definicao da estrutura
while ($a > 0) {
    //corpo do loop (mostrando o A quando for impares)
    if ($a % 2 != 0) {
        echo $a . "<br>";
    }
    $a++;
}
