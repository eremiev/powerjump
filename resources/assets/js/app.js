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
    })
    .service('Event', function ($http, headers) {
        console.log('eventService');

        return {
            // get all the events
            get: function () {
                return $http.get('/api/events?with=translation', headers);
            },

            // save a event (pass in event data)
            save: function (eventData) {
                return $http({
                    method: 'POST',
                    url: '/api/events',
                    data: {test: 'test'},
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'Accept': 'application/json',
                        'Version': 1
                    }
                });
            },

            // destroy a event
            destroy: function (id) {
                return $http.delete('/api/events/' + id, headers);
            }
        }
    });

