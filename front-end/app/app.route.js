(function(){

var app = angular.module('appRoutes', ['ngRoute','ngMaterial'])
	.config(function($routeProvider,$locationProvider){
		$routeProvider
				.when('/home',{
					templateUrl:'app/home.html',
				})
				.when('/about',{
					templateUrl:'app/about/about.html',
				})
				.when('/skillsandtools',{
					templateUrl:'app/skillsandtools/skillsandtools.html',
					// controller:function($http){
					// 	$http.post('test.json').success(function(data){
					 		
					// 	});
					// },
					//controllerAs: 'estimate'
				})
				.when('/educationandcareer',{
					templateUrl:'app/educationandcareer/educationandcareer.html',
				})
				.when('/worksandprojects',{
					templateUrl:'app/worksandprojects/worksandprojects.html',
				})
				.when('/awardsandachievements',{
					templateUrl:'app/awardsandachievements/awardsandachievements.html',
				})
				.when('/contact',{
					templateUrl:'app/contact/contact.html',
				})
				.otherwise({redirectTo: '/home'});
				$locationProvider.html5Mode(true);
	});


})();