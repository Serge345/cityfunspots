<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Publicacion;
use App\User;
use App\Establecimiento;
use Session;
use Illuminate\Support\Facades\Request;

class PublicacionController extends Controller
{
  public function dashboard(){
    return view('citySpots.dashboard');
  }

  public function home(Request $request){
    return view('citySpots.home');
  }

  public function create(Request $request){
    return view('citySpots/publicaciones/create');
  }

  public function store(Request $request, $SiteId)
  {
    $user=Auth::user();


    $this->validate($request, [
          'contenido' => 'required| String | max 250'
      ]);
      $input = $request->all();

      Publicacion::create($input,$user->id,$SiteId);
      Session::flash('flash_message', 'El post se ha creado con exito!');
      return redirect('citySpots.dashboard');
  }

  public function index(Request $request,$id)
{
  $user=Auth::user();
  $site=Establecimiento::findOrFail($id);


  $publicaciones = Publicacion::findOrFail($user->id);

  return view('citySpots/publicaciones.index', ['publicaciones' => $publicaciones,
  'sitio'=>$site]);
}

public function edit(Request $request, $id)
{
try
{
  $publicacion = Publicacion::findOrFail($id);

  return view('citySpots/publicaciones.edit')->withPublicacion($publicacion);
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "el post $id no se ha encontrado!");

  return redirect()->back();
}
}

public function update(Request $request, $id)
  {
    try
    {
      $publicacion = Publicacion::findOrFail($id);

      $  $this->validate($request, [
              'contenido' => 'required| String | max 250'
          ]);
      $input = $request->all();

      $publicacion->fill($input)->save();

      Session::flash('flash_message', 'Post actualizado');

      return redirect()->route('publicaciones.index');
    }
    catch(ModelNotFoundException $e)
    {
      Session::flash('flash_message', "El post $id no se ha encontrado!");

      return redirect()->back();
    }
  }

  public function show(Request $request, $id)
{
try{
  $publicacion = Publicacion::findOrFail($id);

  return view('citySpots/publicaciones.show')->withPublicacion($Publicacion);
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "El post $id no fue encontrado!");

  return redirect()->back();
}
}


public function destroy(Request $request, $id)
{
try
{
  $publicacion = Publicacion::findOrFail($id);

  $publicacion->delete();

  Session::flash('flash_message', 'El post se ha eliminado');

  return redirect()->route('publicaciones.index');
}
catch(ModelNotFoundException $e)
{
  Session::flash('flash_message', "El post $id no ha sido encontrado!");

  return redirect()->back();
}
}
}
