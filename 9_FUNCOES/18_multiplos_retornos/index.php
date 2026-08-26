<?php

function alterarDados($nome, $idade)
{
    $nome = "Sr. $nome";
    $idade = "$idade  anos";
    return [$nome, $idade];
}
$dados = alterarDados("Matheus", 29);
print_r($dados);

echo "<bR>";

echo "Olá $dados[0], vc tem $dados[1]";
