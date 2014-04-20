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

            // offer model object
            $scope.offer = {
                id: null,
                company: '',
                country: '',
                state: '',
                city: '',
                position: '',
                link: ''
            };

            $scope.search = '';

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

        // edit offer
        $scope.editOffer = function(offerId) {
            console.log('offerId: ' + offerId);
            $scope.getOffer(offerId);
        };

        $scope.clearForm = function() {
            $scope.init();
        };

        // delete offer
        $scope.deleteOffer = function(offerId) {
            console.log('offerId: ' + offerId);
            $http({
                url: 'application.php/delete/' + offerId,
                method: 'DELETE'
            }).then(
                function(response) {
                    console.log('deleted');
                    $scope.getOffers();
                },
                function(response) {
                    console.warn("error: " + response.data);
                }
            );
        };

        // post offer
        //
        $scope.saveOffer = function() {
            var result = null;

            if ($scope.offer.id > 0) {
                result = $http({
                    url: 'application.php/change',
                    method: 'PUT',
                    data: $scope.offer
                });
            } else {
                result = $http({
                    url: 'application.php/save',
                    method: 'POST',
                    data: $scope.offer
                });
            }

            result.then(
                function(response) {
                    console.log("saved");
                    $scope.getOffers();
                },
                function(response) {
                    console.warn("error: " + response.data);
                }
            );
        };



        // get selected offer
        $scope.getOffer = function(offerId) {
            $http.get("application.php/offer/" + offerId).then(
                function(response) {
                    $scope.offer = response.data[0];
                },
                function(response) {
                    console.log("error: " + response.data);
                }
            );
        };

        $scope.init();
    }
]);