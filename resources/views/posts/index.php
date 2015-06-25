<!DOCTYPE html>

<html ng-app="myApp">
<head>
<title>Simple app</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js"></script>
<script src="js/angular.js"></script>
</head>

<body>
<div my-directive
my-url="http://google.com"
my-link-text="Click me to go to Google"></div>

<h1>Wrong Way</h1>
<img src="{{imgSrc}}" />
<h1>Right way</h1>
<img ng-src="{{imgSrc}}" />

<div ng-controller="EquationController">
<input type="text"
ng-model="equation.x"
ng-change="change()" />
<code>{{ equation.output }}</code>
</div>

<form name="signup_form"
ng-controller="FormController"
ng-submit="submitForm()" novalidate>
<div ng-repeat="field in fields"
ng-form="signup_form_input">
<input type="text"
name="dynamic_input"
ng-required="field.isRequired"
ng-model="field.name"
placeholder="{{field.placeholder}}" />
<div
ng-show="signup_form_input.dynamic_input.$dirty &&
signup_form_input.dynamic_input.$invalid">
<span class="error"
ng-show="signup_form_input.dynamic_input.$error.required">
The field is required.Built-In Directives
97
</span>
</div>
</div>
<button type="submit"
ng-disabled="signup_form.$invalid"
	Submit all
</button>
</form>

</body>
</html>