<?php
include_once("templates/header.php");
?>
<div class="container">
    <?php include_once("templates/backbtn.html") ?>
    <h1 id="main-title">Criando contato</h1>
    <form class="view-contact-container" id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label class="col-id" for="name">Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
        </div>
         <br>
        <div class="form-group">
            <label class="col-id" for="phone">Telefone do contato</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
        </div>
         <br>
        <div class="form-group">
            <label class="col-id" for="observations">Observacões</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Descreva o contato" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>


    </form>
</div>
<i class="fas fa-eye"></i>
<?php
include_once("templates/footer.php");
?>