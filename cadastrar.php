<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "partials/cabecalho.php" ?>
    <title>Cadastrar filmes</title>
</head>
<body>
    <nav class="nav-extended blue lighten-3">
        <div class="nav-wrapper">
        <ul id="nav-mobile" class="right">
            <li class="active"><a href="galeria.php" >Galeria</a></li>
            <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
        </ul>
        </div>
        <div class="nav-header center">
        <h1 >Locadora K7</h1>
        </div>
    </nav>
    <div class="row">
        <form action="inserirFilme.php" method="POST">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filmes</span>
    
                        <!--input titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Título do filme</label>
                            </div>
                        </div>
                        <!--input sinopse -->
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea  id="sinopse" class="materialize-textarea" name="sinopse" required></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>
                        <!--nota -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input  id="nota" type="number" step=".1" min="0" max="10" class="validate" name="nota" required></input>
                                <label for="nota">Nota</label>
                            </div>
                        </div>
                        <!--capa do filmes-->
                        <div class="file-field input-field">
                        <div class="btn blue lighten-2 white-text">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="poster" required>
                        </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                        <button class="waves-effect waves-light btn blue">Confimar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
