<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo_Establecimiento;
use Session;

class TipoEstablecimientoController extends Controller
{
  public function home(Request $request){
    return view('citySpots.home');
  }

  public function create(Request $request){
    return view('citySpots/categorias/create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
          'nombre'      => 'required | string | max:40',
          'descripcion'   => 'required | string | max:150'
      ]);
      $input = $request->all();

      Tipo_Establecimiento::create($input);
      Session::flash('flash_message', 'La nueva categoria se ha creado con exito!');
      return redirect('establecimientos/create');
  }

  public function index(Request $request)
{
  $categorias = Tipo_Establecimiento::all();

  return view('citySpots/categorias.index', ['categorias' => $categorias]);
}

public function edit(Request $request, $id)
{
try
{
  $categoria = Tipo_Establecimiento::findOrFail($id);

  return view('citySpots/categorias.edit')->withTipo_Establecimiento($categoria);
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "La categoria $id no fue encontrada!");

  return redirect()->back();
}
}

public function update(Request $request, $id)
  {
    try
    {
      $categoria = Tipo_Establecimiento::findOrFail($id);

      $this->validate($request, [
            'nombre'      => 'required | string | max:40',
            'descripcion'   => 'required | string | max:150'
        ]);
      $input = $request->all();

      $categoria->fill($input)->save();

      Session::flash('flash_message', 'categoria actualizada');

      return redirect('/home');
    }
    catch(ModelNotFoundException $e)
    {
      Session::flash('flash_message', "La categoria $id no fue encontrada!");

      return redirect()->back();
    }
  }

  public function show(Request $request, $id)
{
try{
  $categoria = Tipo_Establecimiento::findOrFail($id);

  return view('citySpots/categorias.show')->withTipo_Establecimiento($categoria);
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "La categoria $id no fue encontrada!");

  return redirect()->back();
}
}


public function destroy(Request $request, $id)
{
try
{
  $categoria = Tipo_Establecimiento::findOrFail($id);

  $categoria->delete();

  Session::flash('flash_message', 'La categoria se ha eliminado');

  return redirect()->route('categorias.index');
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "La categoria $id no fue encontrada!");

  return redirect()->back();
}
}
}
