<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($m = "")
    {
        $data['alumnos'] = Alumno::paginate(5);
        return view('dashboard.index',compact('m'))->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $alumno = new Alumno();
       $alumno->nrocedula = $request->cedula;
       $alumno->nombre = $request->nombre;
       $alumno->turno = $request->turno;
       $alumno->save();
        $mensaje = "Se ha agregado al alumno.";
        return $this->index($mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        $mensaje = "Se ha borrado al alumno.";
        return $this->index($mensaje);
    }
}
