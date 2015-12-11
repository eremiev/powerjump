var eventApp = angular

    .module('eventApp',
    ['eventController',
        'eventService'
    ])
    .constant('headers', {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Accept': 'application/json',
            'Version': 1
        }
    });
