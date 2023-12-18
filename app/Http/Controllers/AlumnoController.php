<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
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
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->email = $request->email;
        $alumno->password = $request->password;
        $alumno->telefono = $request->telefono;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->save();
        return "El alumno se guardó correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        if ($alumno) {
            return $alumno;
        } else {
            return "El alumno no existe";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        if ($alumno) {
            $alumno->nombre = $request->nombre;
            $alumno->apellido = $request->apellido;
            $alumno->email = $request->email;
            $alumno->password = $request->password;
            $alumno->telefono = $request->telefono;
            $alumno->fecha_nacimiento = $request->fecha_nacimiento;
            $alumno->save();
            return "El alumno se actualizó correctamente";
        } else {
            return "El alumno no existe";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if ($alumno) {
            $alumno->delete();
            return "El alumno se eliminó correctamente";
        } else {
            return "El alumno no existe";
        }
    }
}
