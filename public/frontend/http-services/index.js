/*$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function roomList(){
        var roomsTemplate = $('#rentedData').html();
        //#room-rented
        $.ajax({
            url: baseApiUrl+"/index",
            method:"GET",
            success:function (rooms){
                var result = Mustache.render(roomsTemplate,rooms);
                $('#room-rented').html(result);
            }
        });
    }
    function banners() {
        var bannersTemplate = $('#roomsData').html();
        $.ajax({
            url: baseApiUrl + "/index",
            method: "GET",
            success: function (banners) {
                console.log(banners);
                var result = Mustache.render(bannersTemplate,banners);
                $('#room-card').html(result);
            }
        });
    }
    function testToken() {
        $.ajax({
            url: baseApiUrl + "/test/token",
            method: "GET",
            headers: addTokenHeader(),
            success: function (data) {
                console.log(data);
            }
        });
    }
    $('#btn-logout').click(function (){
        $.ajax({
            url: baseApiUrl+"/user/logout",
            method: "POST",
            headers: addTokenHeader(),
            success: function (){
                console.log('succes logout');
                localStorage.removeItem('currentUser');
                location.reload();
            },error:function (err){
                console.log(err);
            }
        });
    });
    //testToken();
   // banners();
   // roomList();
});*/
