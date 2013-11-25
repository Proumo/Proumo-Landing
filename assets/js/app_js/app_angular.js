// Variáveis que guardam os JSON de Locale para que faça cache do JSON
var json_pt_br;
var json_en_us;
var json_es_es;

function app_controller($scope, $http){
	
}	

function navController($scope, $http){
    $scope.txt_produto = 'Produto';
    $scope.txt_participante = 'Participante';
    $scope.txt_anunciante = 'Anunciante';
    $scope.txt_api = 'API';
}