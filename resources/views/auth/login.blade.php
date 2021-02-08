@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                    <form class="form mt-5 mx-auto" method="POST" action="{{ route('login') }}" enctype="multipart/form-data" style="width: 600px;">
                        @csrf

                        <div class="form-group @error('email')has-error @enderror">
                            <label>メールアドレス</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力してください">
                            </div>
                            @error('email')
                            <span class="errorMessage">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group @error('password')has-error @enderror">
                            <label>パスワード</label>
                            <em>6文字以上入力してください</em>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="パスワードを入力してください">
                            </div>
                            @error('password')
                            <span class="errorMessage">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      

@endsection
