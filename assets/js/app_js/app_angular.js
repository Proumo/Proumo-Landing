// Variáveis que guardam os JSON de Locale para que faça cache do JSON
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
/*
    $scope.lead_header = '<strong>'+lead_header_p1+'</strong> '+lead_header_p2+
                         ' <strong>'+lead_header_p3+'</strong> '+lead_header_p4+
                         '<strong> '+lead_header_p5+'</strong>';
*/
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



















































































































































































