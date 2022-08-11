<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use App\Models\User;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_usuario = auth()->user()->id;
        $rol = auth()->user()->rol;
        $numero_tareas = Tareas::where('user_id', $id_usuario)->count();
        if($rol == 1){
            /* $tareas = Tareas::all(); */
                $tareas = Tareas::join("users", "users.id", "=", "tareas.user_id")->select("tareas.name","tareas.id","tareas.description","users.name AS nameUs")->get();
                return view('task',['tareas' => $tareas, 'numero_tareas' => $numero_tareas]);
        }else{
            $tareas = Tareas::where('user_id', $id_usuario)->paginate(8);
            return view('task',['tareas' => $tareas, 'numero_tareas' => $numero_tareas]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_usuario = auth()->user()->id;
        $numero_tareas = Tareas::where('user_id', $id_usuario)->count();
        $usuarios = User::all();
        return view('taskCreate',['usuarios' => $usuarios, 'numero_tareas' => $numero_tareas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $tarea = new Tareas();
        $tarea->name = $request->name;
        $tarea->description = $request->description;
        $tarea->user_id = $request->asignado;
        $tarea->save();
        return back()->with('mensaje', 'tarea Agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_usuario = auth()->user()->id;
        $rol = auth()->user()->rol;
        $numero_tareas = Tareas::where('user_id', $id_usuario)->count();
        $tarea = Tareas::where('id', $id)->first();
        return view('taskEdit',['tarea' => $tarea, 'numero_tareas' => $numero_tareas, 'id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Tareas::where('id',$id)->update(['name'=> $request->name, 'description'=> $request->description]);
        return redirect()->route('tareas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tareas::where('id',$id)->delete();
        return redirect()->route('tareas');
    }
}
