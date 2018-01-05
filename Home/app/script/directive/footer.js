"use strict";

angular.module("blue").directive('appFooter', function() {

  return {
    restrict: 'AE',
    replace: true,
    templateUrl: 'view/footer.html'
  }

});
