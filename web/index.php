<?php
require_once '../vendor/autoload.php';
$app = new Application("App");
$appInstance = $app->getInstance();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
        <title>Framework test app</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
        <link rel="stylesheet" href="styles/application.css" />
    </head>
        <body ng-app="Application">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BB Learning Platform</a>
                </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                        <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-md-2 sidebar">
                        <ul class="nav nav-sidebar">
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                    </ul>
                    
                </div>
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h2 class="page-header">Dashboard</h2>
                        <div class="container-fluid">
                            <div class="row">
                                <p class="col-md-6"><i class="glyphicon glyphicon-search"></i></p>
                                <p class="col-md-6">test</p>
                            </div>
                        </div>
                    <h4 class="sub-header">Section title</h4>
                    
                </div>
            </div>
        </div>
        
        <!-- vendors -->
        <script src="vendor/angular.min.js"></script>
        <script src="vendor/bootstrap.min.js"></script>
        <!-- application -->
        <script src="scripts/application.js"></script>
        
    </body>
</html>