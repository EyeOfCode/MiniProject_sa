<!DOCTYPE html>
<html>

<head>

    <title>Health</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="css/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/js/bootstrap.min.js"></script>
</head>

<body class="menu">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand topnav" href="#">Health</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if(Session::has('logout')=="logout")
                    <li>
                        <a>User:{{ Session::get('name') }}</a>
                    </li>
                    @if(Session::get('status')=="1")
                        <li>
                            <a href="/MiniProject_sa/admin">AddStatus</a>
                        </li>
                    @else
                        <li>
                            <a href="/MiniProject_sa/index/{{Session::get('name')}}">Status</a>
                        </li>
                    @endif
                    <li>
                        <a href="/MiniProject_sa/logout">logout</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

</body>

</html>
