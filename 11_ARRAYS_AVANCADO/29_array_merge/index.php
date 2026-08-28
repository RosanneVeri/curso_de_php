<?php
//$arr = [1, 6, 5, 79, 10, 12.5, 17, "teste"];
$arr = [1, 6, 5, 79, 10, 12.5, 17];
echo '<br>';
$arr1 = [1, 6, 5, 97, 10, 12.5, 17];
echo '<br>';
$arr2 = [1, 6, 15, 9, 101, 12.5];
echo '<br>';


$arrMerge = array_merge($arr, $arr1, $arr2);
print_r($arrMerge);
echo '<br>';
$soma = array_sum($arrMerge);
print_r($soma);
