@extends('layouts.app')
@include('layouts.header')
@section('content')
<div class="container">

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('review.update',$review->id)}}" method="POST" class="mb-4">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="review"></label>
        <textarea name="review" id="review" class="form-control" rows="7">{{$review->review}}</textarea>
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

<script>
    $('#star').raty({
       size: 36,
       starOff: "{{ asset('images/star-off.png') }}",
       starOn: "{{ asset('images/star-on.png') }}",

     });
</script>
@endsection


@include('layouts.footer')

