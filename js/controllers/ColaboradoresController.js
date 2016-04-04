app.controller('ColaboradoresListController', ['$scope', '$http', function ($scope, $http) {

    $http.get('api/colaboradores/').success(function (data) {
        $scope.tableData = data.result;
    });

}]);


app.controller('ColaboradoresCreateController', ['$scope', '$http','$location', function ($scope, $http,$location) {
    $http.get('api/empresas/').success(function (data) {
        $scope.empresasDropdown = data.result;
    });

    $scope.save = function(){
        $http.post("api/colaboradores/", $scope.colaborador).success(function(data, status, headers){
            $location.path("/colaboradores/list");
        });
    }
}]);

app.controller('ColaboradoresDeleteController', ['$scope', '$http','$routeParams', '$location', function ($scope, $http, $routeParams, $location) {
    $scope.delete = function(){
        $http.delete("api/colaboradores/id/" + $routeParams.id).success(function(data, status, headers){
            $location.path("/colaboradores/list");
        });
    }
}]);
