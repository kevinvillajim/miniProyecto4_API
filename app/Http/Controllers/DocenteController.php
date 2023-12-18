<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Docente::all();
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
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->email = $request->email;
        $docente->password = $request->password;
        $docente->telefono = $request->telefono;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
        $docente->save();
        return "El docente se guardó correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $docente = Docente::find($id);
        if ($docente) {
            return $docente;
        } else {
            return "El docente no existe";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);
        if ($docente) {
            $docente->nombre = $request->nombre;
            $docente->apellido = $request->apellido;
            $docente->email = $request->email;
            $docente->password = $request->password;
            $docente->telefono = $request->telefono;
            $docente->fecha_nacimiento = $request->fecha_nacimiento;
            $docente->save();
            return "El docente se actualizó correctamente";
        } else {
            return "El docente no existe";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        if ($docente) {
            $docente->delete();
            return "El docente se eliminó correctamente";
        } else {
            return "El docente no existe";
        }
    }
}
