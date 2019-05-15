@extends('home')
@section('title', 'Category Book')
@section('content')
    <div class="form-group">
    <h1 style="text-align: center; color: #2d995b">List Book Category</h1>
        <table class="table">
            <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-outline-primary">Create</button>
            </a>
            <div>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
            </div>
            <div>
                @foreach($categories as $key => $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <a href=""><th scope="col">{{$category->name}}</th></a>
                        <th><img src="{{asset('storage/'.$category->image)}}"></th>
                        <a href="">
                            <button onclick="return confirm('Do you want delete {{$category->name}}?')" type="button"
                                    class="btn btn-outline-danger">Delete
                            </button>
                        </a>
                        <a href="">
                            <button type="button" class="btn btn-outline-info">Update</button>
                        </a>
                    </tr>
                @endforeach
            </div>
        </table>
    </div>
@endsection
