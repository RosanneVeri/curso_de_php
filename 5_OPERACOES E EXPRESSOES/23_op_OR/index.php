<?php

$a = 10;
$b = 15;
$c = "teste";

if (5 > 2 || 1 < 2) {
    echo "true e true if1";
}
if (1 > 2 || 1 < 2) {
    echo "false e true if2";
}
if (5 > 2 || 1 > 2) {
    echo "true e false if3";
}

if (5 < 2 || 1 > 2) {
    echo "false e false if4";
}
if ((5 > 2 || 1 < 2) || (10 > 15 && 11 > 2)) {
    echo "true e false if5";
}
