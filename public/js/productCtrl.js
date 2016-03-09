var myApp = angular.module('myApp', ['angular-toArrayFilter','angularUtils.directives.dirPagination']);
myApp.controller('productCtrl', function ($scope, $http) {
        $http.get("api").then(function (response) {
            console.log(response);
            $scope.array = response.data;
            $scope.items = [];
            angular.forEach($scope.array, function(key) {
                $scope.items.push(key);
            });
            $scope.orderProp = 'product_id';
            $scope.latest = 6;
            //console.log($scope.items);
            //$scope.items = response.data;//for toArrayFilter
            var pagesShown = 1;
            var pageSize = 3;
            $scope.paginationLimit = function(data) {
                return pageSize * pagesShown;
            };
            $scope.hasMoreItemsToShow = function() {
                return pagesShown < ($scope.items.length / pageSize);
            };
            $scope.loadMore = function() {
                pagesShown = pagesShown + 1;
            };
        });
    }
);
