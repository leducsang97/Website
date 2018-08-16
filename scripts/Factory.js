angular
    .module('momos')
    .factory('Factory', function($http) {
       
        
        function getMomo() {
            return $http.get('data/data.json');
        }

        return {
            getMomo: getMomo
        }
    });