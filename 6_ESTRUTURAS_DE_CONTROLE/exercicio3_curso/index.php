<?php
$valorProduto = 200;

$categoria = "Vestuário";

$desconto = 0;

function calcularDesconto($valorProduto, $categoria)
{

    if ($categoria == "Eletrônicos") {

        $desconto = 10;
        $valorDesconto = ($valorProduto / 100) * $desconto;
        $valorProduto -= $valorDesconto;
        echo $valorProduto;
    } else if ($categoria == "Vestuário") {

        $desconto = 20;
        $valorDesconto = ($valorProduto / 100) * $desconto;
        $valorProduto -= $valorDesconto;
        echo $valorProduto;
    } else if ($categoria == "Alimentos") {

        $desconto = 5;
        $valorDesconto =  ($valorProduto / 100) * $desconto;
        $valorProduto -= $valorDesconto;
        echo $valorProduto;
    } else if ($categoria == "Outras") {
        echo $valorProduto;
    } else {
        echo $valorProduto;
    }
}
calcularDesconto($valorProduto, $categoria);
