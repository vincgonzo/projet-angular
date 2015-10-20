app.factory('Post', function($http, $q){
	var factory = {
			posts: false,
			find : function (options){
				var deferred = $q.defer();
				if (factory.posts !== false) {
					deferred.resolve(factory.posts);
				}else {
					$http.get("posts.json")
						.success(function(data, status){
							factory.posts = data;
							deferred.resolve(factory.posts);
						}).error(function(data, status){
							deferred.reject("Impossible de ce connecter aux données");
						})
				};
				return deferred.promise;
			},
			get: function(id) {
				var deferred = $q.defer();
				var post = {};
				var posts = factory.find().then(function(posts){
					angular.forEach(factory.posts, function(value, key) {
					  	if (value.id == id) {
					  		post = value;
					  	}
					});
					deferred.resolve(post);
				}, function(msg) {
					deferred.reject(msg);
				})
				return deferred.promise;
			},
			add: function(comment){
				var deferred = $q.defer();
				/*
					Il faudrait ici ouvrir la connexion au serveur pour y intégrer les nouveaux comments.
				*/
				deferred.resolve();
				return deferred.promise;
			}
	}
	return factory;
})