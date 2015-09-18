<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EstablecimientosController extends Controller
{
  public function home(Request $request){
    return view('citySpots.home');
  }

  public function create(Request $request){
    return view('citySpots/establecimientos/create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
          'nombre'      => 'required | string | alpha_dash | max:40',
          'email'       => 'required | email',
          'nickname'    => 'required | string | alpha_num | max:32',
          'password'    => 'required | string | max:30'
      ]);
      $input = $request->all();

      Establecimiento::create($input);
      Session::flash('flash_message', 'El establecimiento nuevo se ha creado con exito!');
      return redirect('/home');
  }

  public function index(Request $request)
{
  $establecimientos = Establecimiento::all();

  return view('citySpots/establecimientos.index', ['establecimientos' => $establecimientos]);
}

public function edit(Request $request, $id)
{
try
{
  $establecimiento = Establecimiento::findOrFail($id);

  return view('citySpots/establecimientos.edit')->withestablecimiento($establecimiento);
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "el establecimiento $id no se ha encontrado!");

  return redirect()->back();
}
}

public function update(Request $request, $id)
  {
    try
    {
      $establecimiento = Establecimiento::findOrFail($id);

      $this->validate($request, [
            'nombre'      => 'required | string | alpha_dash | max:40',
            'email'       => 'required | email',
            'nickname'    => 'required | string | alpha_num | max:32',
            'password'    => 'required | string | max:30'
        ]);
      $input = $request->all();

      $establecimiento->fill($input)->save();

      Session::flash('flash_message', 'establecimiento actualizado');

      return redirect('/home');
    }
    catch(ModelNotFoundException $e)
    {
      Session::flash('flash_message', "El establecimiento $id no se ha encontrado!");

      return redirect()->back();
    }
  }

  public function show(Request $request, $id)
{
try{
  $establecimiento = Establecimiento::findOrFail($id);

  return view('citySpots/establecimientos.show')->withEstablecimiento($establecimiento);
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "El establecimiento $id no fue encontrado!");

  return redirect()->back();
}
}


public function destroy(Request $request, $id)
{
try
{
  $establecimiento = Establecimiento::findOrFail($id);

  $establecimiento->delete();

  Session::flash('flash_message', 'El establecimiento se ha eliminado');

  return redirect()->route('establecimientos.index');
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "El establecimiento $id no ha sido encontrado!");

  return redirect()->back();
}
}
}
