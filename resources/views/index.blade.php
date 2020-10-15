@extends('layouts.app')

@section('content')
  @foreach ($data as $car)
    <ul>
      <li>{{$car->marca}}</li>
      <li>{{$car->modello}}</li>
      <li>{{$car->anno}}</li>
    </ul>
  @endforeach
@endsection
