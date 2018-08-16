angular
    .module('ngMomos')
    .controller('momosController', function ($scope) {
        $scope.momos = [{

            "type": "Condo",
            "price": "40000",
            "description": "Good"

        }];
    
        console.log("hello");

        //        cribsFactory.getMomo().then(function (response) {
        //            $scope.momo = response.data;
        //            console.log(response.data);
        //        }, function (error) {
        //            console.log(error);
        //        });
        //
        //        $scope.sayHello = function () {
        //            console.log("Hello");
        //        };
    });
