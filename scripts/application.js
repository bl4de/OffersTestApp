/*
 * main JS application script - runner
 */

/*global angular*/
var Application = angular.module("Application", []);

Application.controller("ApplicationController", ["$scope", "$http",
    function($scope, $http) {
        "use strict";

        // init module
        $scope.init = function() {
            $scope.getOffers();
        };

        // get list of offers
        $scope.getOffers = function() {
            $http.get("application.php/offers").then(
                function(response) {
                    $scope.offers = response.data;
                },
                function(repsonse) {
                    console.log("error: " + response.data);
                }
            );
        };


        // post offer
        //
        $scope.saveOffer = function() {
            // @TODO

        };



        // get selected offer
        $scope.getOffer = function() {
            $http.get("application.php/offer/:id").then(
                function(response) {
                    $scope.offer = response.data;
                },
                function(response) {
                    console.log("error: " + response.data);
                }
            );
        };

        $scope.init();
    }
]);