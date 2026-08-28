<?php
$arr = ['banana', 'maca', 'morango', 'pessego', 'uva', 'ameixa', 'abacate'];

if (in_array("batata", $arr)) {
    echo "Há o item no array no if1!<br>";
} else {
    echo "Não há o item no array no if1!<br>";
}

if (in_array("abacate", $arr)) {
    echo "Há o item no array no if2!<br>";
} else {
    echo "Não há o item no array no if2!<br>";
}
