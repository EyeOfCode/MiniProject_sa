<!DOCTYPE html>
<html>

<head>
    <title>Health</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body class="admin">
@extends('layout')
@section('admin')
    @if(Session::has('logout')=="logout" && Session::get('status')=="1")
        <br><br><br><br>
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Admin</a></li>
            </ul>

            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach ($user as $user)
                            @if($user->status!=1)
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if("$user->status" == 0)
                                    <td>User</td>
                                @elseif("$user->status" == 1)
                                    <td>Admin</td>
                                @endif

                                <div class="delete-con">
                                    <form method="post" action="/MiniProject_sa/delete/{{$user->id}}">
                                        <?php echo csrf_field(); ?>
                                        <td>
                                            <button type="button" class="btn btn-primary center-block"
                                                    onclick="window.location.href='/MiniProject_sa/addAdmin/{{$user->id}}'">
                                                            <span class="glyphicon">
                                                            </span>Add
                                            </button>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-danger center-block">
                                                            <span class="fa fa-cut">
                                                            </span>Delete
                                            </button>
                                        </td>
                                    </form>
                                </div>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection
</body>

</html>