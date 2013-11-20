// Definição do módulo APP
var app = angular.module('app', ['ngRoute'], function($routeProvider, $locationProvider){
    $routeProvider.when("/teste/:nome", {
        //Possível retirar esse controller e colocar esse controller no HTML, porém aqui fica menos poluido
        controller: 'ProdutoCtrl',
        templateUrl: 'templates/produto.html'
    });

    $routeProvider.otherwise({redirectTo: '/'});
});

app.controller("ProdutoCtrl", function($scope, $routeParams){
    $scope.user = $routeParams;
});