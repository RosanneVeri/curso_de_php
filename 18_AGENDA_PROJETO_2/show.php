<?php
//HEADER
include_once("templates/header.php");

//show.php mostra um contato apenas conforme passa id é passado
?>


<div id="view-contact-container">
    <?php include_once("templates/backbtn.html")?>
    <h1 id="main-title"><?= $contact["name"] ?></h1>
    <p class="bold">Telefone:</p>
    <p><?=  $contact["phone"] ?></p>
    <p class="bold">Observacoes:</p>
    <p><?= $contact["observations"] ?></p>
</div>



<?php
//footer
include_once("templates/footer.php");
?>