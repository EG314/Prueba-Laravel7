<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CareerController extends Controller
{
    public function career(){
        $career = App\Career::paginate(4);

        return view('career',compact('career'));
    }

    public function crear(Request $request){

        $request->validate([
            'name' => 'required'
        ]);

        $newCareer = new App\Career();
        $newCareer->name = $request->name;
        $newCareer->save();
        return redirect('career');
    }

    public function eliminar(Request $request)
     {
         $career = App\Career::find($request->id);
         $career->delete();
         return redirect('career');
     }
     
     public function editar($id){
        $career = App\Career::findOrFail($id);
        return view('careerEditar', compact('career'));
        
     }

     public function update(Request $request, $id)
     {
        $request->validate([
            'name' => 'required'
        ]);
            $career = App\Career::findOrFail($id);
            $career->name = $request->name;
            //Guardar los datos en la tabla
            $career->save();
            //Redireccionar despues de insertar
            return redirect('career')->with('mensaje', 'Dato actualizado con exito');
        
     }
}
