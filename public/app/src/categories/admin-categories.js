angular.module('admin-categories',[
	'ngRoute',
	'ngResource',
]);

angular.module('addmin-categories').config(['$routeProvider',function($routeProvider) {
	$routeProvider
	when('/categories',{
		templateUrl:'app/src/categories/categories-list.tpl.html',
		controller:'CategoriesListController'
	}).
	when('categories-new',{
		templateUrl:'app/src/categories/categories-new.tpl.html',
		controller : 'CategoriesNewController'
	}).
	when('categories-edit/:categoryId',{
		templateUrl:'app/src/categories/categories-edit.tpl.html',
		controller:'CategoriesEditController'
	});
}]);

angular.module('admin-categories').controller('CategoriesListController',['$scope','$location','$q','Categories',
	function($scope,$location,$q,Categories)
	{
		Categories.query(function(resp){
			$scope.categories = resp;

		},function(err){});

	$scope.delete = function(category,$index,$event){
		$event.stopPropagation();
		Categories.remove({},{
			id:category.id
		},function(response){
			$scope.categories.splice($index,1);

		},function(response){});
	}};

	$scope.edit=function(id) {
		$location.path('/categories-edit'+id);
	};
}
]);

angular.module('admin-categories').controller('CategoriesNewController',['$scope','$resource','$location',
	function($scope,$resource,$location,Categories) {
		$scope.save = function(data) {
			Categories.save({},{
				data
			},function(response) {
				$location.path('/categories');
			}, function(response){});

		};
	}
]);

angular.module('admin-categories').controller('CategoriesEditController',['$scope','$routeParams','$location','Categories',
	function($scope,$routeParams,$location,Categories) {
		$scope.categoryId = $routeParams.categoryId;

		Categories.get({
			id:$scope.categoryId
		},function(resp) {
			$scope.category = resp;
		},function(err) {
			console.log('error in fetch.')
		});

		$scope.update = function(data) {
			Categories.update({
				id:data.id,
				data:data

			},function(response) {
				$location.path('/categories');
			},function(err){
				console.log('Error occured in update.');
			});

		};
	}

]);