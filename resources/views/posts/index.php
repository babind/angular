<!DOCTYPE html>
<html ng-app="contacts">
  <head>
  	<meta charset="utf-8">
    <title>Contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
	
	<div ng-controller="contacts">
		<h1>Contacts</h1>

		<div ng-view></div>
	
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
<script src="js/contacts.js"></script>	
 </body>
</html>