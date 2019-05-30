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
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav red lighten-2"  >
            <li><a  class="white-text" href="#home">Página Principal</a></li>
            <li><a  class="white-text" href="#make">Maquiagem</a></li>
            <li><a  class="white-text" href="#acessorios">Acessórios</a></li>
        </ul>
    <?php
	
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($email == 'felipe@gmail.com') {
        
        if($password == '12345'){
            
            session_start();
            $_SESSION['email'] = 'felipe@gmail.com';
            $_SESSION['password'] = '12345';
            header('Location: paginaInicial.php');
            
        } else {
            echo "<br><br><br><br><center><h1><strong>Senha incorreta!!</strong></h1></center>";
        }
    } else {
        echo "<br><br><br><br><center><h1><strong>Usuário incorreto!!</strong></h1></center>";
    }

?>
        <main>
            <section>
                <div>
                    <h3 class="center-align">Login</h3>
                    <p class="center-align">Faça o login para continuar.</p>
                </div>
                <div class="row">
                    <form class="col s12 m4" action="validaLogin.php" method="POST">
                        <div class="row">
                            <div class="input-field col s12 offset-s12">
                                <input placeholder="Digite seu email" id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 offset-s12">
                                <input placeholder="Digite sua senha" id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light col s4 offset-s12" type="submit" name="action" id="btn-submit">Entrar</button>
                        </div>  
                    </form>
                </div>
                <div class="row">    
                    <p class="center-align">Se você não tem cadastro, cadastre-se aqui:</p>
                    <a class="waves-effect waves-light btn col s2 offset-l5">Cadastrar</a>
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