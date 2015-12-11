angular.module('eventController', [])

// inject the Comment service into our controller
    .controller('mainController', function ($scope, $http, Event) {

        // object to hold all the data for the new event form
        $scope.eventData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

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
        $scope.submitEvent = function () {
            $scope.loading = true;


            // save the event. pass in event data from the form
            // use the function we created in our service
            Event.save($scope.eventData)
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


    });