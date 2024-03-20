<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller

{
 
    public function index()
    {
        //inicio
      
        //$datos = 'metaflix'; 

    //return view('welcome', compact('datos'));
    $datos = Personas::all();   
    return view('inicio', compact('datos'));

    }


    public function index_1()
    {
        //inicio
      
        //$datos = 'metaflix'; 

    //return view('welcome', compact('datos'));
    $datos = Personas::all();   
    return view('ini', compact('datos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //formulario
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //guardar datos se cre objeto, y lo resguarda en la base de datos.
       $personas = new Personas ();
       $personas->nombres = $request->post('nombres');
       $personas->apellidos = $request->post('apellidos');
       $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
       $personas->password = $request->post('password');
       $personas->save();

       return redirect()->route("personas.index")->with("success", "Agredado con exito!");
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //obtener registro
        $personas = Personas::find($id);
        return view("eliminar" , compact('personas'));    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //trer datos a editar
       $personas = personas::find($id);
        return view("actualizar" , compact('personas'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //acceso actualiza
    $personas = Personas::find($id);
    $personas->nombres = $request->post('nombres');
    $personas->apellidos = $request->post('apellidos');
    $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
    $personas->password = $request->post('password');
    $personas->save();


    return redirect()->route("personas.index")->with("success", "Actualizado con exito!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //elimina

        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
 }



