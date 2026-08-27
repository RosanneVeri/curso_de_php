<?php

$pessoas = [
    'Matheus' => '29',
    'Maria' => '19',
    'Lucas' => '30',
    'Pedro' => '29',

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">

        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach ($pessoas as $nome => $idade) { ?>
            <tr>
                <td> <?= $nome ?> </td>
                <td> <?= $idade ?> </td>

            </tr>
        <?php } ?>



    </table>

</body>

</html>