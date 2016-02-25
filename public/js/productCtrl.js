var myApp = angular.module('myApp', ['angular-toArrayFilter']);
myApp.controller('productCtrl', function ($scope, $http) {
        $scope.$watch('products', function () {
            fetch();
        });
        function fetch() {
            $http.get("api").then(function (response) {
                console.log(response);
                $scope.items = response.data.data;
                $scope.orderProp = 'product_id';
                $scope.latest = 6;
            });
        }
    }
);