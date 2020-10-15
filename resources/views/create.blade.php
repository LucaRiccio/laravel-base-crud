@extends('layouts.app')

@section('content')
<form action="{{route('cars.store')}}" method="post">
  @csrf

  @method('POST')
  <label for="marca">Marca</label>
  <input type="text" name="marca" placeholder="marca" id="marca">

  <label for="modello">Modello</label>
  <input type="text" name="modello" placeholder="modello" id="modello">

  <label for="anno">Anno</label>
  <input type="text" name="anno" placeholder="anno" id="anno">

  <input type="submit" value="Invia">
</form>
@endsection
