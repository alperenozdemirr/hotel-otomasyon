/*$(document).ready(function (){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#userRegister').on('submit',function(e){
        $.ajax({
            url: baseApiUrl+"/user/register",
            method: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success:function(data){
                $('#alertDanger').empty();
                $('#alertSuccess').html('İşlem Başarılı Yönlendiriliyorsunuz...');
                console.log(data);
                window.location.href=baseHomeUrl+"/user/login";
            },
            error: function(err){
                console.log(err);
                $('#alertDanger').html('Kullanıcı bilgilerinizi Kontrol Ediniz HATA!');
            }
        });
        e.preventDefault();
    });
    $('#userLogin').on('submit',function(e){
        $.ajax({
            url: baseApiUrl+"/user/login",
            method: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success:function (response){
                $('#alertDanger').empty();
                $('#alertSuccess').html('İşlem Başarılı Yönlendiriliyorsunuz...');
                var token = response.token;
                var user = {
                  name:response.user.name,
                  email:response.user.email,
                  id:response.user.id
                };
                var currentUser = {
                  token: token,
                  user:user
                };
                localStorage.setItem('currentUser',JSON.stringify(currentUser));
                window.location.href=baseHomeUrl+"/";
            },
            error: function (err){
                $('#alertDanger').html('Kullanıcı bilgilerinizi Kontrol Ediniz HATA!');
                console(err);
            }
        });
        e.preventDefault();
    });



});*/
/*
*
* */
