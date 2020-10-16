@extends('layouts.app')

@section('content')
  <ul>
    <li>{{$car->marca}}</li>
    <li>{{$car->modello}}</li>
    <li>{{$car->anno}}</li>
  </ul>
@endsection
