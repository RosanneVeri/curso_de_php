<?php
$a = 3;
$b = "3";


if ($a != $b) {
    echo "A é diferente de B 1 <br>";
    echo "<br>";
}
if ($a !== $b) {
    echo "A é diferente de B 2 <br>";
    echo "<br>";
}
if (false != "teste") {
    echo "A é diferente de B 1 <br>";
    echo "<br>";
}
if (false !== "teste") {
    echo "A é diferente de B 2 <br>";
    echo "<br>";
}
if (1 !== 2) {
    echo "Não é identico 1";
    echo "<br>";
}
if (1 !== "1") {
    echo "Não é identico 2";
}
