@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mb-3 " style="width: 800px; height:200px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="round-img ml-4 mt-4" src="{{ asset('storage/images/' . $user->profile_img) }}" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-title">
                        <h3 class="card-title mt-4 font-weight-bold">{{$user->name}}さんのマイページ</h3>
                        </div>
                        <div class="card-body">
                            <p class="card-text mt-4">{{$user->profile}}</p>
                            @if(Auth::id()==$user->id)
                               <a href="/user/{{$user->id}}/edit"><i class="fas fa-user-edit"></i>編集</a>
                            @endif
                        </div>
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
        <div class="mt-5 col-2">
            <div class="card">
                <img src="{{ asset('storage/images/' . $book->book_img) }}" width="100%" height="210">

            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
</div>





@endsection

@include('layouts.footer')
