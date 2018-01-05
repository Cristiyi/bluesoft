"use strict";

angular.module('blue').config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {

  $stateProvider.state('index', {
    url: '/index',
    templateUrl: 'view/index.html',
    controller: 'indexCtrl'
  });
  $urlRouterProvider.otherwise('index');
}])
