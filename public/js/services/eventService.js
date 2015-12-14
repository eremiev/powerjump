angular.module('eventService', [])

    .factory('Event', function ($http, headers) {

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