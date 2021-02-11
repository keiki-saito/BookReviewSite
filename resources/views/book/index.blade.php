@extends('layouts.app')

@include('layouts.header')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-3 pb-md-4 mx-auto text-center">

    <h1 class="display-4">BOOKON</h1>

    <p class="lead">〜本屋大賞限定レビューサイト〜</p>

　    <star-rating v-model="rating"></star-rating>
    </div>

</div>
<div class="mt-4">
    <div class="container">
        <div class="row">
            <form class="form-inline" action="{{route('book.index')}}" method="GET" width="400px">
                <div class="form-group">
                    <input type="text" name="searchWord" value="{{$searchWord}}" class="search" placeholder="Search">
                    <input type="submit" value="検索" class="button ml-3">
                </div>
            </form>


            <div class="ml-5">
                <form class="form-horizontal find form-inline" action="{{route('book.index')}}" method="get" class="form-horizontal">
                    <div class="form-group">
                        <select id="year_id" name="year_id" class="custom-select">
                            @foreach($years as $id=>$year)
                            <option value="{{$id}}">{{$year}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="検索" class="ml-3 button">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-3 mt-4 mb-3">
            <div class="card book-card">
                <img src="{{ asset('/images/' . $book->book_img) }}" width="100%" height="220">
                <div class="card-body">
                    <h5 class="card-title font-italic"><a href="/book/{{$book->id}}">{{$book->title}}</a></h5>
                    <p class="card-text">著者：{{$book->author}}</p>
                </div>
            </div>
        </div>


        @endforeach

    </div>

@endsection

@include('layouts.footer')

