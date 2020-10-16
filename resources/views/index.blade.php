@extends('layouts.app')

@section('content')
  @foreach ($data as $car)
    <ul>
      <a href="{{ route('cars.show', $car->id)}}"><li>{{$car->marca}}</li></a>
      <li>{{$car->modello}}</li>
      <li>{{$car->anno}}</li>
      <li>
        <form action="{{ route('cars.destroy',$car->id) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" value="Cancella">
        </form>
      </li>
    </ul>
  @endforeach
@endsection
