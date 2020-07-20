<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;
use Illuminate\Support\Facades\Redirect;

class DatosController extends Controller
{
    public function index()
    {
        $datos = Tienda::where('id',1)->first();
        return view('datos.edit',compact('datos'));
    }

    public function update(Request $request, $id)
    {
       /*  $datos = Tienda::where('id',1)->first();
        return view('datos.edit',compact('datos')); */
         $datos = Tienda::find($id);
         $datos->update($request->all());
       return Redirect::to('/datos')   ;
     }
}
