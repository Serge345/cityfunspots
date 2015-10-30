<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UsuariosController extends Controller
{


    public function home(Request $request){
      return view('citySpots.home');
    }

    public function create(Request $request){
      return view('citySpots/usuarios/create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
            'name'      => 'required | string | max:40',
            'email'       => 'required | email',
            'nickname'    => 'required | string | alpha_num | max:32',
            'password'    => 'required | string |min:6| max:30'
        ]);
        $input = $request->all();

        User::create($input);
        Session::flash('flash_message', 'El usuario nuevo se ha creado con exito!');
        return redirect('/home');
    }

    public function index(Request $request)
{
    $usuarios = User::all();

    return view('citySpots/usuarios.index', ['usuarios' => $usuarios]);
}

public function edit(Request $request, $id)
{
  try
  {
    $usuario = User::findOrFail($id);

    return view('citySpots/usuarios.edit')->withUsuario($usuario);
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "el usuario $id no se ha encontrado!");

    return redirect()->back();
  }
}

public function update(Request $request, $id)
    {
      try
      {
        $usuario = User::findOrFail($id);

        $this->validate($request, [
              'nombre'      => 'required | string  | max:40',
              'email'       => 'required | email',
              'nickname'    => 'required | string | alpha_num | max:32',
              'password'    => 'required | string |min:6 | max:30'
          ]);
        $input = $request->all();

        $usuario->fill($input)->save();

        Session::flash('flash_message', 'Usuario actualizado');

        return redirect('/home');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El usuario $id no se ha encontrado!");

        return redirect()->back();
      }
    }

    public function show(Request $request, $id)
{
  try{
    $usuario = User::findOrFail($id);

    return view('citySpots/usuarios.show')->withUsuario($usuario);
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "El usuario $id no fue encontrado!");

    return redirect()->back();
  }
}


public function destroy(Request $request, $id)
{
  try
  {
    $usuario = User::findOrFail($id);

    $usuario->delete();

    Session::flash('flash_message', 'El usuario se ha eliminado');

    return redirect()->route('usuarios.index');
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "El usuario $id no ha sido encontrado!");

    return redirect()->back();
  }
}

}
