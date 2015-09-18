<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
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
            'nombre'      => 'required | string | alpha_dash | max:40',
            'email'       => 'required | email',
            'nickname'    => 'required | string | alpha_num | max:32',
            'password'    => 'required | string | max:30'
        ]);
        $input = $request->all();

        Usuario::create($input);
        Session::flash('flash_message', 'El usuario nuevo se ha creado con exito!');
        return redirect('/home');
    }

    public function index(Request $request)
{
    $usuarios = Usuario::all();

    return view('citySpots/usuarios.index', ['usuarios' => $usuarios]);
}

public function edit(Request $request, $id)
{
  try
  {
    $usuario = Usuario::findOrFail($id);

    return view('citySpots/usuarios.edit')->withUsuario($usuario);
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "el usuario $id no se encontró!");

    return redirect()->back();
  }
}

public function update(Request $request, $id)
    {
      try
      {
        $usuario = Usuario::findOrFail($id);

        $this->validate($request, [
              'nombre'      => 'required | string | alpha_dash | max:40',
              'email'       => 'required | email',
              'nickname'    => 'required | string | alpha_num | max:32',
              'password'    => 'required | string | max:30'
          ]);
        $input = $request->all();

        $usuario->fill($input)->save();

        Session::flash('flash_message', 'Usuario actualizado');

        return redirect('/home');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El usuario $id no se encontró!");

        return redirect()->back();
      }
    }
}
