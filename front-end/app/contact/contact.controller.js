(function(){

var app = angular.module('contact-controller',['ngMaterial']);

app.controller('ContactController',['$http', function($http){
	
	var contact = this;
	contact.response = [];
	
	$http.get('URL').success(function(data){
 		contact.response = data;
 	});

}]);



})();