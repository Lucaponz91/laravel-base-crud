@extends('layouts.app')
@section('content')
<div class="show_container">
    <div class="show_main">
        <div>
            <h1>{{$comic->title}}</h1>
            <img src="{{$comic['thumb']}}" alt="img">
            <h4>{{$comic['price']}}</h4>
            <p>{{$comic['description']}} </p>
        </div>
        <img class="ad" src="{{asset('img/adv.jpg')}}" alt="">
    </div>
</div>


@endsection