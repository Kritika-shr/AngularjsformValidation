var myApp = angular.module('myApp',[]);
myApp.controller('RegistrationController', ['$scope',function($scope){
$scope.register = function() {
	$scope.message = 'welcome ' + $scope.user.firstname;
};
}]);