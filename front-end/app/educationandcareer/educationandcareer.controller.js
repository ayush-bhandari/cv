(function(){

var app = angular.module('educationandcareer-controller',['ngMaterial']);

app.controller('EducationController',['$http', function($http){
	
	var education = this;
	education.response = [];
	
	$http.get('URL').success(function(data){
 		education.response = data;
 	});

}]);
app.controller('CareerController',['$http', function($http){
	
	var career = this;
	career.response = [];
	
	$http.get('URL').success(function(data){
 		career.response = data;
 	});

}]);
app.controller('VolunteerController',['$http', function($http){
	
	var volunteer = this;
	volunteer.response = [];
	
	$http.get('URL').success(function(data){
 		volunteer.response = data;
 	});

}]);
app.controller('CasestudiesController',['$http', function($http){
	
	var casestudies = this;
	casestudies.response = [];
	
	$http.get('URL').success(function(data){
 		casestudies.response = data;
 	});

}]);


})();