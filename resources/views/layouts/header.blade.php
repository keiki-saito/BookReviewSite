@section('header')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">
    <a class="my-0 mr-md-auto font-weight-normal" href="/"><img src="{{asset('/images/logo_transparent.png')}}" width="90px" height="90px"></a>
    <nav class="my-2 my-md-0 mr-md-3">
    @if(Auth::check())
        <a class="p-2 text-dark mypage_link"  href="/user/{{Auth::user()->id}}">マイページへ</a>
    @endif
    </nav>
    @if(Auth::check())
    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button">
        Signout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @else
    <a class="mr-3 button" href="{{ route('register') }}">Sign up</a>
    <a class="button" href="{{ route('login') }}">Login</a>
    @endif
</div>





@endsection
