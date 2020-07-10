<?php
    session_start();

    require_once('conexao.php');

  require_once('dados_grafico.php');

?>
<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- MENU ------------------------------------------------------>
    <!-- Aqui começa o menubar ------------------------------------->
    <!-- MENU -->
    <div class="navbar-fixed">
        <nav class="espacamento-menu font-menu" id="menubar">
            <div class="nav-wrapper">
                <a id="texto-menu" class="brand-logo center hide-on-med-and-down">A.P.E</a>
                <a href="index.php" class="brand-logo"><img src="img/logo3.png" height="65px"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#missao">Missão</a></li>
                    <li><a href="#funcionalidades">Funcionalidades</a></li>
                    <li><a href="#pesquisa">Pesquisa</a></li>
                    <li><a href="#dados">Dados</a></li>
                    <?php
                    if (isset($_SESSION['login'])) {
                    ?>
                        <li><a class='dropdown-trigger' href='#' data-target='log'><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Sair">person</i></a></li>
                        <ul id='log' class='dropdown-content'>
                            <li><a href="sql/sair.php">Sair</a></li>
                        </ul>
                    <?php
                    } else {
                    ?>
                        <li><a href="paginas/login.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Entrar">person</i></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#missao">Missão <i class="material-icons">school</i></a></li>
        <li><a href="#funcionalidades">Funcionalidades <i class="material-icons">build</i></a></li>
        <li><a href="#pesquisa">Pesquisa <i class="material-icons">search</i></a></li>
        <li><a href="#dados">Dados <i class="material-icons">work</i></a></li>
        <li><a href="#">Entrar <i class="material-icons">person</i></a></li>
    </ul>
    
<!--Aqui começa o slider do site ---------------------->
          <!-- Parallax -->
     <div class="parallax-container">
        <div class="parallax"><img src="img/test1.jpg"></div>
    </div>
    <div class="divider"></div>

<!-----------------------------------Nossa missão------------------------------------------------>

    <!-- Conteudo -->
        <!-- Missão -->
        <div class="container">
            <!-- Missão -->
        <div class="section">
            <div class="row">
                <div class="col s12 l4 push-l4 center">
                    <h3 class="section scrollspy negrito" id="missao">Nossa Missão:</h3>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div id="caixa1" class="col s12 l4" style="height: 200px">
                    <h4 class="center negrito">Facilidade</h4>
                    <p>
                        Trazer facilicidade aos alunos de pode solicitar a recuperação de seus objetos perdidos, ou de registrar objetos achados aos quais não lhes pertecem no nosso sistema.
                    </p>
                </div>
                <div id="caixa2" class="col s12 l4" style="height: 200px">
                    <h4 class="center negrito">Mobilidade</h4>
                    <p>
                        A mobilidade de pode acessar o sistema APE de qualquer lugar desde que ele seja aluno da ETEC e tenha acesso à internet.
                    </p>
                </div>
                     <div id="caixa3" class="col s12 l4" style="height: 200px">
                    <h4 class="center negrito">Modernidade</h4>
                    <p> 
                        Trazer um sistema de achados e perdidos para a web para que alunos consigam fazer todo esse processo traz um apescto de moderninade para a instituição, basicamente essas são as três intenções desse sistema que resulta em um só ideal, trazer o máximo de conforto possível para todos os alunos em conseguir recuperar seus itens perdidos.

                    </p>
                    </div>
                </div>
            </div>
        </div>  
<!----- Fim de nossa missão------------------------------------------------------------->

<!--Seção ondaas-------------------------------------------------------->
 <div class="corpo">
       <div class="curved-div upper">
      <svg viewBox="0 0 1440 319">
        <path fill="#c84553" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div>  
    <div class="curved-div">
      <h1>Por que usar o APE ?</h1>
      <p>
        O APE pode facilitar sua vida totalmente, basicamente você fazer a solicitação de recuperação do seu objeto perdido de qualquer lugar, basta fazer o login no sistema.<br>
        Clique em Login no topo do site, insira seus dados e comece já a utilizar o sistema.
      </p>
      <svg viewBox="0 0 1440 319">
        <path fill="#fff" fill-opacity="1" d="M0,32L48,80C96,128,192,224,288,224C384,224,480,128,576,90.7C672,53,768,75,864,96C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </div>  
  </div>
  <!------- Fim da seção ondas--------------------------------->
  <!-------------Como Funciona--------------------------------->
        <!-- Missão -->
        <div class="container">
            <!-- Missão -->
        <h1 class="center" id="funcionalidades">Como funciona</h1> 

    <div class="row">
        <div class="col s12 m6 l3 center-align">
            <div class="card" id="caixa1">
                <div class="card-content verde">
                    <img class="responsive-img" src="img/passos/loupe.png" id="comofunciona">
                    <div class="divider"></div>
                        <!-- <h5>Passo 1</h5> -->
             <p>
            Pesquise pelo objeto perdido ou registre o objeto encontrado em nosso sistema.
          </p>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l3 center-align">
      <div class="card" id="caixa2">
        <div class="card-content corvermelha">
          <img class="responsive-img" src="img/passos/checklist.png" id="comofunciona">
          <div class="divider"></div>
          <!-- <h5 id="txtcard">Passo 2</h5> -->
          <p>
            Faça a solicitação do objeto perdido através do sistema, preenchendo um formulário para facilitar
            na busca do item e a provar que ele é seu.
          </p>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l3 center-align">
      <div class="card" id="caixa3">
        <div class="card-content verde">
          <img class="responsive-img" src="img/passos/stopwatch.png" id="comofunciona">
          <div class="divider"></div>
          <!-- <h5>Passo 3</h5> -->
          <p>
            Aguarde o contato do sistema para a recuperação do seu item, pode ser um processo demorado ou não,
            por isso, tenha calma.
          </p>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l3 center-align">
      <div class="card" id="caixa4">
        <div class="card-content corvermelha">
           <img class="responsive-img" src="img/passos/university.png" id="comofunciona">
           <dir class="divider"></dir>
          <!-- <h5>Passo 4</h5> -->
          <p>
            Após todo o processo, quando seu item é encontrado você será notificado, quando isso ocorrer, entre em contato com o resposável pelo gerenciamento do sistema e faça a retirada do seu item.
          </p>
        </div>
      </div>
    </div>
  </div>
        </div><br><br><br> 
        <div class="divider"></div> 
<!-------------------Fim De como funciona------------------------------>


  <!----------------------------------- Eventos da ETEC ---------------------------------------------------------------------->
          <div class="section sessaoeventos">
            <div class="row">
                <div class="col s12 l4 push-l4 center">
                    <h3 class="section scrollspy negrito">Eventos da ETEC</h3>
                </div>
            </div>
        </div>
        <div class="row sessaoeventos">
            <div class="col s12 l5 push-l1">
                <!-- <h4 class="negrito">Fique por dentro</h4> -->
                <p class="flow-text">Fique por dentro de todos os eventos da ETEC, faça parte das festas, inter-classes, apresentações de TCC e tudo mais o que a instituição oferece aos alunos.</p>
                <!-- <p>
                     Fique por dentro de todos os eventos da ETEC, faça parte das festas, inter-classes, apresentações de TCC e tudo mais o que a instituição oferece aos alunos.
                </p> -->
            </div>
            <!-- Slider -->
            <div class="col s12 l5 push-l1">

                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="img/interclasse.jpg">
                            <div class="caption center-align">
                                <!-- <h3></h3> -->
                                <h5 class="light grey-text text-lighten-3">Começam os inter classes semestrais da ETEC</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/test1.jpg">
                            <div class="caption left-align">
                                <h3>Alguma coisa</h3>
                                <h5 class="light grey-text text-lighten-3">Estou com sono!</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/test1.jpg">
                            <div class="caption right-align">
                                <h3>Alguma coisa</h3>
                                <h5 class="light grey-text text-lighten-3">Não sei !!!!!</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/test1.jpg">
                            <div class="caption center-align">
                                <h3>Alguma coisa</h3>
                                <h5 class="light grey-text text-lighten-3">O Florisvaldo e gatinho!</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       <!--  <div class="divider"></div> -->
<!-----Fim do container de Eventos da ETEC------------------------------------------------------->

<!-----Inicio da Pesquisa ------------------------------------>
<div>
          <div class="section">
            <div class="row">
                <div class="col s12">
                    <h3 id="pesquisa" class="section scrollspy center negrito">Pesquisa</h3>
                </div>
            </div>
            <!-- Filtros -->
      <!--       <div class="row">
                <div class="col s6">
                    <p>Filter por:</p>
                    <a class='dropdown-trigger btn black' href='#' data-target='btn_categoria'>Categoria</a>
                    <ul id='btn_categoria' class='dropdown-content black'>
                        <li><a class="white-text" href="#!">Eletronicos</a></li>
                        <li><a class="white-text" href="#!">Vestuario</a></li>
                        <li><a class="white-text" href="#!">Material</a></li>
                    </ul>

                    <a class='dropdown-trigger btn black' href='#' data-target='btn_data'>Data</a>
                    <ul id='btn_data' class='dropdown-content black'>
                        <li><a class="white-text" href="#!">2019</a></li>
                        <li><a class="white-text" href="#!">2020</a></li>
                    </ul>
                </div>

                <div class="col s6 right-align">
                    <br><br>
                    <a class='dropdown-trigger btn black' href='#' data-target='btn_ordenar'>Ordenar por:</a>
                    <ul id='btn_ordenar' class='dropdown-content black'>
                        <li><a class="white-text" href="#!">Mais antigo</a></li>
                        <li><a class="white-text" href="#!">Mais recente</a></li>
                        <li><a class="white-text" href="#!">Perido noturno</a></li>
                        <li><a class="white-text" href="#!">Perido matutino</a></li>
                    </ul>
                </div>

            </div> -->

        </div>
        <!-- Objetos -->
        <div class="section">
            <div class="row">
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed tamanho-max-min" src="./img/itens/blusafeminina.jpg">
                            <span class="card-title"><a href="./paginas/pagobj.php">Solicite retirada</a></span>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed tamanho-max-min imgobjeto" src="./img/itens/blusanike.jpg">
                            <span class="card-title"><a href="./paginas/pagobj.php">Solicite retirada</a></span>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed tamanho-max-min imgobjeto" src="./img/itens/pendrive.jpg">
                            <span class="card-title"><a href="./paginas/pagobj.php">Solicite retirada</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed tamanho-max-min imgobjeto" src="./img/itens/celular.jpg">
                            <span class="card-title"><a href="./paginas/pagobj.php">Solicite retirada</a></span>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed tamanho-max-min imgobjeto" src="./img/itens/bonenike.jpg">
                            <span class="card-title"><a href="./paginas/pagobj.php">Solicite retirada</a></span>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img class="materialboxed tamanho-max-min imgobjeto" src="./img/itens/bone.jpg">
                            <span class="card-title"><a href="./paginas/pagobj.php">Solicite retirada</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>
<!------Fim da Pesquisa---------------------------------------> 
        <div class="divider"></div>
        <!-- Dados -->
        <div class="row">
            <div class="col s12">
                <h3 id="dados" class="section scrollspy center negrito">Dados</h3>
            </div>
        </div>

        <div class="row">
            <div id="caixa5" class="col s12 l6">
                <!-- <h4 class="negrito">Titulo</h4> -->
                <p class="flow-text">Dados de itens achados e perdidos, nossos dados são levantados diretamente do banco de dados do próprio sistema,
                    nós da APE queremos sempre manter vocês informados e atualizados sobre as vantagens de usar o nosso site.

                </p>
            </div>
            <div class="col s12 l6">
                <!-- Grafico -->
                <canvas id="grafico1" width="200" height="100"></canvas>
                <script>
                    var ctx = document.getElementById('grafico1').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Perdidos', 'Achados'],
                            datasets: [{
                                label: 'Objetos perdido e achados.',
                                // Exibi o valor pelo PHP
                                data: [<?php echo $perdido ?>, <?php echo $achado?>],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(3, 100, 3, 0.521)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(3, 100, 3, 0.521)'
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        }
                    });
                </script>
            </div>
        </div>
    



    <!-- Rodapé -->
    <footer class="page-footer espacamento-menu" id="gradientevermelho">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">A.P.E</h5>
                    <p class="grey-text text-lighten-4">Todos os direitos reservados.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contato:</h5>
                    <ul>
                        <li><i class="material-icons">local_phone</i> 3256-4100</li><br>
                        <li><i class="material-icons">email</i>A.P.E_etechorto@sp.gov.com</li>
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
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/scroll_menu.js"></script>
    <script src="js/efeito_mouse.js"></script>
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