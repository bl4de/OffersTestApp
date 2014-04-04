<?php 
require_once '../vendor/autoload.php'; 

$app = new Application("App");
$appInstance = $app->getInstance();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Framework test app</title>
        <link rel="stylesheet" href="styles/application.css" />
    </head>
    <body ng-app="Application">
        <div id="container" ng-controller="ApplicationController">
            <!--main body wrapper-->
            <?= $appInstance ?> {{hello}}
            <!--main body wrapper-->
        </div>
        <script src="vendor/angular.min.js"></script>
        <script src="scripts/application.js"></script>
        <script>
            // main JS runner
        </script>
    </body>
</html>
