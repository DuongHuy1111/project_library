@extends('home')
@section('title', 'Create User')
@section('content')
    <div class="container">
        <h1 class="text-center"></h1>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">
                <legend><a href="http://hocwebgiare.com/"><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành
                    viên!
                </legend>

                <form action="{{route('users.store')}}" class="form" role="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Full name" required>
                    @if($errors->has('name'))
                        <p class="alert-danger">{{$errors->first('name')}}</p>
                        @endif
                    <input class="form-control" name="password" placeholder="Password" type="password" required>
                    @if($errors->has('password'))
                        <p class="alert-danger">{{$errors->first('password')}}</p>
                    @endif
{{--                    <input class="form-control" name="retypepassword" placeholder="Re-enter the password" type="password"required>--}}
                    <input class="form-control" name="email" placeholder="Email" type="email" required>
                    @if($errors->has('email'))
                        <p class="alert-danger">{{$errors->first('email')}}</p>
                    @endif
                    <input class="form-control" name="phone" placeholder="Phone" required>
                    @if($errors->has('phone'))
                        <p class="alert-danger">{{$errors->first('phone')}}</p>
                    @endif
                    <input class="form-control" name="address" placeholder="Address" required>
                    @if($errors->has('address'))
                        <p class="alert-danger">{{$errors->first('address')}}</p>
                    @endif
                    <div class="form-group">
                        <select class="form-control" name="role_id">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
{{--                    <input class="form-control" name="role_id" placeholder="Role" required>--}}
                    <input type="file" class="form-control" name="image" >


                    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button>
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