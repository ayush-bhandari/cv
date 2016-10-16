(function(){

var app = angular.module('worksandprojects-controller',['ngMaterial']);

app.controller('WorksController',['$http', function($http){
	
	var works = this;
	works.response = [];
	
	$http.get('URL').success(function(data){
 		works.response = data;
 	});

}]);
app.controller('ProjectsController',['$http', function($http){
	
	var projects = this;
	projects.response = [];
	
	$http.get('URL').success(function(data){
 		projects.response = data;
 	});

}]);



})();