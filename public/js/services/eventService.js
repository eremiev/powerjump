angular.module('eventService', [])

    .factory('Event', function ($http, headers) {

        return {
            // get all the events
            get: function () {
                return $http.get('/api/events?with=translation', headers);
            },

            // save a event (pass in event data)
            save: function (eventData) {
                return $http.post('/api/events', $.param(eventData), headers);
            },

            // destroy a event
            destroy: function (id) {
                return $http.delete('/api/events/' + id, headers);
            }
        }
    });