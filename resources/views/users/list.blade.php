@extends('home')
@section('title', 'User')
@section('content')
    <div class="link offset-10 row">
        <a href="{{route('users.create')}}">Sign Up</a>
        <a href="{{route('index')}}">Log out</a>
    </div>
    <h1 class="text-center">Account User</h1>

    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
        @if(count($users) == 0)
            <tr>
                <td colspan="4">No data</td>
            </tr>
            @else
            @foreach($users as $key => $user)
        <tr class="table-warning text-dark">
            <th scope="row">{{++$key}}</th>
            <td scope="col">{{$user->name}}</td>
            <td scope="col">{{$user->password}}</td>
            <td scope="col">{{$user->email}}</td>
            <td scope="col">{{$user->phone}}</td>
            <td scope="col">{{$user->address}}</td>
            <td scope="col">
                @if($user->image)
                    <img src="{{asset('storage/' .$user->image)}}"  style="width: 90px; height: 100px">
                @else
                    {{'No Image'}}
                @endif
            </td>
            <td scope="col">{{$user->role->name}}</td>
            <td>
                <a href="{{route('users.edit', ['id'=>$user->id])}}">
                    <button type="submit" class="btn btn-outline-info btn-sm">Update</button>
                </a>
            </td>
            <td>
                <a href="{{route('users.delete', ['id' => $user->id])}}">
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('You sure want to delete? {{$user->name}}')">Delete</button>
                </a>
            </td>
        </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <style>
        .link a {
            color: #2a9055;
            padding: 0 5px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
@endsection
