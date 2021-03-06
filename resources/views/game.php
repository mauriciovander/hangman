
<!DOCTYPE html>
<html lang="en" ng-app="hangman">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Hangman</title>

    <!-- Bootstrap core CSS -->
    <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/game.css" rel="stylesheet">

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <script src="/node_modules/angular/angular.min.js"></script>

    <script src="/js/angular-mocks.js" rel="stylesheet"></script>

    <script src="/js/game.js" rel="stylesheet"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container" ng-controller="gameController">

    <section class="signin" ng-show="!game_init">
        <form class="form-signin" ng-submit="gameInit();">
            <input type="text" id="player" ng-model="player.name" class="form-control" placeholder="Enter your name" required autofocus>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Start the game</button>
        </form>
        <h1>{{message}}</h1>
    </section>


    <section class="game" ng-show="game_init">
        <form class="form-play" ng-submit="tryLetter()">
            <h3 class="text-left"><span class="glyphicon glyphicon-user"> </span> {{player.name}}</h3>
            <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">Try a letter...</span>
                <input type="text" class="form-control" placeholder="?" aria-describedby="sizing-addon2" id="new-letter" ng-model="new_letter" ng-maxlength="1" maxlength="1">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Go!</button>
                </span>
            </div>
            <small class="text-right">Wrong answers: {{error_count}}/{{max_errors}}</small>
        </form>


        <ul class="letter-list nav nav-pills" role="tablist">
            <li ng-repeat="letter in letters"><span class="label" ng-class="'label-'+letter.status">{{letter.value}}</span></li>
        </ul>

        <div class="word">
            {{word | uppercase}}
        </div>
    </section>
</div> <!-- /container -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
