<!DOCTYPE html>
<html ng-app>
<head>
<title>Simple app</title>
<script
src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js">
</script>
</head>
@yield('content')
<body>
<input ng-model="name" type="text" placeholder="Your name">
<h1>Hello {{ name }}</h1>
</body>
</html>