
httpServices.controller('IndexController', function ($scope, $http, authService){
    $scope.myUser = authService.getCurrentUser();
    $scope.roomsList =function (){
        $http({
            method:"GET",
            url:baseApiUrl+"/index"
        }).then(function (response){
            console.log(response.data.rooms);
            $scope.rooms=response.data.rooms;
        }).catch(function (response){
            console.log("no room data");
        });
    };
    $scope.roomsList();

    $scope.bannersList =function (){
        $http({
            method:"GET",
            url:baseApiUrl+"/index"
        }).then(function (response){
            console.log(response.data.banners);
            $scope.banners=response.data.banners;
        }).catch(function (response){
            console.log("no room data");
        });
    };
    $scope.roomsList();
    $scope.bannersList();
});
