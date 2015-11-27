angular.module('eventService', [])

    .factory('Comment', function ($http) {

        return {
            // get all the events
            get: function () {
                return $http.get('/api/events');
            },

            // save a event (pass in event data)
            save: function (eventData) {
                return $http({
                    method: 'POST',
                    url: '/api/events',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(eventData)
                });
            },

            // destroy a event
            destroy: function (id) {
                return $http.delete('/api/events/' + id);
            }
        }
    });