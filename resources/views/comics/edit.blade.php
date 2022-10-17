@extends('layouts.app')
@section('content')
form di creazione
<form action="{{ route('comics.update',$comic) }}" method="POST">

    @csrf 
    @method('PUT')

    <p>
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" value="{{old('title'), $comic->title}}" placeholder="Titolo Fumetto">
    </p>

    <p>
      <label for="description">Descrizione</label>
      <input type="text" name="description" value="{{old('description'),$comic->description}}" id="description" placeholder="Descrizione">
    </p>

    <p>
      <label for="thumb">Url img</label>
      <input type="text" name="thumb" value="{{old('thumb'),$comic->thumb}}" id="thumb" placeholder="url img">
    </p>

    <p>
      <label for="price">Prezzo</label>
      <input type="price" name="price" value="{{old('price'),$comic->price}}" id="price" placeholder="Prezzo">
    </p>

    <p>
      <label for="series">Serie</label>
      <input type="text" name="series" value="{{old('series'),$comic->series}}" id="series" placeholder="Serie">
    </p>

    <p>
      <label for="sale_date">Data di uscita</label>
      <input type="date" name="sale_date" value="{{old('sale_date'),$comic->sale_date}}" id="sale_date" placeholder="Data di uscita">
    </p>

    <p>
        <label for="type">Genere</label>
        <input type="text" name="type" value="{{old('type'),$comic->type}}" id="type" placeholder="Genere">
      </p>

    <p>
      <input type="submit" value="Salva">
    </p>

  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection