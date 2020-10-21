<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function statuses(){
        $status = App\Status::all();

        return view('statuses', compact('status'));
    }

    public function crear(Request $request){
       // return $request->all();
        $newStatus = new App\Status;
        $newStatus->name = $request->name;
        $newStatus->display_name = $request->display_name;
        $newStatus->color = $request->color;
        $newStatus->save();
        return redirect('statuses');
    }

    public function roles(){
        $roles = App\Role::all();

        return view('roles', compact('roles'));
    }

    public function career(){
        $career = App\Career::all();

        return view('career',compact('career'));
    }

    public function users(){
        $users = App\User::all();

        return view('users', compact('users'));
    }

    public function media(){


        return view('media');
    }

    public function mediable(){


        return view('mediable');
    }
}
