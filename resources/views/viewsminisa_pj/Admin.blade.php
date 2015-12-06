<!DOCTYPE html>
<html>

<head>
    <title>Mini</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body class="admin">
@extends('layout')
@section('admin')
    <br><br><br><br>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Admin</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <p>
                <table border="0">
                    <tr>
                        <td>
                           Add
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