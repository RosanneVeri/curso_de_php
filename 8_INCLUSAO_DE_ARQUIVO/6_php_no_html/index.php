
<?php

include_once "backend.php";


?>

<h1> Seja bem vindo ao nosso site </h1>
<p><?= $nome ?> Veja as nossas ofertas </p>
<h2>confira nossos principais produtos:</h2>

/
<?php foreach($produtos as $produto): ?>
    
    <li><?= $produto; ?></li>
<?php endforeach ?>