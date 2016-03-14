(function () {
    'use strict';

    angular.module('powerJump')

        .controller('eventController', ['$scope', '$http', 'Event', function ($scope, $http, Event) {

            // object to hold all the data for the new event form

            //$scope.page = 'index';

            // loading variable to show the spinning loading icon
            //$scope.loading = true;

            console.log('ne6to');
            /**
             * Define a page.
             * Reset errors and city.
             *
             * @param page
             */
            //$scope.changePage = function (page) {
            //    $scope.page = page;
            //};


            // get all the events first and bind it to the $scope.events object
            // use the function we created in our service
            // GET ALL EVENTS ====================================================
            Event.get()
                .success(function (data) {
                    $scope.events = data.data;

                    $scope.loading = false;
                });

            // function to handle submitting the form
            // SAVE A EVENT ====================================================
            $scope.submitEvent = function (eventData) {
                $scope.loading = true;

                // save the event. pass in event data from the form
                // use the function we created in our service
                Event.save(eventData)
                    .success(function (data) {

                        // if successful, we'll need to refresh the event list
                        Event.get()
                            .success(function (getData) {
                                $scope.events = getData.data;
                                $scope.loading = false;
                            });

                    })
                    .error(function (data) {
                        console.log(data);
                    });
            };

            // function to handle deleting a event
            // DELETE A EVENT ====================================================
            $scope.deleteEvent = function (id) {
                $scope.loading = true;

                // use the function we created in our service
                Event.destroy(id)
                    .success(function (data) {

                        // if successful, we'll need to refresh the event list
                        Event.get()
                            .success(function (getData) {
                                $scope.events = getData.data;
                                $scope.loading = false;
                            });

                    });
            };


        }])
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

})();