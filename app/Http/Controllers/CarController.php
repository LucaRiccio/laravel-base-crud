<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car; // Collego il model

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Car::all(); //prende tutti i campi della tabella
      return view('index', compact('data')); // passo i dati alla index.blade
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      // if (empty($data['marca']) || empty($data['modello']) || empty($data['anno'])) {
      //   return back()->withInput();
      // }

      $userNew = new Car;
      // $userNew->marca = $data['marca']; // deve corrispondere con il form
      // $userNew->modello = $data['modello']; // deve corrispondere con il form
      // $userNew->anno = $data['anno']; // deve corrispondere con il form
      $userNew->fill($data);
      $userNew->save();
      return redirect()->route('cars.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show(Car $car)
     {
       return view('show',compact('car'));
     }

    // public function show($id)
    // {
    //   $car = Car::find($id);
    //   return view('show',compact('car'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
      return view('create',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
      $data = $request->all();
      $car->update($data);
      return view('show',compact('car'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
      $car->delete();
      return redirect()->route('cars.index');
    }
}
