<?php
print_r($_SERVER) . "<BR>";
echo $_SERVER['MYSQL_HOME'] . "<BR>";

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    echo "Está acessando localhost<br>";
}else{
    echo "Não está acessando localhost";
}
