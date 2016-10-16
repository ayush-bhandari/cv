
(function(){

var app = angular.module('app', ['ngRoute','ngMaterial','appRoutes',
	'footerApp','navApp','about','skillsandtools','educationandcareer',
	'worksandprojects','awardsandachievements','contact'])
	.config(function($mdThemingProvider){
		$mdThemingProvider.theme('default')
    .primaryPalette('pink')
    .accentPalette('orange');
});

app.directive('mainApp', function(){
	return {
	 restrict: 'E',
	 templateUrl:'app/home.html'
	};
});

})();