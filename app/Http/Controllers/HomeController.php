<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $productos = productos::all();
        return view('home',compact('productos'));
    }
    public function create(){
        return view('productos.create');
    }
    public function store(Request $request){
        if ($request->hasFile('url_imagen')) {

      

            $image = $request->file('url_imagen');
            $name = 'producto'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagenes/productos/');
            $image->move($destinationPath, $name);

            productos::create([
                'titulo' => $request->input('titulo'),
                'descripcion' => $request->input('descripcion'),
                'precio' => $request->input('precio'),
                
                'url_imagen' =>$request->root().'/imagenes/productos'.'/'.$name,
                
            
        ]);
            
               
                return  Redirect::to('/home');
        }
        
    }
    public function edit($id){
       $registro = productos::find($id);
        return view('productos.edit',compact('registro'));
    }
    public function update(Request $request, $id){
        if($request->url_imagen){
            
            if ($request->hasFile('url_imagen')) {

      

                $image = $request->file('url_imagen');
                $name = 'producto'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/imagenes/productos/');
                $image->move($destinationPath, $name);
    
                
                 $registro = productos::find($id);
                 $registro->titulo = $request->titulo;
                 $registro->descripcion = $request->descripcion;
                 $registro->precio = $request->precio;
		         $registro->img_url =$request->root().'/imagenes/productos'.'/'.$name;
                
	        	$registro->save();
                 
                    return  Redirect::to('/home');
            }
        }else{
            $registro = productos::find($id);
            $registro->titulo = $request->titulo;
            $registro->descripcion = $request->descripcion;
            $registro->precio = $request->precio;
          
           
            $registro->save();
            
               return  Redirect::to('/home');
        }

        

    }

    public function destroy($id){

        productos::destroy($id);

        return Redirect::to('/home');
    }
}
