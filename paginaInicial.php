<?php
session_start();
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
} else {
    header('Location: login.html');
}
?>

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
                        <li id="logout"><a href="logout.php" class="right-align">Sair</a></li>
                        <ul id="dropdown2" class="dropdown-content">
                        <li><a href="#!">Total de Itens<span class="badge">0</span></a></li>
                        </ul>
                        <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Carrinho<i class="material-icons right">add_shopping_cart</i></a>
            
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav red lighten-2"  >
            <li><a  class="white-text" href="#home">Página Principal</a></li>
            <li><a  class="white-text" href="#make">Maquiagem</a></li>
            <li><a  class="white-text" href="#acessorios">Acessórios</a></li>
            <li><a  class="white-text" href="logout.php">Sair</a></li>
        </ul>
        <header>
                <div class="slider">
                        <ul class="slides">
                          <li>
                            <img src="img/lips.jpg">
                            <div class="caption center-align col s12 m2">
                              <h3>Para mulheres intensas!</h3>
                              <h5 class="light grey-text text-lighten-3">Descubra sua intensidade!</h5>
                            </div>
                          </li>
                          <li>
                            <img src="img/acessorios.jpg">
                            <div class="caption left-align">
                              <h3>Para mulheres romanticas!</h3>
                              <h5 class="light grey-text text-lighten-3">Desperte seu romantismo!.</h5>
                            </div>
                          </li>
                          <li>
                            <img src="img/jorja.jpg"> 
                            <div class="caption right-align">
                              <h3 >Para mulheres que criam seu estilo!</h3>
                              <h5 class="light grey-text text-lighten-3">Bad girl é para você!</h5>
                            </div>
                          </li>
                        </ul>
                </div>
        </header>
        
        <main>
            <section class="container" id="make">
                <div class="topics center-align">
                    <h3>Maquiagens</h3>
                </div>
                <div class="row">
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" data-caption="Oculos" href="#" src="img/Proporções+Batom+FPS+30.jpg">
                            </div>    
                            <div class="card-content">
                                <p>Batom vermelho!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="login.html"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" data-caption="Oculos" href="#" src="img/Proporções+Batom+FPS+30.jpg">
                                <span class="card-title black-text"> Batom </span>
                            </div>
                                    
                            <div class="card-content">
                                <p>Batom vermelho!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="login.html"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" data-caption="Oculos" href="#" src="img/Proporções+Batom+FPS+30.jpg">
                                <span class="card-title black-text"> Batom </span>
                            </div>
                                    
                            <div class="card-content">
                                <p>Batom vermelho!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" data-caption="Oculos" href="#" src="img/Proporções+Batom+FPS+30.jpg">
                                    <span class="card-title black-text"> Batom </span>
                            </div>
                                    
                            <div class="card-content">
                                <p>Batom vermelho!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" data-caption="Oculos" href="#" src="img/Proporções+Batom+FPS+30.jpg">
                                <span class="card-title black-text"> Batom </span>
                            </div>
                                    
                            <div class="card-content">
                                <p>Batom vermelho!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" data-caption="Oculos" href="#" src="img/Proporções+Batom+FPS+30.jpg">
                                <span class="card-title black-text"> Batom </span>
                            </div>
                                    
                            <div class="card-content">
                                <p>Batom vermelho!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container" id="acessorios">
                <div class="topics center-align">
                    <h3>Acessórios</h3>
                </div>

                    <div class="row">
                        <div class="col s12 m4 l4">
                            <div class="card">
                                <div class="card-image">
                                    <img class="responsive-img" data-caption="Oculos" href="#" src="img/oculos-para-ciclismo-oxer-hs14018-adulto-img.jpg">
                                    <span class="card-title black-text"> Óculos </span>
                                </div>
                            
                                <div class="card-content">
                                    <p>Oculos muito estiloso!!!</p>
                                    <input type="number" id="produto2" value="0">
                                </div>
                                <div class="card-action">
                                    <a href="#">Mais Informações</a>
                                    <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <div class="card">
                                <div class="card-image">
                                    <img class="responsive-img" href="#" src="img/oculos-para-ciclismo-oxer-hs14018-adulto-img.jpg">
                                    <span class="card-title black-text"> Óculos </span>
                                </div>
                                
                                <div class="card-content">
                                    <p>Oculos muito estiloso!!!</p>
                                    <input type="number" id="produto2" value="0">
                                </div>
                                <div class="card-action">
                                    <a href="#">Mais Informações</a>
                                    <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <div class="card">
                                <div class="card-image">
                                    <img class="responsive-img" href="#" src="img/oculos-para-ciclismo-oxer-hs14018-adulto-img.jpg">
                                    <span class="card-title black-text"> Óculos </span>
                                </div>
                                    
                                <div class="card-content">
                                    <p>Oculos muito estiloso!!!</p>
                                    <input type="number" id="produto2" value="0">
                                </div>
                                <div class="card-action">
                                    <a href="#">Mais Informações</a>
                                    <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="container">
                <div class="row">
                    <div class="col s12 m4 l4 ">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" href="#" src="img/oculos-para-ciclismo-oxer-hs14018-adulto-img.jpg">
                                <span class="card-title"> Óculos </span>
                            </div>
                                
                            <div class="card-content">
                                <p>Oculos muito estiloso!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4 ">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" href="#" src="img/oculos-para-ciclismo-oxer-hs14018-adulto-img.jpg">
                                <span class="card-title"> Óculos </span>
                            </div>
                                    
                            <div class="card-content">
                                <p>Oculos muito estiloso!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4 ">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" href="#" src="img/oculos-para-ciclismo-oxer-hs14018-adulto-img.jpg">
                                <span class="card-title"> Óculos </span>
                            </div>
                                        
                            <div class="card-content">
                                <p>Oculos muito estiloso!!!</p>
                                <input type="number" id="produto2" value="0">
                            </div>
                            <div class="card-action">
                                <a href="#">Mais Informações</a>
                                <a class="waves-effect waves-light btn-large" href="#"><i class="material-icons right">add_shopping_cart</i>Adicionar ao</a>
                            </div>
                        </div>
                    </div>
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