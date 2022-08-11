<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

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
        $id_usuario = auth()->user()->id;
        $numero_tareas = Tareas::where('user_id', $id_usuario)->count();       
        return view('home', ['numero_tareas' => $numero_tareas]);
    }
}
