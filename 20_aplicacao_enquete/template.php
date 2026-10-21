<?php

//trabalhar sem array usando extract(transformando o array em variavel)
// [nome, idade] => extract => $nome e $idade;


function render($view, $vars = []): void
{
    extract(array: $vars);
    //chamando os arquivos do template
    // CABECALHO
    require __DIR__ . '/partials/head.php';
    // MIOLO DO SITE(MUDA TODA A PAG.)
    require __DIR__ . '/views/' . $view . '.php';
    //RODAPE
    require __DIR__ . '/partials/footer.php';
}
