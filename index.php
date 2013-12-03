<!DOCTYPE html>
<html ng-app id='ng-app'>
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
          <!--<button  class="btn btn-info"><i class="icon-search"></i> pt_BR</button>-->

          <h3 class="muted"> {{ mini_lead }} </h3>
        </div>
      </nav>

      <header id="marketing-produto" ng-controller="headerController">
        <div class="jumbotron">
          <div class="row">
            <img src="assets/img/logo.png">
          </div>

          <p class="lead"> 
              <strong>{{ lead_p1 }}</strong> {{ lead_p2 }} <strong>{{ lead_p3 }}</strong> 
              {{ lead_p4 }} <strong>{{ lead_p5 }}</strong> 
          </p>

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

          <a id='conectar' class="btn btn-large btn-success" href=""> {{ btn_conectar }} </a>
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
              <p> {{ descubra_p1 }} <br><br> <strong>{{ descubra_p2 }} </strong> </p> 
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_roxo">
              <center>
                <i class="fi-torsos-all sty-pr-icon participante-icon-roxo"></i>
              </center>
              <h3> {{ conecte_se_header }} </h3>
              <p>  {{ conecte_p1 }} <strong>{{ conecte_p1_append1 }}</strong> {{ conecte_p1_append2 }}<br> <br> <br>
                   {{ conecte_p2 }} <strong>{{ conecte_p3 }}</strong>, <strong>{{ conecte_p4 }}</strong>, <strong>{{ conecte_p5 }}</strong>.
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_verde">
              <center>
                <i class="fi-shopping-cart sty-pr-icon participante-icon-verde"></i>
              </center>
              <h3> {{ loja_publico }} </h3>
               <strong>{{ loja_publico_p1 }}:</strong> 
                <ul>
                  <li> {{ loja_publico_p2 }} <strong>{{ loja_publico_p2_append }}</strong>; </li>
                  <li> <strong>{{ loja_publico_p3_prepend }}</strong> {{ loja_publico_p3 }}; </li>
                  <li> {{ loja_publico_p4 }} <strong>{{ loja_publico_p4_append }}</strong>. </li>
                </ul> 
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

          </div>
        </div> <!-- /Marketingpublico -->

        <!-- MarketingAnunciante -->
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
              <p> <strong> {{ nome_marca }} </strong> {{ promova_p1 }} <strong> {{ promova_p1_append }} </strong>. <br><br>
                  {{ promova_p2 }} <strong> {{ promova_p3 }} </strong> 
                  {{ promova_p4 }} <strong> {{ promova_p4_append }} </strong> {{ promova_p4_continua }}
              </p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_roxo">
              <center>
                <i class="fi-graph-bar sty-pr-icon anunciante-icon-roxo"></i>  
              </center>
              <h3> {{ gerencie_header }} </h3>
              <strong> {{ gerencie_p1 }} </strong>
              <div id="lista_gerencie">
                <ul>
                  <li> Impacto Social; </li>
                  <li> <strong>Gastos</strong> VS <strong>Ganhos</strong>; </li>
                  <li> <strong>Desempenho</strong> VS <strong>Tempo</strong>; </li>
                  <li> <strong>Comparativo</strong> entre an?ncios; </li>
                  <li> Diversos tipos de Rankings; </li>
                </ul>
              </div>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_verde">
              <center>
                <i class="fi-dollar-bill sty-pr-icon anunciante-icon-verde"></i>
              </center>
              <h3>Lucre</h3>
              <p>"<strong>Primeiro</strong> nossos <strong>anunciantes</strong> são <strong>pagos</strong> e <strong>depois</strong> que somos".
                  <br><br> <strong>Venda</strong> seus <strong>ingressos</strong>, crie <strong>promoções</strong>, <strong>economize tempo</strong> e <strong>dinheiro</strong> com <strong>Pruomo!</strong></p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>
          </div>
        </div><!-- /MarketingAnunciante -->

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
              <p></p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_roxo">
              <center>
                <i class="fi-puzzle sty-pr-icon api-icon-roxo"></i>  
              </center>
              <h3>SDK DevCenter</h3>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_verde">
              <center>
                <i class="fi-graph-trend sty-pr-icon api-icon-verde"></i>
              </center>
              <h3>Loja Escalável</h3>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              <p><a class="btn" href="#">View details ?</a></p>
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
    <script type="text/javascript" src="assets/js/app_js/rotas.js"></script>
    <script type="text/javascript" src="assets/js/app_js/bootstrap_app.js"></script>
    <!-- /Meus JS -->
  </body>
</html>
