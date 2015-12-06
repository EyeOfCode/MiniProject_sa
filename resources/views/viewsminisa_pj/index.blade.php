<!DOCTYPE html>
<html>

<head>
    <title>Mini</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body class="index">
@extends('layout')
@section('index')
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
                                <circle cx="570" cy="250" r="150" stroke="black" stroke-width="3" fill="Green"/>
                            </svg>
                            <br><center><border><h3>Peter Status: Save</h3></border></center>
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
                            <br><center><border><h3>Comment</h3></border></center>
                        </td>
                    </tr>
                </table>
                </p>
            </div>
        </div>
    </div>
@endsection
</body>

</html>