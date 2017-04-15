angular.module('myApp')
        .controller('CreateController', ['$scope', '$http', function ($scope, $http) {
                $scope.name = '';
                $scope.quantity = 1;
                $scope.offering_id;
                $scope.offeringArr = [];
                $scope.init = function () {
                    $http.get('/offerings')
                            .then(function (response) {
                                $scope.offeringArr = response.data.offeringArr;
                            }, function (response) {

                            });
                };
                $scope.create = function () {
                    $http.post('/purchases', {
                        customerName: $scope.name,
                        quantity: $scope.quantity,
                        offeringID: $scope.offering_id,
                    }, {})
                            .then(function (response) {
                                alert('Success');
                            }, function (response) {

                            });
                };
            }]);