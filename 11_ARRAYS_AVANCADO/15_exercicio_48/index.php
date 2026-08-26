<?php
$arr = ['batata', 'maca', 'pera', 'feijao', 'arroz'];

//resgarados
$removidos = array_splice($arr, 3, -1);

print_r($arr);
echo "<br>";
print_r($removidos);
