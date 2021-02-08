@extends('layouts.app')

@include('layouts.header')
@section('content')

<div class="mt-4 mb-4">
    <form class="form-inline" action="{{route('book.index')}}" method="GET">
        <div class="form-group">
            <input type="text" name="searchWord" value="{{$searchWord}}" class="form-control" placeholder="タイトルを入力してください">
        </div>
        <input type="submit" value="検索" class="btn btn-info ml-2">
    </form>
</div>

<div class="mt-4 mb-4">
<form class="form-horizontal find" action = "{{route('book.index')}}" method="get"  class="form-horizontal">
<div class="form-group">
    <select id="year_id" name="year_id">
    @foreach($years as $id=>$year)
        <option value="{{$id}}">{{$year}}</option>
    @endforeach
    </select>
    <input type="submit" value="検索" >
</div>
</form>
</div>


<div class="container">
<div class="row">
@foreach ($books as $book)
<div class="col-3 mt-5">
    <div class="card">
      <img src="{{ asset('storage/images/' . $book->book_img) }}" width="100%" height="230">
    <div class="card-body">
       <h5 class="card-title font-italic"><a href="/book/{{$book->id}}">{{$book->title}}</a></h5>
       <p class="card-text">著者：{{$book->author}}</p>
     </div>
   </div>
   </div>


@endforeach

</div>
</div>
@endsection

@include('layouts.footer')

