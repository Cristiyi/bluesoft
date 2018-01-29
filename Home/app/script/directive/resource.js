"use strict";

angular.module("blue").directive("appResource", function() {

  return {
    restrict: "AE",
    replace: true,
    templateUrl: "view/resource.html"
  }

})
