<?php

function verificarImparPar($num)
{
    if (is_int($num)) {
        if ($num % 2 == 0) {
            echo "O número $num é par<br>";
        } else {
            echo "O numero $num é impar<br>";
        }
    } else {
        echo "Por favor insira um número inteiro";
    }
}
verificarImparPar(10);
verificarImparPar(13);
verificarImparPar(2);
verificarImparPar(4);
verificarImparPar(5);
verificarImparPar(29);
verificarImparPar(8);
verificarImparPar(8.8);
