<?php

namespace App\Http\Controllers;

use App\Mail\mensaje;
use Illuminate\Http\Request;
use App\Tienda;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Object_;

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
       //return Redirect::to('/datos')   ;

       return redirect('datos')->with('success','¡Se guardo correctamente los datos!');
     }


     public function store(Request $request){
     // $mensaje = (object) $request->all();
      /*  $mensaje = new \stdClass();
       $mensaje->name = $request->name;
       $mensaje->email = $request->email;
       $mensaje->phone = $request->phone;
       $mensaje->message = $request->message;
       $mensaje->save();
 */

      /*  Mail::to(Auth::user()->email)->send(new mensaje($mensaje)); */
      $subject = "Nuevo Mensaje";
      $for= "lrmaldo@gmail.com";
      //$for = Auth::user()->email;
      $mensaje = array(
        'nombre' =>$request->name,
        'correo'=>$request->email,
        'telefono' => $request->phone,
        'mensaje'=> $request->message,
      );
      Mail::send('mails.mensaje',$mensaje, function($msj) use($subject,$for){
          $msj->from("tucorreo@gmail.com","Soporte de Desarrollo");
          $msj->subject($subject);
          $msj->to($for);
      });
     }
}
