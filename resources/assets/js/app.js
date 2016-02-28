angular.module('powerJump', ['ui.router'])

    .config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function ($stateProvider, $urlRouterProvider, $locationProvider) {

        console.log('app.js');
        // For any unmatched url, redirect to /state1
        $urlRouterProvider.otherwise("/");

        // Now set up the states
        $stateProvider
            .state('home', {
                url: "/",
                templateUrl: "templates/private/Home.html"
                //controller: 'mainController'
            })
            .state('event', {
                url: "/event",
                templateUrl: "templates/private/Event.html",
                controller: 'eventController'

            });
            //.state('project', {
            //    url: "/project",
            //    templateUrl: "../resources/templates/Home.html"
            //    //controller: 'mainController'
            //});

        $locationProvider.html5Mode(true);
    }])
    .constant('headers', {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json',
            'Version': 1
        }
    });
