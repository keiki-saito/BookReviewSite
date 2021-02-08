@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card mb-3 " style="width: 800px; height:200px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img class="round-img ml-4 mt-4" src="{{ asset('storage/images/' . $user->profile_img) }}"/>
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title mt-4">{{$user->name}}</h5>
            <p class="card-text mt-4">{{$user->profile}}</p>
          </div>
        </div>
      </div>
    </div>
   </div>
   </div>

<!-- ブックマークした本一覧 -->
<div class="container">
<h2 class="text-center">ブックマーク</h2>
    <div class="row">
       @foreach($user->bookmarks as $bookmark)
         @foreach ($books as $book)
         @if($book->id==$bookmark->book_id)
       <div class="col-3 mt-5">
          <div class="card">
            <img src="{{ asset('storage/images/' . $book->book_img) }}" width="100%" height="230">
            <div class="card-body">
                <h5 class="card-title font-italic"><a href="/book/{{$book->id}}">{{$book->title}}</a></h5>
                <p class="card-text">著者：{{$book->author}}</p>
                {{$book->id}}
                {{$bookmark->book_id}}
            </div>
           </div>
       </div>
    @endif
     @endforeach
@endforeach
</div>
</div>



@endsection
