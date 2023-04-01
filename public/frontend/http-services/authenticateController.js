
httpServices.controller('AuthenticateController', function ($scope, $http, authService){
    $scope.myUser = authService.getCurrentUser();
    $scope.login =function (){
      var data = {
          email: $scope.email,
          password: $scope.password
      };
      $http.post(baseApiUrl+'/user/login',data).then(function (response){
          $scope.alertDanger = "";
          $scope.alertSuccess = "İşlem Başarılı Yönlendiriliyorsunuz...";
          var user = {
              name:response.data.user.name,
              email:response.data.user.email,
              id:response.data.user.id
          };
          var currentUser = {
              token: response.data.token,
              user:user
          };
          localStorage.setItem('currentUser',JSON.stringify(currentUser));
          window.location.href=baseHomeUrl+"/";
      },function (error){
          console.log(error);
          });
    };

    $scope.register =function (){
        var data = {
            email: $scope.email,
            name:$scope.name,
            password: $scope.password,
            password_confirmation:$scope.password_confirmation
        };
        $http.post(baseApiUrl+'/user/register',data).then(function (response){
            $scope.alertDanger = "";
            $scope.alertSuccess = "İşlem Başarılı Yönlendiriliyorsunuz...";
            window.location.href=baseHomeUrl+"/user/login";
        },function (error){
            console.log(error);
        });
    };
    //logout yaz
    $scope.logout = function (){
        $http({
            url: baseApiUrl+'/user/logout',
            method: 'POST',
            headers: addTokenHeader()
        }).then(function successCallback(response) {
            console.log('success logout');
            localStorage.removeItem('currentUser');
            location.reload();
        }, function errorCallback(response) {
            console.log(response);
        });
    } ;
});
