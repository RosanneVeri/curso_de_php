<?php
$idade = 15;
$acesso = false;


function verificarAcesso($idade, $acesso)
{

    //global $idade;
    //global $acesso;
    if (($idade >= 18) && ($acesso === true)) {

        echo "Acesso autorizado";
    } else if (($idade >= 18)  && ($acesso === false)) {

        echo "Acesso negado. Autorização necessária";
    } else if ($idade < 18) {

        echo "Acesso negado. Idade mínima requerida: 18 anos!";
    }
}
verificarAcesso($idade, $acesso);
