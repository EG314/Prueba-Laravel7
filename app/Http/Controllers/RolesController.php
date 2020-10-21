<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class RolesController extends Controller
{
    public function roles(){
        $roles = App\Role::paginate(3);

        return view('roles', compact('roles'));
    }

    public function crear(Request $request){

        $request->validate([
            'name' => 'required',
            'display_name' => 'required'
        ]);

        $newRol = new App\Role();
        $newRol->name = $request->name;
        $newRol->display_name = $request->display_name;
        $newRol->save();
        return redirect('roles');
    }

    public function eliminar(Request $request)
     {
         $roles = App\Role::find($request->id);
         $roles->delete();
         return redirect('roles');
     }

     public function editar($id){
        $roles = App\Role::findOrFail($id);
        return view('rolesEditar', compact('roles'));
        
     }

     public function update(Request $request, $id)
     {
        $request->validate([
            'name' => 'required',
            'display_name' => 'required'
        ]);
            $roles = App\Role::findOrFail($id);
            $roles->name = $request->name;
            $roles->display_name = $request->display_name;
            
            //Guardar los datos en la tabla
            $roles->save();
            //Redireccionar despues de insertar
            return redirect('roles')->with('mensaje', 'Dato actualizado con exito');
        
     }
}
