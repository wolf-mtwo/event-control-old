'use strict';

angular.module('seedApp').factory('Participants', ['$resource',
  function($resource) {
    var url = './api/events/participant/eventId/:eventId/';
    return $resource(url, {
    }, {
      update: {
        method: 'PUT'
      },
      save: {
      	// url: url + '/talk/:talkId',
      	method: 'POST'
      }
    });
  }
]);