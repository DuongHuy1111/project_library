@extends('home')
@section('title', 'Update Category')
@section('content')
    <div class="form-group">
        <h1 style="text-align: center; color: #2d995b">Add Book Category</h1>
        <form method="post" action="{{route('category.edit', ['id'=>$category->id])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" required>
                @if($errors->has('name'))
                    <p style="color: red">{{$errors->first('name')}}</p>
                @endif
            </div>
            <div class="form-control">
                <label>Image</label>
                <input type="file" class="form-control-file" name="image">
                @if($errors->has('image'))
                    <p style="color: red">{{$errors->first('image')}}</p>
                @endif
            </div>
            <div class="form-control">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <a href="{{route('category.show')}}">
                    <button type="button" class="btn btn-outline-info">Back</button>
                </a>
            </div>
        </form>
    </div>
@endsection