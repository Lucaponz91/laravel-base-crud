@extends('layouts.app')
@section('content')
<div class="show_container">
    <div class="show_main">
        <div>
            <h1>{{$comic->title}}</h1>
            <h4>{{$comic['price']}}</h4>
            <p>{{$comic['description']}} </p>
        </div>
        <img src="{{asset('img/adv.jpg')}}" alt="">
    </div>
</div>


@endsection