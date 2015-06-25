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

</body>
</html>