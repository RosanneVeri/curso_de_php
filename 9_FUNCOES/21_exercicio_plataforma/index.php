<?php
function sumDigits($numero)
{

    $somaDigitos  = array_sum(str_split((string)$numero));
    echo $somaDigitos . "<br>";
}
sumDigits(17568);

sumDigits(11);
sumDigits(17);
sumDigits(12);
