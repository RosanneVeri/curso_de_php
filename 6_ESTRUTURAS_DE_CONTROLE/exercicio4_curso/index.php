<?php

$categoria = "";
function verificarCategoria(string  $categoria)
{
    switch ($categoria) {
        case "eletronicos":
            echo "Essa categoria é de produtos eletrônicos";
            break;
        case "vestuário":
            echo  "Essa categoria é de produtos de vestuário";
            break;
        case "alimentos":
            echo "Essa categoria é de produtos alimentícios";
            break;
        default:
            echo "Categoria desconhecida";
            break;
    }
}

verificarCategoria($categoria);
