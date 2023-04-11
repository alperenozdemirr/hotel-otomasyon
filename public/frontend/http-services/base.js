const baseApiUrl="http://localhost/HotelOtomasyon/public/api";
const baseHomeUrl="http://localhost/HotelOtomasyon/public";

var loaderShow = function () {
    $("#loader").show();
}
var loaderHide = function (){
    $("#loader").hide();
}
loaderShow();
var httpServices=angular.module('httpServices', []);
var authenticate=false;
httpServices.service('authService', function() {
    this.getCurrentUser = function() {
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser !== null) {
            return currentUser.user;
        }
        return null;
    };
});
function addTokenHeader(){
    var userTokenData=JSON.parse(localStorage.getItem('currentUser'));
    var token=userTokenData.token;
    var headers = {};
    if (token){
        headers.Authorization = "Bearer "+token;
    }
    return headers;
}



