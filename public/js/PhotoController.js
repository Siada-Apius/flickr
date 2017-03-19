flickrApp.controller('PhotoController', function ($scope, $http) {

    $scope.getData = null;
    $scope.contentLoaded = false;

    $scope.initiate = function () {
        $scope.getPhotoInfo();
    };

    $scope.getPhotoInfo = function () {

        $scope.contentLoaded = false;
        $http({
            method: 'GET',
            url: '/api/photo/' + localStorage.getItem('id'),

        }).then(function success(response) {

            $scope.contentLoaded = true;
            $scope.getData = response.data;

        }, function failed(response) {
            $scope.contentLoaded = false;
            console.log(response);
        });
    };
});
