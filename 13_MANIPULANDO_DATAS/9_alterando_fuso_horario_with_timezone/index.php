<?php
//considera-se o fuso horario da maquina que está sendo executada, porem podemos alterar manualmente com a funcao date_default_timezone_set e recebe com parametro uma string
//definindo a forca, nao é muito indicado. Mas ha casos necessarios!
date_default_timezone_set("America/Sao_Paulo");
$data = new DateTime();
print_r($data);
echo "<br>";
