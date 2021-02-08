@extends('layouts.app')
<script src="/js/jquery.min.js"></script>
<link href="js/RateIt/rateit.css" rel="stylesheet" type="text/css" />
<script src="js/RateIt/jquery.rateit.min.js"></script>

<script>
    $(function() {
        // RateItの設定 ...（2）
        $("#rateit1").rateit();
    });
</script>

@section('content')
<div class="ml-5">
<div class="row">
<div class="col">
<h1>本の詳細ページ</h1>
<div class="container">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('storage/images/' . $book->book_img) }}" width="100%" height="250">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$book->title}}</h5>
        <p class="card-text">著者：{{$book->author}}</p>
        <p class="card-text">{{$book->year->year}}本屋大賞{{$book->rank}}位</p>
      </div>
    </div>
  </div>
</div>
<div style="width: 40rem;" class="mt-4">
    <blockquote>
        <h2>あらすじ</h2>
        <p>{!! nl2br(e($book->arasuzi)) !!}</p>
    </blockquote>
</div>
</div>
</div>

<div class="col">
<!-- レビュー一覧 -->
@foreach($book->reviews as $review)
    <div class="border-top p-4">
        {{$review->review}}
        {{$review->user->name}}
        {{$review->star}}
    </div>
@endforeach

<!-- レビュー投稿フォーム -->
@if(session('reviewstatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{session('reviewstatus')}}
    </div>
@endif


<form action="{{route('review.store')}}" method="POST" class="mb-4" >
    @csrf
    <input type="hidden" name="book_id" value="{{$book->id}}">
    <div class="form-group">
        <label for="review">
            <textarea name="review" id="review" class="form-control" rows="4"></textarea>
        </label>
    </div>
    <div class="form-group">
        <label for="star">評価</label>
        <input type="text" name="star" id="star">
        <div id="rateit1"></div>
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary">
            投稿する
        </button>
    </div>
</form>

@if (Auth::check())
    @if ($bookmark)
    <form action="{{action('BookMarksController@destroy',$book->id)}}" method="POST" class="mb-4" >
    <input type="hidden" name="book_id" value="{{$book->id}}">
    @csrf
    @method('DELETE')
        <button type="submit">
          ブックマーク解除
        </button>
    </form>
    @else
    <form action="{{action('BookMarksController@store')}}" method="POST" class="mb-4" >
    @csrf
    <input type="hidden" name="book_id" value="{{$book->id}}">
        <button type="submit">
         ブックマーク
        </button>
    </form>

    @endif
  @endif

  @if(session('bookmarkstatus'))
    <div class="alert alert-success mt-4 mb-4">
        {{session('bookmarkstatus')}}
    </div>
@endif





</div>
</div>

</div>
@endsection


