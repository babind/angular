

var app = angular.module('app',['ngRoute','ngResource','admin-categories']);

angular.module('app').config(['$routeProvider','$locationProvider','$interpolateProvider',function($routeProvider,$locationProvider,$interpolateProvider){

	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');

}
]);

angular.module('app').constant('DB_CONFIG',{
	baseUrl: configData.baseurl,
});

angular.module('app').controller('appCtrl',['$scope',function($scope) {

}]);