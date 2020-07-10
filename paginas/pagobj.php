<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>

<body>
    <!-- MENU -->
    <div class="navbar-fixed">
        <nav class="espacamento-menu font-menu" id="menubar">
            <div class="nav-wrapper">
                <a id="texto-menu" class="brand-logo center hide-on-med-and-down">Solicitação do objeto</a>
                <a href="index.php" class="brand-logo"><img src="../img/logo3.png" height="65px"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../inicio.php">Home | </a></li>
                   <!--  <li><a href="#"><i class="material-icons tooltipped" data-position="bottom"
                                data-tooltip="LOGIN">person</i></a></li> -->
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Entrar <i class="material-icons">person</i></a></li>
    </ul>

    <div class="container"><br><br>
        <div class="row">
            <div class="col s12 l7">
                <img class="responsive-img materialboxed" src="../img/informacoes.jpg">
            </div>

            <div class="col s12 l5">
                <!-- <h3>Informações sobre a solicitação</h3> -->
                <p>Seja bem vindo a página de informações de solicitação de retirada, clique em solicitar para ir para a página de retirada, lembre-se de ser especifico, pois você tem que apresentar argumentos para provar que esse item é realmente seu!</p>
            </div>

        </div>

        <div class="divider"></div>

        <div class="section">
            <div class="row center">
                <div class="col s12 l4">
                   <a href="solicitacaoobjeto.php"><button class="btn black text-white">Solicitar</button></a> 
                </div>
                <!-- <div class="col s12 l4">
                    <button class="btn black text-white">Mais Informações</button>
                </div> -->
                <!-- <div class="col s12 l4">
                    <button  class="btn black text-white">Ajuda</button>
                </div> -->
            </div>
        </div>
    </div>


    <!-- Rodapé -->
    <footer class="page-footer espacamento-menu" id="gradientevermelho">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">A.P.E</h5>
                    <p class="grey-text text-lighten-4">Eu não sei nada para colocar aqui, blz</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contato:</h5>
                    <ul>
                        <li><i class="material-icons">local_phone</i> 3256-4100</li>
                        <li><i class="material-icons">email</i> A.P.E_etechorto@sp.gov.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">Centro Paula Souza</a>
            </div>
        </div>
    </footer>



       <script src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script src="../js/scroll_menu.js"></script>
    <script src="../js/efeito_mouse.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
            $('.parallax').parallax();
            $('.slider').slider();
            $('.scrollspy').scrollSpy({
                throttle: 500
            });
            $('.dropdown-trigger').dropdown();
            $('.tooltipped').tooltip();
            $('.materialboxed').materialbox();
        });
    </script>
</body>

</html>