<?php
$arr = range(10, 45);

foreach ($arr as $item) {
    $item += 6;
    if ($item > 30) {
        echo "O número $item é muito alto<br> ";
    } else {
        echo $item . " - <br>";
    }
}
