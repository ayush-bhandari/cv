(function(){

var app = angular.module('about-controller',['ngMaterial']);

app.controller('AboutController',['$http', function($http){
	
	var about = this;
	about.response = [];
	
	$http.get('URL').success(function(data){
 		about.response = data;
 	});

}]);



})();