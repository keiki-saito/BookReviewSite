@extends('layouts.app')

@include('layouts.header')
@section('content')

@if(session('flash_message'))
<div class="alert alert-success mt-4 mb-4">
    {{session('flash_message')}}
</div>
@endif


<div class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>本の詳細ページ</h1>
                <div class="container">
                    <div class="card mb-3 book-card" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('/images/' . $book->book_img) }}" width="100%" height="250">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    @if (Auth::check())
                                    @if ($bookmark)
                                    <form action="{{action('BookMarksController@destroy',$book->id)}}" method="POST" class="mb-4">
                                        <input type="hidden" name="book_id" value="{{$book->id}}">
                                        @csrf
                                        @method('DELETE')

                                        <button><i class="fas fa-bookmark marked fa-2x"></i></button>

                                    </form>
                                    @else
                                    <form action="{{action('BookMarksController@store')}}" method="POST" class="mb-4">
                                        @csrf
                                        <input type="hidden" name="book_id" value="{{$book->id}}">

                                        <button><i class="fas fa-bookmark no-marked fa-2x"></i></button>

                                    </form>

                                    @endif
                                    @endif

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

            <div class="col-4">
                <!-- レビュー一覧 -->
                @foreach($reviews as $review)
                <div class="card mb-3">
                    <a href="/user/{{$review->user->id}}"">
                        <h5 class=" card-header"><img class="round-img" src="{{$review->user->profile_img}}" style="height: 55px; width:55px;"><span class="ml-3">{{$review->user->name}}</span>
                    </a>
                    @switch($review->star)
                    @case(1)
                    <span>⭐</span>
                    @break
                    @case(2)
                    <span>⭐⭐</span>
                    @break
                    @case(3)
                    <span>⭐⭐⭐</span>
                    @break
                    @case(4)
                    <span>⭐⭐⭐⭐</span>
                    @break
                    @case(5)
                    <span>⭐⭐⭐⭐⭐</span>
                    @break
                    @endswitch
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                        {!! nl2br(e($review->review)) !!}
                        </p>



                        <div class="edit_delete">
                            @if(Auth::id()==$review->user->id)
                            <form style="display: inline-block;" method="POST" action="{{ action('ReviewsController@destroy', $review->id) }}">
                                @csrf
                                @method('DELETE')
                                <button><i class="fas fa-trash-alt mr-1"></i>削除</button>
                            </form>

                            <a href="/review/{{$review->id}}/edit" style="text-decoration: none;" <i class="fas fa-edit mr-1 ml-1"></i>編集</a>
                            @endif
                        </div>

                    </div>
                </div>
                @endforeach
                <div class="mt-3">{{ $reviews->links() }}</div>




                <!-- レビュー投稿フォーム -->


                <form action="{{route('review.store')}}" method="POST" class="mb-4">
                    @csrf
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <div class="form-group">
                        <label for="review"></label>
                        <textarea name="review" id="review" class="form-control" rows="7"></textarea>
                    </div>

                    <div class="form-group">
                        <p name="star" id="star"></p>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="button">
                            投稿する
                        </button>
                    </div>
                </form>




                </div>


        </div>



    </div>
    <script>
        $('#star').raty({
            size: 36,
            starOff: "{{ asset('images/star-off.png') }}",
            starOn: "{{ asset('images/star-on.png') }}",

        });
    </script>
</div>
@endsection

@include('layouts.footer')
