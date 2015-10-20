
app.directive('ngComment', function(){
	return {
		scope: {
			comment: '='
		},
		restrict: 'E',
		templateUrl: 'partials/_comment.php'
	}
})

app.directive('ngTabs', function(){
	return {
		restrict: 'E',
		transclude: true,
		templateUrl: 'directive/tabs.php',
		/* il est important d'isoler le scope dans une directive sous risque de modifier le scope parent sans cela.*/
		scope: {},
		/* il est ici insérer un controller spécifique à la directive. */
		controller: function($scope){
			$scope.tabs = [];

			$scope.select = function(tab){
				angular.forEach($scope.tabs, function(t){
					t.selected = false;
				})
				tab.selected = true;
			}

			this.add = function(tab){
				if($scope.tabs.length == 0) {
					$scope.select(tab);
				}
				$scope.tabs.push(tab);
			}
		}
	}
})

app.directive('ngTab', function(){
	return {
		restrict: 'E',
		transclude: true,
		templateUrl: 'directive/tab.php',
		scope: {
			title: '@'
		},
		/* le require permet ici de faire le lien avec la directive précédante pour se servir de son controller spécifique. */
		require: '^ngTabs',
		/* ici avec l'injection du controller de la directive "parent" s'ajoute un attriubt que l'on nomme comme on veut.
			Celui ci permet d'utiliser toute les méthodes et var se trouvant dans le controller parent. */
		link: function(scope, element, attrs, tabsCrtl){
			scope.selected = false;
			tabsCrtl.add(scope);
		}
	}
})