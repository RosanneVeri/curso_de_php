<?php
//salvar o texto no banco
$textoHtml = "<p>Testando paragrafo.</><div>uma div.</><p>Outro paragrafo.</p>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;
