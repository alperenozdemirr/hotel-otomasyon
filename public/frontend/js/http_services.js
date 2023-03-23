var app = angular.module('httpServices', []);
var test = angular.module('test', []);
app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('%');
    $interpolateProvider.endSymbol('%');
});
test.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('%');
    $interpolateProvider.endSymbol('%');
});
let baseURL="http://127.0.0.1:8000";
app.controller('AuthController',function ($scope,$http){

    $scope.authenticate=function (email,password){
        $http({
            method:"POST",
            url:baseURL+"/api/user/login",
            data:{
                email:email,
                password:password
            }
        }).then(function (response){
            data=response.data;
            window.location.href=baseURL+"/index";
        }).catch(function (response){
            $scope.loginAlert="Bilgileriniz Kontrol Edip Tekrar Deneyiniz!";
            //console.log(response.data);
        });
    }
});

app.controller('RegisterController',function ($scope,$http){

    $scope.register=function (email,name,phone,password,confirmPassword){
        $http({
            method:"POST",
            url:baseURL+"/api/user/register",
            data:{
                email:email,
                name:name,
                phone:phone,
                password:password,
                confirmPassword:confirmPassword
            }
        }).then(function (response){
            data=response.data;
            $scope.successAlert="Başarılı Yönlendiriliyorsunuz..";
            setTimeout(function (){
                window.location.href=baseURL+"/user/login";
            },2000);
        }).catch(function (response){
            $scope.loginAlert="Bilgileriniz Kontrol Edip Tekrar Deneyiniz!";
            //console.log(response.data);
        });
    }


});
app.controller('user',function ($scope,$http){
        $http({
            method: "GET",
            url: baseURL+"/api/me",
            headers: {
                "Content-Type": "application/json",
                "Authorization": "Bearer "+jwToken
            }
        }).then(function (response){
            if (response){
               var userData=response.data.user;
                $scope.me=userData;
            }
        }).catch(function (response){
            console.log("undefined user");
        });
});
app.controller('IndexController',function ($scope,$http){

    $http({
        method:"GET",
        url:baseURL+"/api/index"
    }).then(function (response){
        //console.log(response.data);
        $scope.rooms=response.data.rooms;
        $scope.banners=response.data.banners;
    }).catch(function (response){
        console.log("no room data");
    });
        /*$http.get("http://127.0.0.1:8000/api/index").then(function (response){
            $scope.rooms= response.data.rooms;
        });*/

});

test.controller('TestController',function (){
    console.log(jwToken);
});

