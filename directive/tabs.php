<div class="tabs">
	<ul class="nav nav-tabs">
		<!-- la class ng-class permet d'attribuer une class css sous condition, ici que la tab soit select. -->
	  <li ng-repeat="tab in tabs" ng-click="select(tab)" ng-class="active: tab.selected"><a href="" data-toggle="tab">{{tab.title}}</a></li>
	</ul>
	<div class="tabs-content" ng-transclude></div>
</div>