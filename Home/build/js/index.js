"use strict";

angular.module("blue", ["ui.router"]);

"use strict";

angular.module('blue').config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {

  $stateProvider.state('index', {
    url: '/index',
    templateUrl: 'view/index.html',
    controller: 'indexCtrl'
  });
  $urlRouterProvider.otherwise('index');
}])

"use strict";

angular.module('blue').controller('indexCtrl', ['$scope', function($scope) {

  

}])

"use strict";

angular.module("blue").directive('appFooter', function() {

  return {
    restrict: 'AE',
    replace: true,
    templateUrl: 'view/footer.html'
  }

});

"use strict";

angular.module("blue").directive('appHead', function() {

  return {
    restrict: 'AE',
    replace: true,
    templateUrl: 'view/header.html'
  }

});
