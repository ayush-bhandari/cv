(function(){

var app = angular.module('skillsandtools-controller',['ngMaterial']);

app.controller('SkillsController',['$http', function($http){
	
	var skills = this;
	skills.response = [];
	
	$http.get('http://localhost:8000/api/resume/skills').success(function(data){
 		skills.response = data;
 		console.log(data);
 	});

}]);
app.controller('ToolsController',['$http', function($http){
	
	var tools = this;
	tools.response = [];
	
	$http.get('URL').success(function(data){
 		tools.response = data;
 	});

}]);
app.controller('LanguagesController',['$http', function($http){
	
	var languages = this;
	languages.response = [];
	
	$http.get('URL').success(function(data){
 		languages.response = data;
 	});

}]);
app.controller('EspskillsController',['$http', function($http){
	
	var espskills = this;
	espskills.response = [];
	
	$http.get('URL').success(function(data){
 		espskills.response = data;
 	});

}]);


})();