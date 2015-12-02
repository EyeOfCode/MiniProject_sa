<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body class="login">
	@extends('layout')
	@section('login')
	<center>
		<table border="0">
			<tr><tr><td colspan="2"><center><h3>Login</h3></center></td><br><br>
				<form method="post" action="./Cklogin" name="login">
					<?php echo csrf_field(); ?>
					<tr><td>User Name: <br><br></td><td><input type="text" name="username"><br><br></td></tr>
					<tr><td>Pass Word : <br><br></td><td><input type="password" name="password"><br><br></td></tr>
					<tr><td></td><td><input type="button" name="submit" value="Login">
					</form>
					<input type="button" name="register" value="Register" 
					onclick="window.location.href='./register'"></td><br><br></tr>
				</tr>
			</table>
		</center>
		@endsection
	</body>

	</html>