<?php

include_once("config/url.php");
include_once("config/process.php");

// limpa a mensagem
if(isset($_SESSION['msg'])){
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = '';
}

//solucao para o erro de url.php nao encontrado
//include_once __DIR__ . "/config/url.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a  class="navbar-brand" href="<?= $BASE_URL ?>index.php">
        <img  src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
      </a>
      <div>

        <div class="navbar-nav">
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
          <a class="nav-link active" id="" href="<?= $BASE_URL ?>create.php">Adionar o contato</a>
        </div>
      </div>
    </nav>
  </header> 