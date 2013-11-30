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
              <li><a href="#marketing-participante"> {{ nav_participante }} </a></li>
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
        
        <!-- MarketingParticipante -->
        <div id="marketing-participante" class="row-fluid">
          <div class="row-fluid">
            <h1 class="span12 lead_verde_header"> {{ participante_lead_header }} </h1>
          </div>

          <div class="row-fluid">
            <div class="span4 lead_verde">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2> {{ descubra_header }} </h2>
              <p> {{ descubra_p1 }} <br><br><br> <strong>{{ descubra_p2 }} </strong> </p> 
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_azul_claro">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2> {{ participe_header }} </h2>
               <strong>{{ participe_p1 }}</strong> 
                <ul>
                  <li> {{ participe_p2 }}; </li>
                  <li> {{ participe_p3 }}; </li>
                  <li> {{ participe_p4 }} <strong>{{ participe_p4_append }}</strong>; </li>
                  <li> {{ participe_p5 }}; </li>
                  <li> {{ participe_p6 }}<strong>!</strong> </li>
                </ul> 
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_azul_escuro">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2> {{ conecte_se_header }} </h2>
              <p>  {{ conecte_p1 }} <strong>{{ conecte_p1_append1 }}</strong> {{ conecte_p1_append2 }}<br> <br>
                   {{ conecte_p2 }} <strong>{{ conecte_p3 }}</strong>, <strong>{{ conecte_p4 }}</strong>, <strong>{{ conecte_p5 }}</strong>.
              <p><a class="btn" href="#">View details ?</a></p>
            </div>
          </div>
        </div> <!-- /MarketingParticipante -->

        <!-- MarketingAnunciante -->
        <div id="marketing-anunciante" class="row-fluid">
          <div class="row-fluid">
            <h1 class="span12 lead_azul_claro_header"> {{ anunciante_lead_header }} </h1>
          </div>

          <div class="row-fluid">
            <div class="span4 lead_verde">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2> {{ promova_header }} </h2>
              <p> <strong> {{ nome_marca }} </strong> {{ promova_p1 }} <strong> {{ promova_p1_append }} </strong>. <br><br>
                  {{ promova_p2 }} <strong> {{ promova_p3 }} </strong> 
                  {{ promova_p4 }} <strong> {{ promova_p4_append }} </strong> {{ promova_p4_continua }}
              </p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_azul_claro">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2> {{ gerencie_header }} </h2>
              <strong> {{ gerencie_p1 }} </strong>
              <ul>
                <li> Impacto Social; </li>
                <li> <strong>Gastos</strong> VS <strong>Ganhos</strong>; </li>
                <li> <strong>Desempenho</strong> VS <strong>Tempo</strong>; </li>
                <li> <strong>Comparativo</strong> entre an?ncios; </li>
                <li> Diversos tipos de Rankings; </li>
              </ul>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_azul_escuro">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2>Lucre</h2>
              <p>Venda seus ingressos, crie promoções, economize tempo e dinheiro com Pruomos!</p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>
          </div>
        </div><!-- /MarketingAnunciante -->

        <!-- API -->
        <div id="marketing-api" class="row-fluid">
          <div class="row-fluid">
            <h1 class="span12 lead_azul_escuro_header">API</h1>
          </div>

          <div class="row-fluid">
            <div class="span4 lead_verde">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2>API</h2>
              <p></p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_azul_claro">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2>API</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              <p><a class="btn" href="#">View details ?</a></p>
            </div>

            <div class="span4 lead_azul_escuro">
              <center>
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=">
              </center>
              <h2>Heading</h2>
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
