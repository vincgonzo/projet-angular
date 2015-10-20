<div>
    <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">{{title}}</li>
    </ul>

    <div ng-hide="loading">
        <ng-tabs>
            <ng-tab title="Article">
                <h1>{{title}}</h1>
                <p>{{content}}</p>
            </ng-tab>

            <ng-tab title="{{comments.length}} Commentaires">
                <h3>{{comments.length}} Commentaires</h3>
                <div ng-test username="newComment.username">
                    <div ng-repeat="comment in comments | filter: query| orderBy: order" class="panel panel-default">
                        <ng-comment comment="comment" select="selectComment()"></ng-comment>
                    </div>    
                </div>
            </ng-tab>
        </ng-tabs>
    

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Insérer votre commentaire :</h2>
      </div>
      <div class="panel-body">
        <form ng-submit="addComment()">
            <div class="form-group col-lg-10">
                <input class="form-control" type="text" placeholder="Username" ng-model="newComment.username" /><br>
                <input class="form-control" type="text" placeholder="City" ng-model="newComment.city" /><br>
                <input class="form-control" type="text" placeholder="Email" ng-model="newComment.email" /><br>
                <input class="form-control input-lg" type="text" placeholder="Your Comment ..." ng-model="newComment.content">
            </div>    
            <div class="form-group col-lg-10">    
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>   
        </form>
      </div>
    </div>
</div>