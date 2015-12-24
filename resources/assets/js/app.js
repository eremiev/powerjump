var eventApp = angular

    .module('eventApp', ['eventController', 'eventService', 'ui.router'])
    .config(function ($stateProvider, $urlRouterProvider, $locationProvider) {

        // For any unmatched url, redirect to /state1
        $urlRouterProvider.otherwise("/");
        //
        // Now set up the states
        $stateProvider
            .state('home', {
                url: "/",
                templateUrl: "js/templates/Home.html"
            })
            .state('event', {
                url: "/event",
                templateUrl: "js/templates/Event.html"
            })
            .state('project', {
                url: "/project",
                templateUrl: "../resources/templates/Home.html"
            });

        $locationProvider.html5Mode(true);
    })
    .constant('headers', {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json',
            'Version': 1
        }
    });
