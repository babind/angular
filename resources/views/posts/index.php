<!DOCTYPE html>

<html ng-app="myApp">
<head>
<title>Simple app</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js"></script>
<script src="js/angular.js"></script>
</head>

<body>
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
	<div my-directive
	my-url="http://google.com"
	my-link-text="Click me to go to Google">
	</div>

</body>
</html>