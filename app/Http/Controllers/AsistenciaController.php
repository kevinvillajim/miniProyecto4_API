<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Asistencia::all();
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

        $asistencia = new Asistencia();
        $asistencia->id_alumno = $request->id_alumno;
        $asistencia->fecha = $request->fecha;
        $asistencia->tipo_asistencia = $request->tipo_asistencia;
        $asistencia->save();
        return "La asistencia se guardó correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $asistencia = Asistencia::find($id);
        if ($asistencia) {
            return $asistencia;
        } else {
            return "La asistencia no existe";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistencia = Asistencia::find($id);
        if ($asistencia) {
            $asistencia->id_alumno = $request->id_alumno;
            $asistencia->fecha = $request->fecha;
            $asistencia->tipo_asistencia = $request->tipo_asistencia;
            $asistencia->save();
            return "La asistencia se actualizó correctamente";
        } else {
            return "La asistencia no existe";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id);
        if ($asistencia) {
            $asistencia->delete();
            return "La asistencia se eliminó correctamente";
        } else {
            return "La asistencia no existe";
        }
    }
}
