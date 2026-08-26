<?php
$nome = "Rosemeire";
$j = 0;
// CONTADOR; CONDICAO; INCREMENTO/DECREMENTO
for ($i = 0; $i <= 10; $i++) {
    if ($i == 4) {
        echo $nome . "<br>";
        $i++;
    }
    echo "Testando for $i <br>";
}
