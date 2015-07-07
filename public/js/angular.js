app.controller('MainCtrl', function($scope) {
$scope.getCssClasses = function(ngModelContoller) {
return {
error: ngModelContoller.$invalid && ngModelContoller.$dirty,
success: ngModelContoller.$valid && ngModelContoller.$dirty
};
};
$scope.showError = function(ngModelController, error) {
return ngModelController.$error[error];
};
});