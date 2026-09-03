<?php


$dataA = new DateTime();

$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2026, 9, 3);
$dataC->setDate(2026, 9, 3);

$dataB->settime(01, 9, 3);
$dataC->setTime(01, 9, 3);

if ($dataB > $dataA) {
    echo "A data B é maior que a data A<br>";
}
if ($dataA < $dataB) {
    echo "A data A é maior que a data B<br>";
}
if ($dataB == $dataC) {
    echo "A data A e C são iguais <br> ";
}
