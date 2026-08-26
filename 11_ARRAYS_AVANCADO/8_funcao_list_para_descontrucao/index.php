<?php
$pessoa = ["Matheus", 28, "Verde", "Programador"];
print_r($pessoa);
echo "<br>";
list($nome, $idade, $profissao, $corDeOlhos) = $pessoa;
echo "$nome<br> $idade<br> $profissao<br> $corDeOlhos<br>";
