@extends('home')
@section('title', 'Add User')
@section('content')
    <div class="container">
        <h1 class="text-center"></h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">
                <legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe"></i></a>Update User
                </legend>

                <form action="{{route('users.update',['id' => $user->id])}}" class="form" role="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Full name" value="{{$user->name}}" required>
                    <input class="form-control" name="password" placeholder="Password" type="password" value="{{$user->password}}" required>
                    {{--                    <input class="form-control" name="retypepassword" placeholder="Re-enter the password" type="password"required>--}}
                    <input class="form-control" name="email" placeholder="Email" type="email" value="{{$user->email}}" required>
                    <input class="form-control" name="phone" placeholder="Phone" value="{{$user->phone}}" required>
                    <input class="form-control" name="address" placeholder="Address" value="{{$user->address}}" required>
                    <select class="form-control" name="role_id">
                        @foreach($roles as $role)
                            <option
                                    @if($user->role_id == $role->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
{{--                    <input class="form-control" name="role_id" placeholder="Role" value="{{$user->role_id}}" required>--}}
                    <input type="file" class="form-control" name="image" >


                    <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
                    <button class="btn btn-lg btn-warning btn-block" onclick="window.history.go(-1); return false;">Cancle</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        body {
            padding-top: 50px;
            padding-left: 300px;
        }

        .form-control {
            margin-bottom: 10px;
        }

        .login-screen-bg {
            background-color: #EFEFEF;
        }
    </style>
    @endsection