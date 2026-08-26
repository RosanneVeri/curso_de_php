<?php
$arr = ["nome" => "Rosanne", "idade" => 35];

if (array_key_exists("nome", $arr)) {
    echo "A chave existe!<br>";
} else {
    echo "A chave não existe! <br>";
}

if (array_key_exists("profissao", $arr)) {
    echo "A chave existe!<br>";
} else {
    echo "A chave não existe! <br>";
}

//ISSET
if (isset($arr['nome'])) {
    echo "A chabe existe! ISSET <BR>";
} else {
    echo "A chabe não existe! ISSET <BR>";
}
if (isset($arr['teste'])) {
    echo "A chabe existe! ISSET <BR>";
} else {
    echo "A chabe não existe! ISSET <BR>";
}
//ISSET USADO POR VARIAVEIS
$X = 10;
if (isset($X)) {
    echo "A VARIAVEL  existe! ISSET <BR>";
} else {
    echo "A VARIAVEL não existe! ISSET <BR>";
}
