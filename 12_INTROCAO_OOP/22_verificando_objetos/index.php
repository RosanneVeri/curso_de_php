<ul>
    <li>is_object() => verifica se uma variavel é um objeto;</li>
    <li>get_class() => verifica a classe de uma classe;</li>
    <li>method_exists() => verifica se um metodo existe em um objeto;</li>
</ul>


<?php

class Humano
{

    public function falar() {}
}


$maria = new Humano;
if (is_object($maria)) {
    echo "É um objeto<br>";
} else {
    echo "não é um objeto<br>";
}
$teste = 10;
if (is_object($teste)) {
    echo "É um objeto";
} else {
    echo "não é um objeto<br>";
}


echo get_class($maria) . "<br>";

if (method_exists($maria, "falar")) {
    echo "o metodo existe<br>";
} else {
    echo "não existe o metodo<br>";
}
if (method_exists($maria, "ads")) {
    echo "o metodo existe";
} else {
    echo "não existe o metodo<br>";
}
?>