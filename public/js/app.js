angular.module('myApp', ['ui.router']).config(function ($stateProvider, $urlRouterProvider) {
    var initState = function () {
        $state.go('create');
    };

    $urlRouterProvider.otherwise('/');

    $stateProvider
            .state('create', {
                url: '/',
                templateUrl: "/js/views/create.html",
                cache: true,
                controller: function ($scope, $state) {
                    console.log("create");
                }
            })
            .state('list', {
                url: '/list',
                templateUrl: "/js/views/list.html",
                cache: true,
                controller: function ($scope, $state) {
                    console.log("list");
                }
            });
});