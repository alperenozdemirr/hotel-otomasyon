const baseApiUrl="http://localhost/HotelOtomasyon/public/api";
const baseHomeUrl="http://localhost/HotelOtomasyon/public";

/*var mustache = Mustache.create({
    tags: ['[[', ']]']
});*/
function addTokenHeader(){
    var userTokenData=JSON.parse(localStorage.getItem('currentUser'));
    var token=userTokenData.token;
    var headers = {};
    if (token){
        headers.Authorization = "Bearer "+token;
    }
    return headers;
}



