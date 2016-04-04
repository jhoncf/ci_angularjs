app.controller('EmpresasListController', ['$scope', '$http', function ($scope, $http) {

    $http.get('api/empresas/').success(function (data) {
        $scope.tableData = data.result;
    });

}]);


app.controller('EmpresasCreateController', ['$scope', '$http','$location', function ($scope, $http,$location) {
    $scope.save = function(){
        $http.post("api/empresas/", $scope.empresa).success(function(data, status, headers){
            $location.path("/empresas/list");
        });
    }
}]);

app.controller('EmpresasDeleteController', ['$scope', '$http','$routeParams', '$location', function ($scope, $http, $routeParams, $location) {
    $scope.delete = function(){
        $http.delete("api/empresas/id/" + $routeParams.id).success(function(data, status, headers){
            $location.path("/empresas/list");
        });
    }
}]);
