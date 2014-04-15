<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Offers Canada/USA</title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
        <link rel="stylesheet" href="styles/application.css" />
    </head>
    <body ng-app="Application" ng-controller="ApplicationController">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand">Offers Canada/USA</span>
                </div>
                <div class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <input type="text" ng-model="search" class="form-control input-sm" placeholder="Search in offers...">
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container-fluid">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Company name</th>
                                        <th>Position</th>
                                        <th>State/Province</th>
                                        <th>City</th>
                                        <th>Link</th>
                                        <th>Date added</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="offer in offers | filter: search">
                                        <td>{{ offer.id }}</td>
                                        <td>{{ offer.company }}</td>
                                        <td>{{ offer.position }}</td>
                                        <td>{{ offer.state }}</td>
                                        <td>{{ offer.city }}</td>
                                        <td><a href="{{ offer.link }}" target="_blank">click to open</a></td>
                                        <td>{{ offer.added }}</td>
                                    </tr>
                                    <tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- vendors -->
                <script src="lib/jquery.min.js"></script>
                <script src="lib/angular.min.js"></script>
                <script src="lib/bootstrap.min.js"></script>
                <!-- application -->
                <script src="scripts/application.js"></script>
            </body>
        </html>