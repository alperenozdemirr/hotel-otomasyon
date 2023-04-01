<html>
<head>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="{{asset('public_directory')}}/jquery.min.js"></script>
    <script src="{{asset('public_directory')}}/angular.min.js"></script>
    <script src="{{asset('frontend')}}/http-services/base.js"></script>
    <script src="{{asset('frontend')}}/http-services/authenticateController.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
</head>
<body ng-app="httpServices" ng-controller="AuthenticateController">
<div   class="contanier">
    <div class="loginPanel">
        <div class="h2">
            <h2>Giriş Yap</h2>
        </div>

        <form id="userLogin">
            <span ng-if="alertSuccess"><p style="color:darkgreen;font-size: 18px;text-align: center">
               <b id="alertSuccess">@{{alertSuccess}}</b>
            </p></span>
            <span ng-if="alertDanger"><p id="alertDanger" style="color:brown;text-align: center">
                @{{alertDanger}}
            </p></span>
            @csrf
			<span>
				<p>E-posta</p><input type="email" ng-model="email"  name="email">
			</span>
            <span>
			<p>Şifre</p><input type="password" ng-model="password" name="password">
		</span>
            <button id="btnLogin" ng-click="login()" class="btnLogin">Giriş Yap</button>
            <span>
		<a href="#">Şifremi Unuttum?</a>
	</span>
            <span>
		<a href="{{route('registerPage')}}">Kayıtlı Değilim?</a>
		<a href="index.php">Ziyaretçi Olarak Devam Et</a>
	</span>
        </form>

    </div>
</div>
<script src="{{asset('frontend')}}/http-services/authenticate.js"></script>
</body>
</html>
