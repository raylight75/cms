angular.module('myApp', []).controller('productCtrl', function ($scope, $http) {
        $http.get('/livesearch').
            success(function (data) {
                $scope.items = data;
            });
        error(function(data) {
        });
        $scope.orderProp = 'product_id';
        $scope.latest = 6;
    }
);