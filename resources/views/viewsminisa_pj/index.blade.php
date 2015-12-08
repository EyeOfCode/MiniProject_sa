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

<body class="index">
@extends('layout')
@section('index')
    @if(Session::has('logout')=="logout")
        <br><br><br><br>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Status</a></li>
                <li><a data-toggle="tab" href="#menu1">Suggestion</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <p>
                    <table border="0">
                        <tr>
                            <td>
                                <svg height="430" width="1135">
                                    @if($st->FBS<100 && $st->FBS>0)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill="white"/>
                                    @elseif($st->FBS>=100 && $st->FBS<125)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill="#00FF00"/>
                                    @elseif($st->FBS>=125 && $st->FBS<126)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill="DarkGreen"/>
                                    @elseif($st->FBS>=126 && $st->FBS<=154)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill="Yellow"/>
                                    @elseif($st->FBS>=155 && $st->FBS<=182)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill="Orange"/>
                                    @elseif($st->FBS>=183 && $st->BP<1.8)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill="Red"/>
                                    @elseif($st->FBS>=183 && $st->BP>=1.8)
                                        <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3"
                                                fill=""/>
                                    @endif
                                </svg>
                                @if($st->FBS==0)
                                    <h1>Not Status!!</h1>
                                @endif
                                <br>
                                <center>
                                    @if($st->FBS<100 && $st->FBS>0)
                                        <border><h3><B>Peter Status: Save</B></h3></border>
                                    @elseif($st->FBS>=100 && $st->FBS<125)
                                        <border><h3><B>Peter Status: Risky</B></h3></border>
                                    @elseif($st->FBS>=125 && $st->FBS<126)
                                        <border><h3><B>Peter Status: Sick 0</B></h3></border>
                                    @elseif($st->FBS>=126 && $st->FBS<=154)
                                        <border><h3><B>Peter Status: Sick 1</B></h3></border>
                                    @elseif($st->FBS>=155 && $st->FBS<=182)
                                        <border><h3><B>Peter Status: Sick 2</B></h3></border>
                                    @elseif($st->FBS>=183 && $st->BP<1.8)
                                        <border><h3><B>Peter Status: Sick 3</B></h3></border>
                                    @elseif($st->FBS>=183 && $st->BP>=1.8)
                                        <border><h3><B>Peter Status: Complications</B></h3></border>
                                    @endif
                                </center>
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <p>
                    <table border="0">
                        <tr>
                            <td>
                                <br>
                                <border><h4><B>Name: {{$st->username}}</B></h4></border>
                                <br>
                                <border><h4><B>FBS: {{$st->FBS}}</B></h4></border>
                                <br>
                                <border><h4><B>BP: {{$st->BP}}</B></h4></border>
                                <br>
                                <border><h3><B>::Comment::</B></h3></border>
                                <br>
                                <border><h5>{{$st->comment}}</h5></border>
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
    @endif
@endsection
</body>

</html>