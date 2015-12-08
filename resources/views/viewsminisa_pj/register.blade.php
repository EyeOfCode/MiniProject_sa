<!DOCTYPE html>
<html>

<head>
    <title>Health</title>
</head>

<body class="register">
@extends('layout')
@section('register')
    @if(Session::has('logout')!="logout")
        <center>
            <table border="0">
                <tr>
                <tr>
                    <td colspan="2">
                        <center><h3>Register</h3></center>
                    </td>
                    <br><br>

                    <form method="post" action="/MiniProject_sa/postregister" name="register">
                        <?php echo csrf_field(); ?>

                        <tr>
                            <td>Name: <br><br></td>
                            <td><input type="text" name="name"><br><br></td>
                        </tr>
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
                            <td><input type="submit" name="submit" value="Confirm">
                    </form>
                    <input type="button" name="cancel" value="Cancel" onclick="window.location.href='./'"></td><br><br>
                </tr>
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
    @endif
@endsection
</body>

</html>