window.App = angular.module('App', ['ui.bootstrap', 'ngResource']);

App.controller('mainCtrl', ['$scope', function($scope) {
  $scope.objects = [
    {id: 1, name: "1st"},  {id: 2, name: "2nd"},  {id: 3, name: "3rd"},
    {id: 4, name: "4th"},  {id: 5, name: "5th"},  {id: 6, name: "6th"},
    {id: 7, name: "7th"},  {id: 8, name: "8th"},  {id: 9, name: "9th"},
    {id: 10, name: "10th"},{id: 11, name: "11th"},{id: 12, name: "12th"}
  ]

  $scope.totalItems = $scope.objects.length;
  $scope.currentPage = 1;
  $scope.numPerPage = 5;

  $scope.paginate = function(value) {
    var begin, end, index;
    begin = ($scope.currentPage - 1) * $scope.numPerPage;
    end = begin + $scope.numPerPage;
    index = $scope.objects.indexOf(value);
    return (begin <= index && index < end);
  };
}]);

App.controller('issuesCtrl', ['$scope', '$resource', function($scope, $resource) {
  var Issue = $resource('https://api.github.com/repos/angular-ui/bootstrap/issues');
  $scope.objects = Issue.query();
  $scope.objects.$promise.then(function(){
    $scope.totalItems = $scope.objects.length;
  });
  $scope.currentPage = 1;
  $scope.numPerPage = 5;

  $scope.paginate = function(value) {
    var begin, end, index;
    begin = ($scope.currentPage - 1) * $scope.numPerPage;
    end = begin + $scope.numPerPage;
    index = $scope.objects.indexOf(value);
    return (begin <= index && index < end);
  };
}]);
