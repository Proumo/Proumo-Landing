// Definição do módulo APP
angular.module('APP', []).
	// Definição da configuração da rota
	config(function($routeProvider){
		$routeProvider.
			// Switch case da rota
			when('/',{templateUrl:'templates/produto.html'}). // Linha de definição do Root
			when('/participante',{templateUrl:'templates/participante.html'}).
			when('/anunciante',{templateUrl:'templates/anunciante.html'}).
			when('/api',{templateUrl:'templates/api.html'}). //,controller:'nomeCtrl'
			otherwise({redirectTo:'/'})
	}).
	// Controller do produto
	controller('produtoCtrl',['$scope','$http',function($scope,$http){
            $http.get('data.js').success(function(data){
                    $scope.people=data
            })
    }]).
	// Controller do Participante
	controller('participanteCtrl',['$scope','$http',function($scope,$http){
            $http.get('data.js').success(function(data){
                    $scope.people=data
            })
    }]).
    // Controller do Anunciante
	controller('anuncianteCtrl',['$scope','$http',function($scope,$http){
            $http.get('data.js').success(function(data){
                    $scope.people=data
            })
    }]).
    // Controller da API
    controller('apiCtrl',['$scope','$http',function($scope,$http){
            $http.get('data.js').success(function(data){
                    $scope.people=data
            })
    }]);