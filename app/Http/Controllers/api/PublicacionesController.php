<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Publicacion;

class PublicacionesController extends Controller
{
  public function listAll(Request $request, $SiteId)
    {
      try
      {
        $response = Publicacion::where('id_establecimiento','=',$SiteId)->get();
        $statusCode = 200;  // OK
      }
      catch (ModelNotFoundException $e)
      {
        $response = null;
        $statusCode = 404;  // Not Found
      }

      return response()->json($response, $statusCode);
    }

    public function listOne(Request $request,$SiteId,$id)
    {try
      {
          $response = Publicacion::where('id_establecimiento','=',$SiteId)
          ->where('id','=',$id)->get();
          $statusCode = 200;  // OK
      }
      catch (ModelNotFoundException $e)
      {
        $response = null;
        $statusCode = 404;  // Not Found
      }

      return response()->json($response, $statusCode);
    }

    public function create(Request $request,$SiteId)
    {
      $request->id_establecimiento=$SiteId;
      $input = $request->all();
      

      try
      {
        $response = Publicacion::create($input);
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
       $publicacion = Publicacion::findOrFail($id);
     }
     catch (ModelNotFoundException $e)
     {
       return response()->json(null, 404);  // Not Found
     }

     $input = $request->all();

     $response = $publicacion->fill($input);

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
     $publicacion = Publicacion::findOrFail($id);
   }
   catch (ModelNotFoundException $e)
   {
     return response()->json(null, 404);  // Not Found
   }

   try
   {
     $response = $publicacion->delete();
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
