<!-- IMPORTACOES -->
<?php

require __DIR__ . '/template.php';

//trazendo o template home para o index.php
render(view: 'create', vars: [
    'title' => 'Criacão de Enquete',
    'hero' => 'Criar Enquete',
    'heroLead' => 'Crie uma nova enquete para o site'

]);
