<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title> STORE 2.0 </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <div class="navbar-fixed">  
            <nav role="navigation">
                <div class="nav-wrapper container">
                    <a href="index.html" class="brand-logo">BAD GIRL STORE </a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active" id="home"><a href="#home">Página Principal</a></li>
                        <li id="make"><a href="#make">Maquiagem</a></li>
                        <li id="acessorios"><a href="#acessorios">Acessórios</a> </li>
                        <li><a href="login.php">Login</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav red lighten-2"  >
            <li><a  class="white-text" href="#home">Página Principal</a></li>
            <li><a  class="white-text" href="#make">Maquiagem</a></li>
            <li><a  class="white-text" href="#acessorios">Acessórios</a></li>
            <li><a  class="white-text" href="login.php">Login</a></li>
        </ul>
<?php

$nome = "nome";
$email = "email";
$senha = "senha";
$erro = 0;


?>
        <main>
            <section>
                <div>
                    <h3 class="center-align">Cadastro</h3>
                </div>
                <div class="row">
                    <form class="col s12 m6 l6 offset-l3 offset-m3" action="cadastrausuario.php" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira seu nome completo" id="nome" name="nome" type="text" class="validate" required>
                            <label for="first_name">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira seu email" id="email" name="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira sua senha" id="senha" name="senha" type="password" class="validate" required>
                            <label for="password">Senha</label>
                            </div>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light col s12 m6 l6 offset-l3 offset-m3" type="submit" id="btn-submit" name="action">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Alguma Informação util </h5>
                        <p class="grey-text text-lighten-4">Volte sempre!</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            </ul>
                        </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright Raiany de Souza
                    <a class="grey-text text-lighten-4 right" href="#!">Mais links</a>
                </div>
            </div>
        </footer>
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <!--Materialize-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
         <script src="js/script.js"></script>
    </body>
</html>