eventApp.factory('eventData',function($http){

	return {
		getEvent :function() {
			$http({method:'GET',url:'data/event/1'}).
			success(function(data,status,headers,config){

			})
			error(function(data,status,headers,config){

			});
		}
	};
});