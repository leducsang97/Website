angular
    .module('ngCribs')
    .controller('cribsController', function ($scope, cribsFactory) {
        $scope.cribs;

        cribsFactory.getCribs().then(function (response) {
            $scope.cribs = response.data;
            console.log(response.data);
        }, function (error) {
            console.log(error);
        });

        $scope.sayHello = function () {
            console.log("Hello");
        };
    });
