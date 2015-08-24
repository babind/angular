angular.module('resources.categories',['ngResource','ngRoute']).factory('Categories',function($resource) {
	return $resource('/categories/:id',{
		id:'@id'
	},{
		update: {
			method:'PUT',
			transformResponse:function(data,headerFn){

			}
		}
	});
});