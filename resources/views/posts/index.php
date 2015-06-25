<!DOCTYPE html>
<html >
<head>
<title>Simple app</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js">
</script>
<script>
	angular.module('app',[]);
</script>
</head>

<body>
<div ng-app='app'>
<input ng-model="title" type="text" placeholder="Title ">
{{ title }}
<form ng-controller="SomeController">
<input type="checkbox" ng-model="youCheckedIt">
</form>


</ul>
<form name="signup_form" novalidate ng-submit="signupForm()">
<fieldset>
<legend>Signup</legend>
<button type="submit" class="button radius">Submit</button>
</fieldset>
</form>
<div class="row">
<div class="large-12 columns">
<label>Your name</label>
<input type="text"
placeholder="Name"
name="name"
ng-model="signup.name"
ng-minlength=3
ng-maxlength=20 required />
<div class="error"
ng-show="signup_form.name.$dirty && signup_form.name.$invalid">
<small class="error"
22 http://foundation.zurb.comFilters
53
ng-show="signup_form.name.$error.required">
Your name is required.
</small>
<small class="error"
ng-show="signup_form.name.$error.minlength">
Your name is required to be at least 3 characters
</small>
<small class="error"
ng-show="signup_form.name.$error.maxlength">
Your name cannot be longer than 20 characters
</small>
</div>
<div class="row">
<div class="large-12 columns">
<label>Your email</label>
<input type="email"
placeholder="Email"
name="email"
ng-model="signup.email"
ng-minlength=3 ng-maxlength=20 required />
<div class="error"
ng-show="signup_form.email.$dirty && signup_form.email.$invalid">
<small class="error"
ng-show="signup_form.email.$error.required">
Your email is required.
</small>
<small class="error"
ng-show="signup_form.email.$error.minlength">
Your email is required to be at least 3 characters
</small>
<small class="error"
ng-show="signup_form.email.$error.email">
That is not a valid email. Please input a valid email.
</small>
</div>
</div>
<script>
app.directive('ensureUnique', function($http) {
return {
require: 'ngModel',
link: function(scope, ele, attrs, c) {
scope.$watch(attrs.ngModel, function(n) {
if (!n) return;
$http({
method: 'POST',
url: '/api/check/'+attrs.ensureUnique,
data: {'field': attrs.ensureUnique}
}).success(function(data) {
c.$setValidity('unique', data.isUnique);
}).error(function(data) {
c.$setValidity('unique', false);
});
});
}
}
});
</script>

<form name="signup_form" novalidate
ng-submit="signupForm()"
ng-controller="signupController">
<fieldset>
<legend>Signup</legend>
<div class="row">
<div class="large-12 columns">
<label>Your name</label>
<input type="text"
placeholder="Name"
name="name"
ng-model="signup.name"
ng-minlength=3
ng-maxlength=20 required />
<div class="error"
ng-show="signup_form.name.$dirty && signup_form.name.$invalid &&
signup_form.submitted">
<small class="error"
ng-show="signup_form.name.$error.required">
Your name is required.
</small>
<small class="error"
ng-show="signup_form.name.$error.required">
Your name is required.
</small>
<small class="error"
ng-show="signup_form.name.$error.minlength">
Your name is required to be at
least 3 characters
</small>
<small class="error"
ng-show="signup_form.name.$error.maxlength">
Your name cannot be longer than
20 characters
</small>
</div>
</div>
</div>57
Filters
<button type="submit" >Submit</button>
</fieldset>
</form>


</body>
</html>