@extends('layouts.app')
@section('content')
form di creazione
<form action="{{ route('comics.store') }}" method="POST">

    @csrf 

    <p>
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" placeholder="Titolo Fumetto">
    </p>

    <p>
      <label for="description">Descrizione</label>
      <input type="text" name="description" id="description" placeholder="Descrizione">
    </p>

    <p>
      <label for="thumb">Url img</label>
      <input type="text" name="thumb" id="thumb" placeholder="url img">
    </p>

    <p>
      <label for="price">Prezzo</label>
      <input type="price" name="price" id="price" placeholder="Prezzo">
    </p>

    <p>
      <label for="series">Serie</label>
      <input type="text" name="series" id="series" placeholder="Serie">
    </p>

    <p>
      <label for="sale_date">Data di uscita</label>
      <input type="date" name="sale_date" id="sale_date" placeholder="Data di uscita">
    </p>

    <p>
        <label for="type">Genere</label>
        <input type="text" name="type" id="type" placeholder="Genere">
      </p>

    <p>
      <input type="submit" value="Salva">
    </p>

  </form>

@endsection