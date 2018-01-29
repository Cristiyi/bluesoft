"use strict";

angular.module("blue", ["ui.router",'ngResource'])

  .value('cfg', {
    baseUrl: 'http://localhost/bluesoft/public/index.php/'
  })

  .run(function($rootScope,$http,cfg) {



  })
