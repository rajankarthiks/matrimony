'use strict';

angular.module('myApp.login', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider

      .when('/login', { templateUrl: 'views/login.html', controller: 'LoginController' });

    }])

.controller('LoginController', [function() {

}]);