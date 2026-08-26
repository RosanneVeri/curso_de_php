<?php

//os espacos sao salvo no banco 

$str = "  Rosanne   ";
echo "Está é a string : $str. <br>";

//limpa os dois lados 
$stringLimpa = trim($str);
echo "Está é a string : $stringLimpa. <br>";
//limpa o lado esquerdo
$stringLimpa1 = ltrim($str);
echo "Está é a string : $stringLimpa1. <br>";

//limpa o lado direito
$stringLimpa2 = rtrim($str);
echo "Está é a string : $stringLimpa2. <br>";
