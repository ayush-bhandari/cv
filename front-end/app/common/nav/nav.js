(function(){
var app = angular.module('navApp',['ngMaterial','ngRoute'])
.controller('NavCtrl', function ($scope, $timeout, $mdSidenav) {
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
      return function() {
        $mdSidenav(componentId).toggle();
      }
    }
    $scope.avatar_style = {
    	'border-radius': '100px'
  	}
  });
app.directive('navApp', function(){
	
	return {
		restrict: 'E',
		templateUrl: 'app/common/nav/nav.html'	
	};
});
})();
