<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="{{asset('frontend')}}/http-services/base.js"></script>
    <script src="{{asset('public_directory')}}/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
</head>
<body>
<div class="contanier">
    <div class="loginPanel">
        <div class="h2">
            <h2>Kayıt Ol</h2>
        </div>
        <form id="userRegister">
            <span><p style="color:darkgreen;font-size: 18px;text-align: center">
               <b id="alertSuccess"></b>
            </p></span>
            <span><p id="alertDanger" style="color:brown;text-align: center">

            </p></span>
			<span>
				<p>E-posta</p><input type="email"  name="email">
			</span>
            <span>
				<p>Ad Soyad</p><input type="text"  name="name">
			</span>
            <span>
			<p>Şifre</p><input type="password"  name="password">
		</span>
            <span>
			<p>Tekrar Şifre</p><input type="password"  name="password_confirmation">
		</span>
            <button id="btnRegister" type="submit" class="btnLogin">Kayıt Ol</button>
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
