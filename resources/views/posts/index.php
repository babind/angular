<!DOCTYPE html>

<html ng-app="myApp">
<head>
<title>Simple app</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js">
</script>
<script>
	angular.module('myApp', [])
.run(function($rootScope) {
// use .run to access $rootScope
$rootScope.rootProperty = 'root scope';
})
.controller('ParentController', function($scope) {
// use .controller to access properties inside `ng-controller`
// in the DOM omit $scope, it is inferred based on the current controller
$scope.parentProperty = 'parent scope';
})
.controller('ChildController', function($scope) {
$scope.childProperty = 'child scope';
// just like in the DOM, we can access any of the properties in the
// prototype chain directly from the current $scope
$scope.fullSentenceFromChild
= 'Same $scope: We can access: ' +
$scope.rootProperty + ' and ' +
$scope.parentProperty + ' and ' +
$scope.childProperty
});
</script>


</head>

<body>
<my-directive>
a</my-directive>
<h1 ng-init="greeting = 'Hello World'">
The greeting is: {{ greeting }}
</h1>

<p>We can access: {{ rootProperty }}</p>
<div ng-controller="ParentController">
<p>We can access: {{ rootProperty }}
and {{ parentProperty }}</p>
<div ng-controller="ChildController">
<p>
We can access:
{{ rootProperty }} and
{{ parentProperty }} and
{{ childProperty }}
</p>
<p>{{ fullSentenceFromChild }}</p>
</div>
</div>

</body>
</html>