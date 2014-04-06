/*
 * main JS application script - runner
 */

/* global angular */
var Application = angular.module("Application", []);

Application.controller("ApplicationController", ["$scope",
    function ($scope) {
        $scope.hello = "Hello!";

        $scope.newHello = "New hello!!!";
    }
]);
