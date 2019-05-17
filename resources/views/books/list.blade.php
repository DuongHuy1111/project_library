@extends('home')
@section('title', 'Category Book')
@section('content')
    <h1 style="text-align: center; color: #2d995b">List Books</h1>
    <a href="{{route('book.create')}}">
        <button type="button" class="btn btn-outline-primary">Create</button>
    </a>
    <div class="row">
        @foreach($books as $key => $book)
            <div class="col-3">
                <div class="card text-left" style="width: 100%; height: 400px; margin-left: 20px">
                    <div class="card-body">
                        <div class="links">
                            <a href="">
                                <h5 class="card-title" style="color: #2d995b">{{$book->name}}</h5>
                            </a>
                        </div>
                        <p class="card-img"><img width="150px" src="{{asset('storage/'.$book->image)}}"></p>
                        <p class="card-text">Mô tả: {{$book->description}}</p>
                        <p class="card-text">Thể loại: {{$book->category->name}}</p>
                        <p class="card-text">Tổng: {{$book->quantity}}</p>
                        <a href="{{route('book.destroy',['id'=>$book->id])}}">
                            <button onclick="return confirm('Do you want delete {{$book->name}}?')"
                                    type="button"
                                    class="btn btn-outline-danger">Delete
                            </button>
                        </a>
                        <a href="{{route('book.update', ['id'=>$book->id])}}">
                            <button type="button" class="btn btn-outline-info">Update</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <p class="margin-t text-whitesmoke" style="text-align: center"><small> Văn Linh &copy; 2019</small> </p>
@endsection
