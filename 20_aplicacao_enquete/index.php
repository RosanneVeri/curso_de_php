<!-- IMPORTACOES -->
<?php

require __DIR__ . '/template.php';

//trazendo o template home para o index.php
render(view: 'home', vars: [
    'title' => 'Home do site',
    'hero' => 'Bem-vindo',
    'heroLead' => 'Site de Notícias: leia o que quiser'

]);
