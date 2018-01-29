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
