<?php
require_once("../conexao.php");





    //         if($acionar == "solicitar") {
    //             if($objPessoa->getGravarSolicitacao()) {
    //             $msgm = "Solicitação enviada com sucesso";
    //         }
    //         else {
    //             $msgm = $objPessoa->getErro();
    //         }
    //     }
    // }

   

?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">

   <script language="jscript" type="text/javascript">

    function fnValidar()
    {
        if(document.fmValidar.rmaluno.value == ''){
            alert('Por favor digite seu RM');
            document.fmValidar.rmaluno.focus();
        }
        else if(document.fmValidar.nomeobjeto.value == ''){
            alert('Por favor digite o nome da marca do objeto');
            document.fmValidar.nomeobjeto.focus();
        }
        else if(document.fmValidar.descicaoobjeto.value==''){
            alert('Digite algo na descrição pra validarmos seu item')
            document.fmValidar.descicaoobjeto.focus();
        }
        else {
            return true;
            // document.fmValidar.action = 'solicitacaoobjeto.php?acionar='+menu;
            //         document.frmCadastrar.submit();
        }
        return false;
  
            }


                
</script>
</head>

<body>
    <!-- MENU -->
    <div class="navbar-fixed">
        <nav class="espacamento-menu font-menu" id="menubar">
            <div class="nav-wrapper">
                <a id="texto-menu" class="brand-logo center hide-on-med-and-down">A.P.E</a>
                <a href="index.php" class="brand-logo"><img src="../img/logo3.png" height="65px"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../inicio.php">Home</a></li>
                    <!-- <li><a href="#missao">Missão</a></li>
                    <li><a href="#funcionalidades">Funcionalidades</a></li>
                    <li><a href="#pesquisa">Pesquisa</a></li>
                    <li><a href="#dados">Dados</a></li>
                    <li><a href="#"><i class="material-icons tooltipped" data-position="bottom"data-tooltip="LOGIN">person</i></a></li> -->
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="index.php">Home<i class="material-icons">school</i></a></li>
        <!-- <li><a href="#funcionalidades">Funcionalidades <i class="material-icons">build</i></a></li>
        <li><a href="#pesquisa">Pesquisa <i class="material-icons">search</i></a></li>
        <li><a href="#dados">Dados <i class="material-icons">work</i></a></li>
        <li><a href="#">Entrar <i class="material-icons">person</i></a></li> -->
    </ul>
    <div class="input-field col s3 container">
        <form name="fmValidar" action="../sql/enviarsolicitacao.php" method="POST">
            <label for="nome">RM:</label>
            <input type="number" name="codusuariosolicitacao" id="codusuariosolicitacao">
            <label for="nome">Nome da marca do objeto:</label>
            <input type="text" name="nomeobjeto" id="nomeobjeto">
            <label>Descrição do item para provar que é seu:</label>
            <textarea name="descicaoobjeto" id="descricaoobjeto" cols="30" rows="10"></textarea>
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria">
                <option value="">Escolha a categoria</option>
                <option value="eletronico">Eletronico</option>
                <option value="vestuario">Vestuario</option>
                <option value="material">Material escolar</option>
            </select><br>
            <label>Data da perca:</label>
            <input class="datepicker" type="date" name="data" id="data" value="">
            <label>Horario de entrada</label>
            <input type="time" name="horario" id="horario">
            <!-- <select name="situacao" id="situacao">
                <option value="achado">Achado</option>
                <option value="perdido" selected>Perdido</option>
            </select><br> -->
            <!-- <label>Responsável:</label><br>
            <input type="number"  id="responsavel" name="responsavel" placeholder=" digite um número" style="width: 150px;"><br><br> -->
            <!-- <label>Clique em escolher ficheiro para enviar a foto</label><br>
            <input type="file" name="Arquivo"><br><br> -->
            <button onclick="return fnValidar();">Solicitar</button>
        </form>
        
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
                        <li><i class="material-icons">local_phone</i> 3256-4100</li><br>
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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <!-- <script src="js/scroll_menu.js"></script> -->
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
            $('select').formSelect();
        });
    </script>
</body>

</html>