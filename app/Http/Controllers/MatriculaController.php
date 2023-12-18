<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matricula::all();
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
        $matricula = new Matricula();
        $matricula->id_alumno = $request->id_alumno;
        $matricula->id_curso = $request->id_curso;
        $matricula->fecha = $request->fecha;
        $matricula->estado = $request->estado;
        $matricula->save();
        return "La matricula se guardó correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $matricula = Matricula::find($id);
        if ($matricula) {
            return $matricula;
        } else {
            return "La matricula no existe";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $matricula = Matricula::find($id);
        if ($matricula) {
            $matricula->id_alumno = $request->id_alumno;
            $matricula->id_curso = $request->id_curso;
            $matricula->fecha = $request->fecha;
            $matricula->estado = $request->estado;
            $matricula->save();
            return "La matricula se actualizó correctamente";
        } else {
            return "La matricula no existe";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matricula = Matricula::find($id);
        if ($matricula) {
            $matricula->delete();
            return "La matricula se eliminó correctamente";
        } else {
            return "La matricula no existe";
        }
    }
}
