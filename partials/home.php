<div ng-hide="loading">
	<div class="col-lg-5 col-lg-offset-1 posts" ng-repeat="post in posts">

		<h1>{{post.name}}</h1>

		<img src="http://lorempicsum.com/simpsons/350/200/{{$index + 1}}" alt="img" />
		<p>{{post.content}}</p>
		<p>
			<a class="btn btn-info" href="#/comments/{{post.id}}">{{post.comments.length}} Commentaires</a>
		</p>

		<hr>
	</div>		
</div>

	