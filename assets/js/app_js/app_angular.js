// Vari?veis que guardam os JSON de Locale para que faça cache do JSON
var json_pt_br;
var json_en_us;
var json_es_es;
var nome_marca = 'Proumo';

angular.module('ngBindHtmlExample', ['ngSanitize'])
.controller('app_controller', ['$scope', app_controller($scope)])
.controller('navController', ['$scope', navController($scope)])
.controller('headerController', ['$scope', headerController($scope)])
.controller('marketingController', ['$scope', marketingController($scope)]);

function app_controller($scope){
	
}	

// Barra de navegação
function navController($scope){
    $scope.nav_produto = 'Produto';
    $scope.nav_publico = 'Público';
    $scope.nav_anunciante = 'Anunciante';
    $scope.nav_api = 'API';
    $scope.mini_lead = 'Proumo - Rede Social de Eventos';
}// Fim Navegação

// Header com a frase de impacto
function headerController($scope){
	//Lead header, cada p é uma parte de parte1 a parteN
    lead_header_p1 = 'Fique por dentro';
    lead_header_p2 = 'do que está rolando com';
    lead_header_p3 = 'novas formas de interação';
    lead_header_p4 = 'em';
    lead_header_p5 = 'EVENTOS!';

    $scope.lead_header = '<strong>'+lead_header_p1+'</strong> '+lead_header_p2+
                         ' <strong>'+lead_header_p3+'</strong> '+lead_header_p4+
                         '<strong> '+lead_header_p5+'</strong>';

    /* /Header */

    // Botões redes sociais
    pre_btn = 'Conecte com '
    $scope.btn_facebook = pre_btn+'Facebook';
    $scope.btn_youtube = pre_btn+'Youtube';
    $scope.btn_github = pre_btn+'GitHub';
    $scope.btn_twitter = pre_btn+'Twitter';
    $scope.btn_foursquare = pre_btn+'Foursquare';
    $scope.btn_instagram = pre_btn+'Instagram';
    /* /Botões redes sociais */

    $scope.btn_conectar = 'CONECTAR';
}// Fim Header

// Parte do marketing em geral (é o corpo da landing)
function marketingController($scope){
    $scope.nome_marca = nome_marca;

    //Parte do publico
    $scope.publico_lead_header = 'Público';

    // Descubra
    $scope.descubra_header = 'Descubra';
    descubra_p1 = 'Agora ficou fácil saber o que está rolando perto de você e de seus amigos!';
    descubra_p2 = 'Entretenimento, esportes, gastronomia, cultura... e muito mais!';

    $scope.descubra_p = descubra_p1+'<br><br> <strong>'+descubra_p2+'</strong>';
    /* /Descubra */
    
    // Conecte-se
    $scope.conecte_se_header = 'Conecte-se';
    conecte_p1 = 'Seja notificado dos eventos que';
    conecte_p1_append = 'realmente';
    conecte_p1_final = 'te interessam e nunca mais os perca!';
    conecte_p2 = 'Interaja com os eventos via';
    conecte_p2_append1 = 'celular';
    conecte_p2_append2 = 'Facebook';
    conecte_p2_append3 = 'Twitter';
    conecte_p2_append4 = '...';

    $scope.conecte_p = conecte_p1+' <strong>'+conecte_p1_append+'</strong> '+conecte_p1_final+'<br> <br> <br>'
                        +conecte_p2+' <strong>'+conecte_p2_append1+'</strong>, <strong>'+conecte_p2_append2+
                        '</strong>, <strong>'+conecte_p2_append3+'</strong>'+conecte_p2_append4;
    /* /Conecte-se */

    // Loja
    $scope.loja_publico_header = 'Loja';
    loja_publico_p1 = 'Conectado às redes sociais e com nossos Apps interaja';
    loja_publico_p2_lista_item1 = 'comprando com';
    loja_publico_p2_lista_item1_append = 'comodidade e segurança';
    loja_publico_p2_lista_item2 = 'interagindo';
    loja_publico_p2_lista_item2_append = 'com os anúncios';
    loja_publico_p2_lista_item3 = 'compartilhando os mais';
    loja_publico_p2_lista_item3_append = 'interativos e criativos';

    $scope.loja_publico_p = '<strong>'+ loja_publico_p1 +'</strong>:'+
                            '<ul><li>'+ loja_publico_p2_lista_item1 +' <strong>'+ loja_publico_p2_lista_item1_append +'</strong>;</li>'+
                            '<li><strong>'+ loja_publico_p2_lista_item2 +'</strong>'+ loja_publico_p2_lista_item2_append +';</li>'+
                            '<li>'+ loja_publico_p2_lista_item3 +' <strong>'+ loja_publico_p2_lista_item3_append +'</strong></li></ul>';
    /* /Loja */


    //Parte da Anunciante
    $scope.anunciante_lead_header = 'Anunciante';

    // ProuMova
    $scope.promova_header = 'ProuMova';
    promova_p1 = 'Anúncio';
    promova_p1_append = 'tem que ser algo';
    promova_p1_append2 = 'chato';
    promova_p2 = 'Conheça o';
    promova_p2_append = 'e';
    promova_p2_append2 = 'ProuMova';
    promova_p2_append3 = 'de';
    promova_p2_append4 = 'forma interativa';
    promova_p2_append5 = 'e';
    promova_p2_append6 = 'irreverente';
    promova_p3 = 'permite ';
    promova_p3_append = 'criar';
    promova_p3_append0 = 'e';
    promova_p3_append1 = 'publicar';
    promova_p3_append2 = 'anúncios interativos';
    promova_p3_append3 = 'Pague ';
    promova_p3_append4 = 'por';
    promova_p3_append5 ='usuários convertidos';

    $scope.promova_p =  '<strong>'+ promova_p1 +'</strong> '+ promova_p1_append +' <strong>'+ promova_p1_append2 +'</strong>?'+
                        promova_p2+' <strong>'+ nome_marca +'</strong> '+ promova_p2_append +' <strong>'+ promova_p2_append2 +'</strong> '+
                        promova_p2_append3+' <strong>'+promova_p2_append4+' </strong>'+promova_p2_append5+'<strong> '+promova_p2_append6+'</strong>.<br><br>'+
                        '<strong>'+nome_marca+'</strong> '+promova_p3+' <strong>'+promova_p3_append+'</strong> '+promova_p3_append0+
                        ' <strong>'+promova_p3_append1+' '+promova_p3_append2+'</strong>.'+' <span class="label label-important">'+promova_p3_append3+
                        '</span> '+ promova_p3_append4 +' <span class="label label-success">'+ promova_p3_append5 +'</span> <strong>!</strong>';
    /* /ProuMova */
    

    // Gerencie
    $scope.gerencie_header = 'Gerencie';
    $scope.gerencie_p1 = 'Tenha relatórios de';
    //$scope.gerencie_p1 = 'Relat?rios de capita??o';
/*
    Acompanhe e controle
                  aspectos importantes do
                  seu evento tais como
                  quantidade de convites 
                  dispon?ves, pessoas que 
                  confirmaram presen?a, rela??o
                  entre numero de homens e mulheres
                  e at? mesmo seu faturamento!

*/



    //Parte da API
}