<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carrucel;
use Redirect;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $carrusel  =  carrucel::all();
        return view('carrusel.index',compact('carrusel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carrusel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if ($request->hasFile('url_imagen')) {

      

            $image = $request->file('url_imagen');
            $name = 'carrusel'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/carrusel/');
            $image->move($destinationPath, $name);

            carrucel::create([
                'titulo' => $request->input('titulo'),
                'descripcion' => $request->input('descripcion'),
                'url_imagen' =>$request->input('url_imagen'),
                'url_imagen' =>$request->root().'/imagenes/carrusel'.'/'.$name,
                
            
        ]);
            
               
                return  Redirect::to('/carrusel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrusel = carrucel::find($id);
        return view('carrusel.edit',compact('carrusel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->url_imagen){
            
            if ($request->hasFile('url_imagen')) {

      

                $image = $request->file('url_imagen');
                $name = 'carrusel'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/imagenes/carrusel/');
                $image->move($destinationPath, $name);
    
                
                 $registro = carrucel::find($id);
                 $registro->titulo = $request->titulo;
                 $registro->descripcion = $request->descripcion;
                
		         $registro->img_url =$request->root().'/imagenes/carrusel'.'/'.$name;
                
	        	$registro->save();
                 
                    return  Redirect::to('/carrusel');
            }
        }else{
            $registro = carrucel::find($id);
            $registro->titulo = $request->titulo;
            $registro->descripcion = $request->descripcion;
           
          
           
            $registro->save();
            
               return  Redirect::to('/carrusel');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      carrucel::destroy($id);
      return Redirect::to('/carrusel');
       
    }
}
