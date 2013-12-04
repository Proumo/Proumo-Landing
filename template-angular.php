<!DOCTYPE html>
<html ng-app="ngBindHtmlExample" id='ng-app'>
  <head>
    <meta charset="utf-8">
    <title>Proumo EventsApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <!-- Folhas de estilo -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <!-- JavaScripts -->
    <script type="text/javascript" src="assets/js/jquery/jq-1.10.2.min.js"></script>
    <!-- Angular -->
    <script src="assets/js/angular/angular.min.js"></script>
    <script src="assets/js/angular/angular-sanitize.min.js"></script>
    <!-- /Angular -->
  </head>

  <body ng-controller="app_controller" data-spy="scroll" data-target="#side-nav">

    <div class="container-narrow">

      <nav id="nav" class="navbar-fixed-top row-fluid" ng-controller="navController">
        <div class="masthead span7">
          
          <div id="side-nav">
            <ul class="nav nav-pills pull-right">
              <li class="active"><a href="#marketing-produto"> {{ nav_produto }} </a></li>
              <li><a href="#marketing-publico"> {{ nav_publico }} </a></li>
              <li><a href="#marketing-anunciante"> {{ nav_anunciante }} </a></li>
              <li><a href="#marketing-api"> {{ nav_api }} </a></li>
            </ul>
          </div>

          <!-- Btns internacionais
          <div id="btn_internacional" class="btn-group">
            <a id="btn_inter_content" class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
              pt_BR
              <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
              <li><a href="#">pt_BR</a></li>
              <li><a href="#">en_US</a></li>
              <li><a href="#">es_ES</a></li>
            </ul>
          </div>
          -->

          <h3 class="muted"> {{ mini_lead }} </h3>
        </div>
      </nav>

      <header id="marketing-produto" ng-controller="headerController">
        <div class="jumbotron">
          <div class="row">
            <img src="assets/img/logo.png">
          </div>

          <p class="lead" ng-bind-html="lead_header"></p>

          <div id="btns_sociais">
            <div id='sociais_1' class="row-fluid">
              <button class="btn btn-facebook"><i class="icon-facebook"></i> | {{ btn_facebook }} </button>
              <button class="btn btn-youtube disabled"><i class="icon-youtube"></i> | {{ btn_youtube }} </button>
              <button class="btn btn-github disabled"><i class="icon-github"></i> | {{ btn_github }} </button>
            </div>

            <div id='sociais_2' class="row-fluid">
              <button class="btn btn-twitter disabled"><i class="icon-twitter"></i> | {{ btn_twitter }} </button>
              <button class="btn btn-foursquare disabled"><i class="icon-foursquare"></i> | {{ btn_foursquare }} </button>
              <button class="btn btn-instagram disabled"><i class="icon-instagram"></i> | {{ btn_instagram }} </button>
            </div>
          </div>

          <a id='conectar' class="btn btn-large btn-success" href="#"> {{ btn_conectar }} </a>
        </div>

        <hr>
      </header>
      
      <!-- Marketing -->
      <div class="row-fluid marketing" ng-controller="marketingController"->
        
        <!-- Marketingpublico -->
        <div id="marketing-publico" class="row-fluid">
          <div class="row-fluid">
            <h1 class="span12 lead_azul_escuro_header"> {{ publico_lead_header }} </h1>
          </div>

          <div class="row-fluid">
            <div class="span4 lead_azul_escuro">
              <center>
                <i class="fi-magnifying-glass sty-pr-icon participante-icon-azul"></i>
              </center>
              <h3> {{ descubra_header }} </h3>
              <p ng-bind-html="descubra_p"></p> 
              <p><a class="btn" href="#"><i class="icon-search icon-white"></i> Descubra Agora</a></p>
            </div>

            <div class="span4 lead_roxo">
              <center>
                <i class="fi-torsos-all sty-pr-icon participante-icon-roxo"></i>
              </center>
              <h3> {{ conecte_se_header }} </h3>
              <p ng-bind-html="conecte_p">  
              </p>     
              <p><a class="btn" href="#"><i class="fi-torsos-all icon-white"></i> Conecte-se Agora</a></p>
            </div>

            <div class="span4 lead_verde">
              <center>
                <i class="fi-shopping-cart sty-pr-icon participante-icon-verde"></i>
              </center>
              <h3> {{ loja_publico_header }} </h3>
              <div ng-bind-html="loja_publico_p"></div>
              <p><a class="btn" href="#"><i class="fi-shopping-cart icon-branco"></i> Interaja agora</a></p>
            </div>

          </div>
        </div> <!-- /Marketing PUBLICO -->

        <!-- Marketing ANUNCIANTE -->
        <div id="marketing-anunciante" class="row-fluid">
          <div class="row-fluid">
            <h1 class="span12 lead_roxo_header"> {{ anunciante_lead_header }} </h1>
          </div>

          <div class="row-fluid">
            <div class="span4 lead_azul_escuro">
              <center>
                <i class="fi-price-tag sty-pr-icon anunciante-icon-azul"></i>
              </center>
              <h3> {{ promova_header }} </h3>
              <p ng-bind-html="promova_p"></p>
              <p><a class="btn" href="#"><i class="fi-price-tag icon-branco"></i> Proumova agora</a></p>
            </div>

            <div class="span4 lead_roxo">
              <center>
                <i class="fi-graph-bar sty-pr-icon anunciante-icon-roxo"></i>  
              </center>
              <h3> {{ gerencie_header }} </h3>
              <div id="lista_gerencie" ng-bind-html="gerencie_p"></div>
              <p><a class="btn" href="#"><i class="fi-graph-bar icon-branco"></i> GERENCIE AGORA</a></p>
            </div>

            <div class="span4 lead_verde">
              <center>
                <i class="fi-dollar-bill sty-pr-icon anunciante-icon-verde"></i>
              </center>
              <h3> {{ lucre_header }} </h3>
              <p ng-bind-html="lucre_p"></p>
              <p><a class="btn" href="#"><i class="fi-dollar-bill icon-branco"></i> LUcre agora</a></p>
            </div>
          </div>
        </div><!-- /Marketing ANUNCIANTE -->

        <!-- API -->
        <div id="marketing-api" class="row-fluid">
          <div class="row-fluid">
            <h1 class="span12 lead_verde_header">API</h1>
          </div>

          <div class="row-fluid">
            <div class="span4 lead_azul_escuro">
              <center>
                <i class="fi-book-bookmark sty-pr-icon api-icon-azul"></i>
              </center>
              <h3>Guia</h3>
              Nosso Guia ensina a
              <ul>
                <li>utilizar o <strong>AngularJS</strong>;</li>
                <li>integrar com <strong>redes sociais</strong>;</li>
                <li>fazer <strong>ProumoApp</strong> em 5 mins</li>  
                  <ul>
                    <li><strong>Web</strong></li>
                    <li><strong>Mobile</strong></li>
                    <li><strong>FaceApp</strong></li>
                  </ul>
              </ul>
              <p><a class="btn" href="#"><i class="fi-book-bookmark icon-branco"></i> Aprenda agora</a></p>
            </div>

            <div class="span4 lead_roxo">
              <center>
                <i class="fi-puzzle sty-pr-icon api-icon-roxo"></i>  
              </center>
              <h3>SDK DevCenter</h3>
              <p>
                <strong>ProumoSDK</strong> usa o <strong>AngularJS</strong>.<br><br>
                <strong>ProumoSDK</strong> elimina overhead com <strong>servidores</strong> 
                (de <strong>storage</strong>, de <strong>dados</strong>, de <strong>aplicação</strong>).
                Conhecimentos em <strong>WebDesign</strong> são suficientes para o dev.
              </p>
              <p><a class="btn" href="#"><i class="fi-puzzle icon-branco"></i> Desenvolva agora</a></p>
            </div>

            <div class="span4 lead_verde">
              <center>
                <i class="fi-graph-trend sty-pr-icon api-icon-verde"></i>
              </center>
              <h3>Loja Escalável</h3>
              <p>
                Ganhe <strong>escala</strong> com nossa <strong>loja de aplicativos</strong> que leva <strong>seus apps</strong>
                aos <strong>anunciantes</strong> e <strong>público alvo</strong>.<br><br>
                <strong>Comercialize</strong> com <strong>vendas unitárias</strong>, 
                <strong>assinaturas de serviços</strong> ou <strong>por interações</strong>.
              <p><a class="btn" href="#"><i class="fi-graph-trend icon-branco"></i> Escalone agora</a></p>
            </div>
          </div>
        </div><!-- /API -->

      </div>
      <!-- /Marketing -->

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- JS jQuery -->
    <script type="text/javascript" src="assets/js/jquery/jq.pnotify.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery/jq.easing.1.3.js"></script>
    <!-- /JS jQuery -->

    <!-- JS Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap-tooltip.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap-scrollspy.js"></script>
    <!-- /JS Bootstrap -->

    <!-- Meus JS -->
    <script type="text/javascript" src="assets/js/app_js/app_jq.js"></script>
    <script type="text/javascript" src="assets/js/app_js/app_angular.js"></script>
    <script type="text/javascript" src="assets/js/app_js/bootstrap_app.js"></script>
    <!-- /Meus JS -->
  </body>
</html>
