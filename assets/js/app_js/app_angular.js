// Variáveis que guardam os JSON de Locale para que faça cache do JSON
var json_pt_br;
var json_en_us;
var json_es_es;

function app_controller($scope, $http){
	
}	

function navController($scope, $http){
    $scope.nav_produto = 'Produto';
    $scope.nav_participante = 'Participante';
    $scope.nav_anunciante = 'Anunciante';
    $scope.nav_api = 'API';
    $scope.mini_lead = 'Proumo - Rede Social de Eventos';
}

function headerController($scope, $http){
	//Lead header
    $scope.lead_part1 = 'Fique por dentro';
    $scope.lead_part2 = 'do que está rolando e';
    $scope.lead_part3 = 'novas formas de interação';
    $scope.lead_part4 = 'em';
    $scope.lead_part5 = 'EVENTOS!';

    // Btns redes sociais
    pre_btn = 'Conecte com '
    $scope.btn_facebook = pre_btn+'Facebook';
    $scope.btn_youtube = pre_btn+'Youtube';
    $scope.btn_github = pre_btn+'GitHub';
    $scope.btn_twitter = pre_btn+'Twitter';
    $scope.btn_foursquare = pre_btn+'Foursquare';
    $scope.btn_instagram = pre_btn+'Instagram';

    $scope.btn_conectar = 'CONECTAR';

}