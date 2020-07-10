<!-- <?php
// require_once('../conexao.php');

?> -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="../js/ajax.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- MENU -->
    <div class="navbar-fixed">
        <nav class="espacamento-menu font-menu" id="menubar">
            <div class="nav-wrapper">
                <a id="texto-menu" class="brand-logo center hide-on-med-and-down">A.D.M</a>
                <a href="adm_cadastro.php" class="brand-logo"><img src="../img/logo3.png" height="65px"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
               <!--  <ul class="right hide-on-med-and-down">
                    <li><a href="#"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="LOGIN">person</i></a></li>
                </ul> -->
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Entrar <i class="material-icons">person</i></a></li>
    </ul>
    <div class="container">
        <form action="dados_cadastro.php" method="post" enctype="multipart/form-data" onsubmit="return teste1()">
            <div class="input-field col s6">
                <label for="nome">Marca do item:</label>
                <input type="text" maxlength="30" id="nome" name="nome" placeholder="pode ser sem marca porém especifique ele">
            </div>
            <div class="input-field col s6">
                <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Digite informaçõesdo objeto."></textarea>
            </div>
            <div class="input-field col s6">
                <select name="categoria" id="categoria">
                    <option disabled selected>Categoria</option>
                    <option value="Eletronico">Eletronico</option>
                    <option value="Vestuario">Vestuario</option>
                </select>
            </div>
            <div class="input-field col s6">
                <label for="data">Data de entrada</label><br>
                <input type="date" name="data" id="data">
            </div>
            <div class="input-field col s6">
                <label for="horario">Horario de entrada</label><br>
                <input type="time" name="horario" id="horario">
            </div>
            <div class="input-field col s6">
                <select name="situacao" id="situacao">
                    <option disabled selected>Situação</option>
                    <option value="Achado">Achado</option>
                    <option value="Perdido" selected>Perdido</option>
                </select>
            </div>
            <div class="input-field col s6">
                <label for="responsavel">Responsavel</label>
                <input type="number" id="responsavel" name="responsavel">
            </div>
            <input type="file" name="imagem" id="imagem">
            <input type="submit" value="Enviar">
        </form>
    </div>

<!----------- Objeto ----------------------------------------------------------------------------------->
    <h1>Objetos</h1>

    <div class="container">
        <div class="row">
        <!--     <div class="col s2">
                <p>Ordenar por</p>
            </div>
            <div class="col s3">
                <select name="" id="" onchange="return exibir(this.value)">
                    <option value="" disabled>Ordenar Por:</option>
                    <option value="Situacao">Situacao</option>
                    <option value="Nome">Nome</option>
                    <option value="ID_objeto">ID</option>
                </select>
            </div> -->
            <div class="col s2">
                <p>Digite o nome:</p>
            </div>
            <div class="col s3">
                <input type="text" onkeyup="return busca_nome(this.value)">
            </div>
        </div>
        <table id="resultado" style="border: solid 1 px">
        </table>
    </div>

       <h1>Solicitações</h1>

    <div class="container">
        <div class="row">
        <!--     <div class="col s2">
                <p>Ordenar por</p>
            </div>
            <div class="col s3">
                <select name="" id="" onchange="return exibir(this.value)">
                    <option value="" disabled>Ordenar Por:</option>
                    <option value="Situacao">Situacao</option>
                    <option value="Nome">Nome</option>
                    <option value="ID_objeto">ID</option>
                </select>
            </div> -->
            <div class="col s2">
                <p>Digite seu RM para solicitação:</p>
            </div>
            <div class="col s3">
                <input type="text" onkeyup="return busca_solicitacao(this.value)">
            </div>
        </div>
        <div>
            
        </div>
        <table id="resultado2" style="border: solid 1 px">

        </table>
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



    <script src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('select').formSelect();
            $('.dropdown-trigger').dropdown();
        });
    </script>
</body>

</html>