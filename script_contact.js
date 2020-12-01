var myApp = angular.module('myApp', []);

myApp.controller('RegistrationController', ['$scope', function($scope) {

  $scope.register = function() {
    $scope.message = 'Merci de votre message ' + $scope.user.firstname + ' ' + $scope.user.lastname + '. On vous répondra dès que possible.';
  };

}]);