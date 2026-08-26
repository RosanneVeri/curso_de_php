<?php
$x = 10;
$y = & $x;

echo $x;
echo "<br>";
echo $y;

$y =12;

echo "<br>";
echo $x;
echo "<br>";
echo $y;

$x = 14;

echo "<br>";
echo $x;
echo "<br>";
echo $y;
