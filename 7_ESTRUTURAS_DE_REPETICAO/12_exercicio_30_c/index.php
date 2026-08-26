<?php
$arr = [];
for ($i = 10; $i <= 20; $i++) {

    array_push($arr, $i);

    while ($i % 2 != 0) {

        echo "Impar: $i<br>";
        $i++;
    }
}
print_r($arr);
