<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\App as FacadesApp;

class StatusController extends Controller
{
    public function statuses(){
        $status = App\Status::paginate(3);

        return view('statuses', compact('status'));
    }

    public function crear(Request $request){
        // return $request->all();

        //Valida que los datos de entrada existan
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'color' => 'required'
        ]);
        
        //Instanciamineto de la tabla
        $newStatus = new App\Status;
        //Variables para insertar
        $newStatus->name = $request->name;
        $newStatus->display_name = $request->display_name;
        $newStatus->color = $request->color;
        //Guardar los datos en la tabla
        $newStatus->save();
        //Redireccionar despues de insertar
        return redirect('statuses');
     }

     public function eliminar(Request $request)
     {
         $status = App\Status::find($request->id);
         $status->delete();
         return redirect('statuses');
     }
     
     public function editar($id){
        $status = App\Status::findOrFail($id);
        return view('statusesEditar', compact('status'));
        
     }

     public function update(Request $request, $id)
     {
        $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'color' => 'required'
        ]);
            $status = App\Status::findOrFail($id);
            $status->name = $request->name;
            $status->display_name = $request->display_name;
            $status->color = $request->color;
            //Guardar los datos en la tabla
            $status->save();
            //Redireccionar despues de insertar
            return redirect('statuses')->with('mensaje', 'Dato actualizado con exito');
        
     }
     
}
