<?php
$itensMercado = ["Arroz", "Feijão", "Sal", "AÇucar"];

function transformandoArrEmString($itensMercado)
{

    $listaSuperMercado = implode(", ", $itensMercado);
    return "Você levou os seguintes itens de mercardo: $listaSuperMercado";
}
echo transformandoArrEmString($itensMercado);

//do professor
echo "<br>";
function listaParaString($arr)
{
    $str = "Você levou os seguintes itens do mercado: ";
    for ($i = 0; $i < count($arr); $i++) {
        // + 1 PARA SABER SE É O ULTIMO 
        if ($i + 1 == count($arr)) {
            $str .= "$arr[$i].";
        } else {
            $str .= "$arr[$i], ";
        }
    }
    return $str;
}
echo listaParaString($itensMercado);
