<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <script src="{{asset('public_directory')}}/jquery.min.js"></script>
    <script src="{{asset('public_directory')}}/angular.min.js"></script>
    <script src="{{asset('frontend')}}/http-services/base.js"></script>
    <script src="{{asset('frontend')}}/http-services/authenticateController.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
</head>
<body ng-app="httpServices" ng-controller="AuthenticateController">
<div class="contanier">
    <div class="loginPanel">
        <div class="h2">
            <h2>Kayıt Ol</h2>
        </div>
        <form id="userRegister">
            <span ng-if="alertSuccess"><p style="color:darkgreen;font-size: 18px;text-align: center">
               <b id="alertSuccess">@{{alertSuccess}}</b>
            </p></span>
            <span ng-if="alertDanger"><p id="alertDanger" style="color:brown;text-align: center">
                @{{alertDanger}}
            </p></span>
			<span>
				<p>E-posta</p><input type="email" ng-model="email" name="email">
			</span>
            <span>
				<p>Ad Soyad</p><input type="text" ng-model="name"  name="name">
			</span>
            <span>
			<p>Şifre</p><input type="password" ng-model="password"  name="password">
		</span>
            <span>
			<p>Tekrar Şifre</p><input type="password" ng-model="password_confirmation" name="password_confirmation">
		</span>
            <button id="btnRegister" ng-click="register()" class="btnLogin">Kayıt Ol</button>
            <span>
		<a href="{{route('loginPage')}}">Zaten Kayıtlıyım?</a>
		<a href="index.php">Ziyaretçi Olarak Devam Et</a>
	</span>
        </form>


    </div>
</div>
<script src="{{asset('frontend')}}/http-services/authenticate.js"></script>
</body>
</html>
