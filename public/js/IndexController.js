flickrApp.controller('IndexController', function ($scope, $http) {

    $scope.getData = null;
    $scope.contentLoaded = false;

    $scope.initiate = function () {
        $scope.getList();
    };

    $scope.getPhotoById = function (id) {
        localStorage.setItem('id', id);
        window.location.href = '/photo/' + id;
    };

    $scope.getList = function () {

        $scope.contentLoaded = false;
        $http({
            method: 'GET',
            url: '/api/recent'

        }).then(function success(response) {
            $scope.contentLoaded = true;
            $scope.getData = response.data;

        }, function failed(response) {
            $scope.contentLoaded = false;
            console.log(response);
        });
    };
});
