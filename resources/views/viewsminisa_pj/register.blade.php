<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body class="register">
	@extends('layout')
	@section('register')
		<center>
			<table border="0">
				<tr><tr><td colspan="2"><center><h3>Register</h3></center></td><br><br>
				<form method="post" action="./postregister" name="register" target="iframe_target">
				<?php echo csrf_field(); ?>
				<iframe id="iframe_target" name="iframe_target" src="#" 
					style="width:0;height:0;border:0px solid #fff;"></iframe>
					<script language="JavaScript">
						function showResult(result){
							if(result==1){
								document.getElementById("divResult").innerHTML = 
								"<font color=green> Complast!! </font> <br>";
								window.location="./";
							}else{
								document.getElementById("divResult").innerHTML = 
								"<font color=red> Error input not null!! </font> <br>";
							}
						}
					</script>
				<tr><td>Name: <br><br></td><td><input type="text" name="name"><br><br></td></tr>
				<tr><td>User Name: <br><br></td><td><input type="text" name="username"><br><br></td></tr>
				<tr><td>Pass Word : <br><br></td><td><input type="password" name="password"><br><br></td></tr>
				<tr><td colspan="2"><center><div id="divResult"></div></center><br></td>
				<tr><td></td><td><input type="submit" name="submit" value="Confirm">
				</form>
				<input type="button" name="cancel" value="Cancel" onclick="window.location.href='./'"></td><br><br></tr>
				</tr>
		</table>
	</center>
@endsection
</body>

</html>