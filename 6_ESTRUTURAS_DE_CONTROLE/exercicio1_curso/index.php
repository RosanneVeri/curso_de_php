<?php

$num1 = 10;
$num2 = 2;

function compararNumeros($num1, $num2){

    if($num1 > $num2){
        echo "O primeiro número é maior.";
        
    }else if($num2 > $num1){
        echo "O segundo número é maior.";
        
    }else if($num1 == $num2){
        echo "Os números são iguais.";
    }else{
        echo "Os valores não são comparaveis";
    }
    
    
}
compararNumeros($num1, $num2);