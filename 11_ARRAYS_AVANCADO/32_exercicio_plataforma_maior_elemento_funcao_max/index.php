<?php

$arr = [22,23,24,78,98,41,52,789,10000];

function maiorElemento($arr){
    if($arr != null){

        $maiorNumero = max($arr);
        return $maiorNumero;
    }else{
        echo "array vazio!";
    }
}
echo maiorElemento($arr);

