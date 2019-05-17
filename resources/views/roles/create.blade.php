@extends('home')
@section('title', 'Create Role')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col- 12">
                <h1>Add new Role</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('roles.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <label>Name User</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                    <input type="file" class="form-control" name="image" >
                    <br>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
    @endsection