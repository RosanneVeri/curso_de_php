<?php
$arr = range(1, 20);

$arrays = (array_chunk($arr, 4));
print_r($arrays);
echo "<br>";
echo count($arrays);
