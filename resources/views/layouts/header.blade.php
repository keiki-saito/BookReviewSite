@section('header')

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#ffc478;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-5" href="/">Book</a>
    <div class="collapse navbar-collapse justify-content-end">
        @if(Auth::check())
        <ul class="navbar-nav mr-4">
            <li class="nav-item">
                <a href="users/{{Auth::user()->id}}"><img class="round-img ml-4 mt-3" src="{{ asset('storage/images/' . Auth::user()->profile_img) }}" style="height: 55px; width:55px;"/></a>
                <!-- <span class="my-navbar-item"><a href="users/{{Auth::user()->id}}">{{ Auth::user()->name }}</a>さん</span> -->
            </li>
            <li class="nav-item mt-4 ml-4">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    サインアウト<br />
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @else
            <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
            ｜
            <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
        </ul>
    </div>
    @endif
</nav>


@endsection
