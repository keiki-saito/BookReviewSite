@extends('layouts.app')

@section('content')
<div class="signupPage">
  <header class="header">
    <div>アカウントを作成</div>
  </header>
  <div class='container'>

    <form class="form mt-5 mx-auto" method="POST" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data" style="width: 600px;">
    @csrf
    @method('PUT')
      <label for="file_photo" class="rounded-circle userProfileImg">
        <div class="userProfileImg_description">画像をアップロード</div>
        <i class="fas fa-camera fa-3x"></i>
        <input type="file" id="file_photo" name="profile_img">

      </label>
      <div class="userImgPreview" id="userImgPreview">
        <img id="thumbnail" class="userImgPreview_content" accept="image/*" src="">
        <p class="userImgPreview_text">画像をアップロード済み</p>
      </div>

      <div class="form-group @error('name')has-error @enderror">
        <label>名前</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="名前を入力してください" value="{{$user->name}}">
        </div>
        @error('name')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror

    </div>
      <div class="form-group @error('email')has-error @enderror">
        <label>メールアドレス</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
            </div>
           <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください" value="{{$user->email}}">
        </div>
        @error('email')
            <span class="errorMessage">
              {{ $message }}
            </span>
        @enderror
      </div>



      <div class="form-group @error('profile')has-error @enderror">
        <label>自己紹介文</label>
        <textarea class="form-control" name="profile" rows="10"></textarea>
          @error('profile')
          <span class="errorMessage">
            {{ $message }}
          </span>
          @enderror
        </div>
    </div>

      <div class="text-center">
      <button type="submit" class="btn submitBtn">編集</button>
      </div>
    </form>
  </div>
</div>
@endsection


