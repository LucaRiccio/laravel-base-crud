@extends('layouts.app')

@section('content')
<form action="{{(!empty($car)) ? route('cars.update',$car->id) : route('cars.store')}}" method="post">
  @csrf

  @if (!empty($car))
    @method('PATCH')
    <input type="hidden" name="id" value="{{$car->id}}">
  @else
    @method('POST')
  @endif

  <label for="marca">Marca</label>
  <input type="text" name="marca" placeholder="marca" id="marca" value="{{ (!empty($car)) ? $car->marca : old('marca') }}">

  <label for="modello">Modello</label>
  <input type="text" name="modello" placeholder="modello" id="modello" value="{{ (!empty($car)) ? $car->modello : old('modello') }}">

  <label for="anno">Anno</label>
  <input type="text" name="anno" placeholder="anno" id="anno" value="{{ (!empty($car)) ? $car->anno : old('anno')}}">

  <input type="submit" value="Invia">
</form>
@endsection
