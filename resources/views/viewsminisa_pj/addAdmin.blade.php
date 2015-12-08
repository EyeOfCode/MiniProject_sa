<!DOCTYPE html>
<html>

<head>
    <title>Health</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="../css/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</head>

<body class="addadmin">
@extends('layout')
@section('addadmin')
    @if(Session::has('logout')=="logout" && Session::get('status')=="1")
        <br><br><br><br>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Admin</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>

                    <form method="post" action="/MiniProject_sa/addAdmin/{{$user->id}}">
                        <?php echo csrf_field(); ?>
                        <table border="0">
                            <tr>
                                <td rowspan="5">
                                    <svg height="430" width="550">
                                        <circle cx="290" cy="250" r="150" stroke="black" stroke-width="3" fill="white"/>
                                    </svg>
                                    <br>
                                    <center>
                                        <border><h3>Peter Status: Not Status</h3></border>
                                    </center>
                                </td>
                            <tr>
                                <td><br><br>
                                        Select User:{{$user->name}}<input type="hidden" value="{{$user->name}}"
                                                                    name="username">
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                                    FBS: <input type="if(isNaN(this.value)){ alert('number awy'); this.value='';}"
                                                name="FBS" maxlength="3" >
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                                    BP: <input type="if(isNaN(this.value)){ alert('number awy'); this.value='';}"
                                               name="BP" maxlength="5">
                                </td>
                            </tr>
                            <tr>
                                <td><br>
                                    Suggestion: <br><textarea rows="4" cols="50" name="comment" style=""></textarea>
                                    <br>
                                    <input type="submit" name="submit" value="Submint">
                                    <input type="button" name="back" value="Back"
                                           onclick="window.location='/MiniProject_sa/admin'">
                                    <br><br>
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
                                </td>
                            </tr>
                            </tr>
                        </table>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    @endif
@endsection
</body>

</html>