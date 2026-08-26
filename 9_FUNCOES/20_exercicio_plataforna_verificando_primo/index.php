<?php

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    // Testa divisores até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($num); $i++) {

        if ($num % $i === 0) {
            return "O numero $num não é primo <br>";
        }
    }

    return "O numero $num é primo <br>";
}
echo isPrime(7);
echo isPrime(8);
echo isPrime(9);
echo isPrime(2);
echo isPrime(3);
echo isPrime(1);
echo isPrime(19);
echo isPrime(21);


echo "<br>";

//function que recebe um array e verifica se cada num é primo

$arr = range(2, 100);

function verificarNumPrimoArray($arr)
{

    foreach ($arr as $num) {
        if ($num < 2) {
            //echo "O numero $num não é PRIMO <br>";
            continue;
        }
        if ($num === 2) {
            echo "O numero $num é o único número par PRIMO <br>";
            continue;
        }
        if ($num % 2 === 0) {
            //echo "O número $num não é PRIMO <br>";
            continue;
        }

        $isPrime = true;

        for ($i = 3; $i <= sqrt($num); $i += 2) {
            if ($num % $i === 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo "O número $num é PRIMO <br>";
        } else {
            //echo "O número $num não é PRIMO <br>";
        }
    }
}

verificarNumPrimoArray($arr);
