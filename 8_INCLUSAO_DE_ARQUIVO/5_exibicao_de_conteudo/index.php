<?php

$nome = "Rosa";
$idade = 35;
?>
<form action="form.php" method="post">
    <div>
        <input type="text" value="<?= $nome ?>" placeholder=" digite seu nome...">
    </div>
    <div>
        <input type="text" value="<?= $idade ?>" placeholder="digite sua idade...">
    </div>
    <input type="submit" value="Enviar">

</form>