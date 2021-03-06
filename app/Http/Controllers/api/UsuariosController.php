<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsuariosController extends Controller
{
  public function listAll(Request $request)
    {
      try
      {
        $response = User::all();
        $statusCode = 200;  // OK
      }
      catch (ModelNotFoundException $e)
      {
        $response = null;
        $statusCode = 404;  // Not Found
      }

      return response()->json($response, $statusCode);
    }

    public function listOne(Request $request, $id)
    {try
      {
          $response = User::findOrFail($id);
          $statusCode = 200;  // OK
      }
      catch (ModelNotFoundException $e)
      {
        $response = null;
        $statusCode = 404;  // Not Found
      }

      return response()->json($response, $statusCode);
    }

  
    public function create(Request $request)
    {
      $input = $request->all();

      try
      {
        $response = User::create($input);
        $statusCode = 200;  // OK
      }
      catch (QueryException $e)
      {
        $response = null;
        $statusCode = 400;  // Bad Request
      }

      return response()->json($response, $statusCode);

    }

    public function update(Request $request, $id)
    {
      try
     {
       $user = User::findOrFail($id);
     }
     catch (ModelNotFoundException $e)
     {
       return response()->json(null, 404);  // Not Found
     }

     $input = $request->all();

     $response = $user->fill($input);

     try
     {
       $response->save();
       $statusCode = 200;  // OK
     }
     catch (QueryException $e)
     {
       $response = null;
       $statusCode = 400;  // Bad Request
     }

     return response()->json($response, $statusCode);
    }

    public function delete(Request $request, $id)
    {
      try
   {
     $user = User::findOrFail($id);
   }
   catch (ModelNotFoundException $e)
   {
     return response()->json(null, 404);  // Not Found
   }

   try
   {
     $response = $user->delete();
     $statusCode = 200;  // OK
   }
   catch (QueryException $e)
   {
     $response = null;
     $statusCode = 400;  // Bad Request
   }

   return response()->json($response, $statusCode);
    }
}
