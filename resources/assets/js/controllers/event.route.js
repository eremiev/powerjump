(function () {
    'use strict';

    var routerApp = angular.module('powerJump');

    routerApp.config(function ($stateProvider, $urlRouterProvider) {


        $stateProvider

            .state('event', {
                url: "/event",
                templateUrl: "templates/private/event/Event.html",
                controller: 'eventController'

            })
            .state('private.event.create', {
                url: '/event/create',
                templateUrl: 'templates/private/event/create.html',
                controller: 'eventController'
            });


    });

})();