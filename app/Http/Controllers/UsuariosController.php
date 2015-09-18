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
}
