
httpServices.controller('RentedController', function ($scope, $http, authService) {

    //console.log('test');
    var user = authService.getCurrentUser();
    $scope.myUser = authService.getCurrentUser();
    $scope.rentedList = function (){
        loaderShow();
          $http({
              method:"GET",
              url:baseApiUrl+"/my/rented/"+user.id,
              headers: addTokenHeader(),
          }).then(function (response){
              console.log(response.data.renteds);
              $scope.renteds=response.data.renteds;
              loaderHide();
          }).catch(function (error){
                console.log(error);
                loaderHide();
          });
    };
    $scope.rentedList();

});
