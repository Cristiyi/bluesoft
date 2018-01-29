"use strict";

angular.module("blue", ["ui.router",'ngResource'])

  .value('cfg', {
    baseUrl: 'http://localhost/bluesoft/public/index.php/'
  })

  .run(function($rootScope,$http,cfg) {



  })

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

// "use strict";
//
// angular.module("blue").service('CateService', ['$http', 'cfg', '$resource', function($http,cfg,$resource) {
//
//   var me = this;
//   me.plist = {}
//   me.getList = function() {
//     return $http.get(cfg.baseUrl + 'api/cate/plist').then(function(data) {
//       me.plist = data.data;
//     }, function(e) {
//       console.log(e);
//     })
//   }
//
//
// }])

"use strict";

angular.module('blue').controller('indexCtrl', ['$scope', '$http', 'cfg', function($scope, $http, cfg) {


    // $http.get(cfg.baseUrl + 'api/cate/plist').then(function(data) {
    //   $scope.plist = data.data.data;
    // }, function(e) {
    //   alert(e);
    // })

    $http.get(cfg.baseUrl + 'api/cate/allch').then(function(data) {
      $scope.allch = data.data.data;
    }, function(e) {
      alert(e);
    });

    $http.get(cfg.baseUrl + 'api/resource/all').then(function(data) {
      $scope.index_resource = data.data.data;
    }, function(e) {
      alert(e);
    });

}])

"use strict";

angular.module("blue").controller("resourceCtrl", ['$scope', function($scope) {

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

"use strict";

angular.module("blue").directive("appResource", function() {

  return {
    restrict: "AE",
    replace: true,
    templateUrl: "view/resource.html"
  }

})
