<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class UsersController extends Controller
{
    public function users(){
        $users = App\User::paginate(3);
        $rol = App\Role::all();
        $career = App\Career::all();
        $status = App\Status::all();
        return view('users', compact(['users', 'rol', 'career', 'status']));
    }

    public function crear(Request $request){

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_ad' => 'required',
            'role_id' => 'required',
            'career_id' => 'required',
            'status_id' => 'required'

        ]);

        $newUsers = new App\User();
        $newUsers->name = $request->name;
        $newUsers->lastname = $request->lastname;
        $newUsers->username = $request->username;
        $newUsers->email = $request->email;
        $newUsers->password = $request->password;
        $newUsers->is_ad = $request->is_ad;
        $newUsers->role_id = $request->role_id;
        $newUsers->career_id = $request->career_id;
        $newUsers->status_id = $request->status_id;
        $newUsers->save();
        return redirect('users');
    }

    public function eliminar(Request $request)
     {
         $users = App\User::find($request->id);
         $users->delete();
         return redirect('users');
     }
     
     public function editar($id){
        $users = App\User::findOrFail($id);
        $rol = App\Role::all();
        $career = App\Career::all();
        $status = App\Status::all();
        return view('usersEditar', compact(['users', 'rol', 'career', 'status']));
        
     }

     public function update(Request $request, $id)
     {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_ad' => 'required',
            'role_id' => 'required',
            'career_id' => 'required',
            'status_id' => 'required'

        ]);

            $users = App\User::findOrFail($id);
            $users->name = $request->name;
            $users->lastname = $request->lastname;
            $users->username = $request->username;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->is_ad = $request->is_ad;
            $users->role_id = $request->role_id;
            $users->career_id = $request->career_id;
            $users->status_id = $request->status_id;
            //Guardar los datos en la tabla
            $users->save();
            //Redireccionar despues de insertar
            return redirect('users')->with('mensaje', 'Dato actualizado con exito');
        
     }
}
