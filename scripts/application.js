/*
 * main JS application script - runner
 */

/*global angular*/
var Application = angular.module("Application", []);

Application.directive("popup", [

    function() {
        return {
            restrict: 'E',
            transclude: true,
            scope: {
                header: '=',
                content: '=',
                callback: '&'
            },
            template: '<div>' +
                '<h4>{{ header }}</h4>' +
                '<p>{{ content }}</p>' +
                '<div class="row">' +
                '<div class="form-group col-xs-3">' +
                '<button type="button" class="btn btn-success" ng-click="ok()">Ok</button>' +
                '<button type="button" class="btn btn-danger" ng-click="cancel()">Cancel</button>' +
                '</div>' +
                '</div>' +
                '</div>',
            link: function(scope, element, attributes) {},
            controller: function($scope) {
                $scope.ok = function() {
                    $scope.$parent.showpopup = false;
                    $scope.callback();
                };

                $scope.cancel = function() {
                    $scope.$parent.showpopup = false;
                };
            }
        };
    }
]);
Application.controller("ApplicationController", ["$scope", "$http",
    function($scope, $http) {
        "use strict";

        var SERVER_URL = "server/application.php";

        $scope.initModel = function() {
            // offer model object
            $scope.offer = {
                id: null,
                company: '',
                country: '',
                state: '',
                city: '',
                position: '',
                link: '',
                status: '',
                salary: '',
                description: ''
            };
        };

        // init module
        $scope.init = function() {
            $scope.initModel();
            $scope.search = '';
            $scope.showform = false;
            $scope.showpopup = false;
            $scope.getOffers();
        };

        $scope.showPopup = function(header, content, okCallback) {
            $scope.popup = {
                header: header,
                content: content,
                okCallback: okCallback
            };
            $scope.showpopup = true;
        };

        // get list of offers
        $scope.getOffers = function() {
            $http.get(SERVER_URL + "/offers").then(
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
            $scope.getOffer(offerId);
            $scope.showform = true;
        };

        $scope.cancelForm = function() {
            $scope.initModel();
            $scope.showform = false;
        };


        $scope.addOffer = function() {
            $scope.initModel();
            $scope.showform = true;
        };

        // delete offer
        $scope.deleteOffer = function(offerId) {
            console.log('offerId: ' + offerId);

            $scope.showPopup("Confirm delete offer", "Delete offer?", function() {
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
            });
        };

        // post offer
        //
        $scope.saveOffer = function() {
            var result = null;

            // default values
            if (!$scope.offer.status) {
                $scope.offer.status = "sent";
            }

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
                    $scope.showform = false;
                },
                function(response) {
                    console.warn("error: " + response.data);
                }
            );
        };



        // get selected offer
        $scope.getOffer = function(offerId) {
            $http.get(SERVER_URL + "/offer/" + offerId).then(
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