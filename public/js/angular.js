angular.module('myApp', [])
.directive('myDirective', function() {
return {
restrict: 'A',
replace: true,
scope: {
myUrl: '@',
// binding strategy
myLinkText: '@' // binding strategy
},
template: '<a href="{{myUrl}}">' +
'{{myLinkText}}</a>'
}
})

angular.module('myApp', [])
.run(function($rootScope, $timeout) {
$timeout(function() {
$rootScope.imgSrc = 'https://www.google.com/images/srpr/logo11w.png';
}, 2000);
});