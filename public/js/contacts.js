angular.module('contacts',[])
.config(function($routeProvider)
{
	$routeProvider
	.when('/contacts/:index',{
		templateUrl:'edit.html',
		controller:'Edit'
	})
	.when('/add',{
		templateUrl:'edit.html',
		controller:'Add'
	})
	.when('/delete/index',{
		templateUrl:'edit.html',
		controller:'Delete'
	})
	.when('/'){
		templateUrl:'list.html'
	});
})
.controller('Contacts',function($scope){

	$scope.contacts =[
	{ name:'tom',number:'2345'},
	{name:'ram',number:'number'}];
})
.controller('Edit',function($scope,$routeParams){
	$scope.contact = $scope.contacts[$routeParams.index];
	$scope.index = $routeParams.index;
});
.controller('Add',function($scope,$routeParams){
	 var length = $scope.contacts.push({
		name:'new contact',
		number:''
	});
	 $scope.contact = $scope.contacts[length -1];
	 $scope.index = length -1 ;
});
.controller('Delete',function($scope,$routeParams,$location){	
 		$scope.contacts.splice($routeParams,1);
 		$scope.path('/').replace(); 
});