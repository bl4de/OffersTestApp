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
                            <form role="form" class="form-vertical">
                                <fieldset>
                                    <div class="form-group col-xs-3">
                                        <label for="company">Company name</label>
                                        <input type="text" class="form-control input-sm " id="company" ng-model="offer.company" placeholder="company name..." />
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="country">Country</label>
                                        <!-- TODO - select with Canada and United States -->
                                        <input type="text" class="form-control input-sm " id="country" ng-model="offer.country" placeholder="country..." />
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <!-- TODO - select with states/provinces depends on 'country' -->
                                        <label for="state">State (US)/Province (Canada) name</label>
                                        <input type="text" class="form-control input-sm " id="state" ng-model="offer.state" placeholder="state/province name..." />
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control input-sm " id="city" ng-model="offer.city" placeholder="city name..." />
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="position">Position</label>
                                        <input type="text" class="form-control input-sm " id="position" ng-model="offer.position" placeholder="position name..." />
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control input-sm " id="link" ng-model="offer.link" placeholder="link..." />
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-success" ng-click="saveOffer()">Save</button>

                                    </div>
                                </fieldset>
                                
                            </form>
                        </div>
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
                                        <td>{{ offer.added | date : 'yyyy-MM-dd' }}</td>
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