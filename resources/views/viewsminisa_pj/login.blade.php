<!DOCTYPE html>
<html>

<head>
    <title>Health</title>
</head>

<body class="login">
@extends('layout')
@section('login')
    @if(Session::has('logout')!="logout")
        <center>
            <table border="0">
                <tr>
                <tr>
                    <td colspan="2">
                        <center><h3>Login</h3></center>
                    </td>
                    <br><br>

                    <form method="post" action="/MiniProject_sa/Cklogin" name="login">
                        <?php echo csrf_field(); ?>
                        <tr>
                            <td>Email: <br><br></td>
                            <td><input type="email" name="email"><br><br></td>
                        </tr>
                        <tr>
                            <td>Pass Word : <br><br></td>
                            <td><input type="password" name="password"><br><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="sub-log" value="Login">
                    </form>
                    <input type="button" name="register" value="Register" onclick="window.location.href='./register'">
                </tr>
            </table>
        </center>
        <br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
@endsection
@endif
</body>

</html>