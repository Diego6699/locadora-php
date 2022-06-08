<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--material icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastrar filmes</title>
</head>
<body>
    <nav class="nav-extended blue lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1 >Locadora K7</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent blue darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
                <li class="tab"><a class="active" href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filmes</span>

                    <!--input titulo -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input  id="titulo" type="text" class="validate" required>
                            <label for="titulo">Título do filme</label>
                        </div>
                    </div>
                    <!--input sinopse -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea  id="sinopse" class="materialize-textarea" required></textarea>
                            <label for="sinopse">Sinopse</label>
                        </div>
                    </div>
                    <!--nota -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input  id="nota" type="number" step=".1" min="0" max="10" class="validate" required></input>
                            <label for="nota">Sinopse</label>
                        </div>
                    </div>
                    <!--capa do filmes-->
                    <div class="file-field input-field">
                    <div class="btn blue lighten-2 white-text">
                        <span>Capa</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                    </div>
                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn blue">Button</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
