<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carrucel;
use App\productos;
use App\Tienda;
class InicioController extends Controller
{
    public function index()
    {
        $carrusel = carrucel::all();
        $productos = productos::all();
        $datos = Tienda::where('id',1)->first();
       return view('welcome',compact(['carrusel','productos','datos']));
     // return $carrusel;
    }
}
