"use strict";

angular.module('blue').config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {

  $stateProvider.state('index', {
    url: '/index',
    templateUrl: 'view/index.html',
    controller: 'indexCtrl'
  })

  .state('resource', {
    url: '/resource',
    templateUrl: 'view/resource.html',
    controller: 'resourceCtrl'
  })

  $urlRouterProvider.otherwise('index');
}])
