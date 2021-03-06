<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Establecimiento;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
class EstablecimientosController extends Controller
{
  public function listAll(Request $request)
    {
      try
      {
        $response = Establecimiento::all();
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
          $response = Establecimiento::findOrFail($id);
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
        $response = Establecimiento::create($input);
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
       $establecimiento = Establecimiento::findOrFail($id);
     }
     catch (ModelNotFoundException $e)
     {
       return response()->json(null, 404);  // Not Found
     }

     $input = $request->all();

     $response = $establecimiento->fill($input);

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
     $establecimiento = Establecimiento::findOrFail($id);
   }
   catch (ModelNotFoundException $e)
   {
     return response()->json(null, 404);  // Not Found
   }

   try
   {
     $response = $establecimiento->delete();
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
