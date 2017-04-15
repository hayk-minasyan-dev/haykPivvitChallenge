angular.module('myApp')
        .controller('ListController', ['$scope', '$http', function ($scope, $http) {
                $scope.purchaseArr = [];
                $scope.init = function () {
                    $http.get('/purchases')
                            .then(function (response) {
                                console.debug(response.data);
                                $scope.purchaseArr = response.data.purchaseArr;
                            }, function (response) {

                            });
                };
            }]);