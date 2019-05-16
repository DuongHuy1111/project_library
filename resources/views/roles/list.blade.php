@extends('home')
@section('title', 'Add Role')
@section('content')
    <div class="link offset-11">
        <a href="{{route('roles.create')}}">Create</a>
    </div>
    <h1 class="text-center">Roler User</h1>


    <table class="table table-borderless table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity User</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @if(count($roles) == 0)
            <tr>
                <td colspan="4">No Data</td>
            </tr>
        @else
            @foreach($roles as $key => $role)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td scope="col">{{$role->name}}</td>
                    <td>{{count($role->users)}}</td>
                    <td scope="col">
                        @if($role->image)
                            <img src="{{asset('storage/' .$role->image)}}"  style="width: 90px; height: 100px">
                        @else
                            {{'No Image'}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('roles.delete', ['id' => $role->id])}}">
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('You sure want to delete? {{$role->name}}')">Delete</button>
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