@extends('home')
@section('title', 'Update Category')
@section('content')
    <div class="form-group">
        <h1 style="text-align: center; color: #2d995b">Add Book Category</h1>
        <form method="post" action="{{route('book.edit', ['id'=>$book->id])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Book Name</label>
                <input type="text" class="form-control" name="name" value="{{$book->name}}" required>
                @if($errors->has('name'))
                    <p style="color: red">{{$errors->first('name')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="{{$book->description}}" required>
            </div>
            <div class="form-control">
                <label>Image</label>
                <input type="file" class="file" name="image">
                @if($errors->has('image'))
                    <p style="color: red">{{$errors->first('image')}}</p>
                @endif
            </div>
            <div class="form-control">
                <label>Category</label>
                <select class="file" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                @if($category->id==$book->category->id)
                                selected
                                @endif
                        >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" class="form-control" name="totalQty" value="{{$book->totalQty}}" required>
            </div>
            @if($errors->has('totalQty'))
                <p style="color: red">{{$errors->first('totalQty')}}</p>
            @endif
            <div class="form-control">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <a href="{{route('book.show')}}">
                    <button type="button" class="btn btn-outline-info">Back</button>
                </a>
            </div>
        </form>
    </div>
@endsection