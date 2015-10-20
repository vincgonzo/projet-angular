<!DOCTYPE html>
<html>
<head>
	<title>Let's Angular</title>
	<link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
	<style type="text/css">
		.posts img {
			border-radius:10px;
			margin: 10px auto;
			display: block;
		}
	</style>
</head>
<body ng-app="MonApp">

	<div ng-show="loading">Chargement ...</div>

	<div class="navbar navbar-default">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Angular</a>
		</div>
	</div>

	<div class="container" ng-view></div>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"></script>
	<script src="https://code.angularjs.org/1.2.14/angular-animate.min.js"></script>
	<script src="https://code.angularjs.org/1.2.14/angular-route.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
	<script src="js/app.js"></script>
	<script src="js/service/post.js"></script>
	<script src="js/controller/posts.js"></script>
	<script src="js/controller/comments.js"></script>
	<script src="js/directive/directives.js"></script>
</body>
</html>