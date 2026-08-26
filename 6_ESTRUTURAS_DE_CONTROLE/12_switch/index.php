<?php
//indicado par a verificar um variavel-> $x
$x = 0;

switch ($x) {
    case 0:
        echo "X é igual a 0<br>";
        break;
    case 1:
        echo "X é igual a 1";
        break;

    default:
        echo "X não é igual a nenhum dos valores mencionados <br>";

        break;
}


$y = "Maria";

switch ($y) {
    case "João":
        echo "O nome informado é o João <br>";

        break;

    case 'Maria':
        echo "O nome informado é Maria<br>";
        
        break;

    default:
        echo "o nome informado não corresponde a nenhuma opcao <br>";

        break;
}
