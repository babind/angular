  var app = angular.module('myApp', []);
    app.controller('TodosController', function($scope) {
        $scope.todos = [
            { body: 'Go to store' },
            { body: 'Finish video' }
        ];
    });