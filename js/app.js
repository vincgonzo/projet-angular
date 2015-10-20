var app = angular.module("MonApp", ['ngRoute']);
app.config(['$routeProvider',function($routeProvider) {
		$routeProvider
			.when('/', {templateUrl: 'partials/home.php',
			controller: 'PostsCtrl'})
			.when('/comments/:id', {templateUrl: 'partials/comments.php',
			controller: 'CommentsCtrl'})
			.otherwise({redirectTo : '/'});
}])