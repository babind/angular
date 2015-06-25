<!DOCTYPE html>
<html >
<head>
<title>Simple app</title>
<script
src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.js">
</script>
<script>
	angular.module('app',[]);
</script>
</head>

<body>
<div ng-app='app'>
<input  type="text" placeholder="Title ">
{{title}}
</div>

</body>
</html>