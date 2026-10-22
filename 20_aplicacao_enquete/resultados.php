<!-- IMPORTACOES -->
<?php

require __DIR__ . '/template.php';
require __DIR__ . '/lib.php';

$data = get_current_poll();

//trazendo o template home para o index.php
render(view: 'results', vars: [
    'title' => 'Veja a enquete',
    'hero' => 'Resultados',
    'heroLead' => 'Veja os resultados',
    'data' => $data

]);
