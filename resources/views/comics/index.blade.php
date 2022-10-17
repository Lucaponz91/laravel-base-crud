elenco fumetti
@extends('layouts.app')

@section('content')
{{-- @dump($comics) --}}
<div class="add_container">
    <a href="{{route('comics.create')}}">Aggiungi Fumetto</a>

</div>
<div class="main_container">
    <div>
        <div class="card_container">

            @foreach ($comics as $comic)

            <div class="card">
                <a href="{{route('comics.show', $comic)}} ">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <h5>{{ $comic['series'] }}</h5>
                    <a href="{{ route('comics.edit', $comic)}}">Modifica Fumetto</a>
                    <form action="{{route('comics.destroy', $comic)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina Fumetto">
                    </form>
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection