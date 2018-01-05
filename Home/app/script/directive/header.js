"use strict";

angular.module("blue").directive('appHead', function() {

  return {
    restrict: 'AE',
    replace: true,
    templateUrl: 'view/header.html'
  }

});
