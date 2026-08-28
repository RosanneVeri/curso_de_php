<?php
$arr = [1, 2, 3];
$arr1 = [2, 4, 6];
$diff = array_diff($arr1, $arr);
print_r($diff);

$arr3 = [4, 6];
$diff2 = array_diff($arr1, $arr, $arr3) ;
print_r($diff2);
