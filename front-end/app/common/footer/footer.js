(function(){
var app = angular.module('footerApp',[]);
app.directive('footerApp', function(){
	
	return {
		restrict: 'E',
		templateUrl: 'app/common/footer/footer.html'	
	};
});
})();
