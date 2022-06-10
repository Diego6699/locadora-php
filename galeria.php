<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "partials/cabecalho.php" ?>
  <title>Home</title>
  <?php

  require "./repository/FilmesRepositoryPDO.php";

  $filmesRepository = new FilmesRepositoryPDO();
  $filmes = $filmesRepository->listarTodos();
  ?>
</head>

<body>
  <nav class="nav-extended blue lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li class="active"><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>Locadora K7</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent blue darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <?php foreach($filmes as $filme):?>
      <div class="col s12 m6 l3">
        <div class="card hoverable">
          <div class="card-image">
            <img src=<?= $filme->poster?>>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $filme->nota; ?></p>
            <span class="card-title"><?= $filme->titulo; ?></span>
            <p><?= $filme->sinopse; ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
<?php if(isset($_GET["msg"])): ?>
<script>
  M.toast({
    html: '<?= $_GET["msg"]?>'
  })
</script>
<?php endif; ?>
</html>