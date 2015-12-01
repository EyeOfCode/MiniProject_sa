<!DOCTYPE html>
<html>
<head>
	<title>Mini</title>
</head>
<body>

	<div class="menu">
		@include('mainmanu')
	</div>

	<div class="login">
		@yield('login')
	</div>

	<div class="register">
		@yield('register')
	</div>

</body>
</html>