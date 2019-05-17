@extends('home')
@section('title', 'Category Book')
@section('content')
    <h1 style="text-align: center; color: #2d995b">List Book Category</h1>
    <a href="{{route('category.create')}}">
        <button type="button" class="btn btn-outline-primary">Create</button>
    </a>
    <div class="row">
        @foreach($categories as $key => $category)
            <div class="col-3">
                <div class="card text-left" style="width: 100%; height: 300px; margin-left: 20px">
                    <div class="card-body">
                        <div class="links">
                            <a href="">
                                <h5 class="card-title" style="color: #2d995b">Thể loại: {{$category->name}}</h5>
                            </a>
                        </div>

                        <p class="card-img"><img width="200px" src="{{asset('storage/'.$category->image)}}"></p>
                        <a href="{{route('category.delete', ['id'=>$category->id])}}">
                            <button onclick="return confirm('Do you want delete {{$category->name}}?')"
                                    type="button"
                                    class="btn btn-outline-danger">Delete
                            </button>
                        </a>
                        <a href="{{route('category.update', ['id'=>$category->id])}}">
                            <button type="button" class="btn btn-outline-info">Update</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <p class="margin-t text-whitesmoke" style="text-align: center"><small> Văn Linh &copy; 2019</small> </p>
@endsection
