var myApp = angular.module('myApp', ['angular-toArrayFilter','angularUtils.directives.dirPagination']);
myApp.controller('productCtrl', function ($scope, $http) {
        $http.get("api").then(function (response) {
            console.log(response);
            $scope.items = response.data;
            $scope.orderProp = 'product_id';
            $scope.latest = 6;
            /*var pagesShown = 1;
            var pageSize = 3;
            $scope.paginationLimit = function(data) {
                return pageSize * pagesShown;
            };
            $scope.hasMoreItemsToShow = function() {
                return pagesShown < ($scope.items.length / pageSize);
            };
            $scope.loadMore = function() {
                pagesShown = pagesShown + 1;
            };*/
        });
    }
);