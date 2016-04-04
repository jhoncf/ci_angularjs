var app = angular.module("app", [
    'ngRoute'
]);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.

        when('/empresas/list', {
            templateUrl: 'views/empresas/list.html',
            controller: 'EmpresasListController'
        }).
        when('/empresas/create', {
            templateUrl: 'views/empresas/form.html',
            controller: 'EmpresasCreateController'
        }).
        when('/empresas/delete/:id', {
            templateUrl: 'views/empresas/delete.html',
            controller: 'EmpresasDeleteController'
        }).

        when('/colaboradores/list', {
            templateUrl: 'views/colaboradores/list.html',
            controller: 'ColaboradoresListController'
        }).
        when('/colaboradores/create', {
            templateUrl: 'views/colaboradores/form.html',
            controller: 'ColaboradoresCreateController'
        }).
        when('/colaboradores/delete/:id', {
            templateUrl: 'views/colaboradores/delete.html',
            controller: 'ColaboradoresDeleteController'
        }).

        otherwise({
            redirectTo: '/colaboradores/list'
        });
    }]);