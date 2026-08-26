<?php

//Serve para trabalhar com arrays - e tem que ter o array ja pronto
$nomes = ["Maria", "Joao", "Pedro"];

foreach ($nomes as $nome) {
    echo "O valor do indice atual é $nome <br>";
    if ($nome == "Maria") {
        echo "Bem vinda, $nome!<br>";
    }
}
