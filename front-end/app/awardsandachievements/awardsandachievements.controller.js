(function(){

var app = angular.module('awardsandachievements-controller',['ngMaterial']);

app.controller('AwardsController',['$http', function($http){
	
	var awards = this;
	awards.response = [];
	
	$http.get('URL').success(function(data){
 		awards.response = data;
 	});

}]);
app.controller('AchievementsController',['$http', function($http){
	
	var achievements = this;
	achievements.response = [];
	
	$http.get('URL').success(function(data){
 		achievements.response = data;
 	});

}]);


})();