/*
 * main JS application script - runner
 */
var Application = angular.module("Application", []);

Application.controller("ApplicationController", [ "$scope", function($scope) {
        $scope.hello = "Hello!";
}]);

