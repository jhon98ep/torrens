<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tareas;

class UsersController extends Controller
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
        $rol = auth()->user()->rol;
        $numero_tareas = Tareas::where('user_id', $id_usuario)->count();
        if($rol == 1){
            $usuarios = User::orderBy('id','ASC')->get();
            asort($usuarios);
            return view('usuarios',['usuarios' => $usuarios, 'numero_tareas' => $numero_tareas]);
        }else{
            return redirect()->route('home');
        }
    }
}