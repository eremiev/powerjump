var eventApp = angular

    .module('eventApp', ['eventController', 'eventService', 'ngRoute'])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'js/templates/Home.html'
            })
            .when('/event', {
                templateUrl: 'js/templates/Event.html'
            })
            .when('/emo', {
                template: '<div>emoo</div>'
            })
            .otherwise({redirectTo: '/'});

        $locationProvider.html5Mode(true);
    })
    .constant('headers', {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json',
            'Version': 1
        }
    });
