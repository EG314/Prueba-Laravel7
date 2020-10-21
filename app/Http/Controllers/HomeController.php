<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $status = Status::all();
        dd($status);
        $status = Status::query()->where('name', 'pendiente')->get();
        
        return view('home');
    }
}
