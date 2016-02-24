var myApp = angular.module('myApp', ['angular-toArrayFilter']);
    myApp.controller('productCtrl', function ($scope, $http) {
        $http.get('api').success(function(data) {
            console.log(data);
                $scope.items = data;
            });
        $scope.orderProp = 'product_id';
        $scope.latest = 6;
    }
);