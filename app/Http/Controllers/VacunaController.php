<?php

namespace App\Http\Controllers;

use App\Models\Vacuna;
use Illuminate\Http\Request;

class VacunaController extends Controller
{

    public function index()
    {
        //Extraer todas las vacunas de la base de datos con el término buscado
        $termino = isset($_GET['search']) ? $_GET['search'] : null;
        $vacunas = Vacuna::query()->when($termino, function ($query) use ($termino) {
            return $query->where('nombre', 'like', '%' . $termino . '%');
        })->paginate(20);
        
        // Devolver la vista y pasar las vacunas
        return view('vacunas.index', compact('vacunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar el formulario para crear una nueva vacuna
        return view('vacunas.create');
    }


    public function store(Request $request)
    {
        //insertar una nueva vacuna en la base de datos
        $vacuna = new Vacuna();
        $vacuna->nombre = $request->nombre;
        $vacuna->indicaciones = $request->indicaciones;
        $vacuna->save();
        return redirect('/vacunas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacuna  $vacuna
     * @return \Illuminate\Http\Response
     */
    public function show(Vacuna $vacuna)
    {
         //mostrar la vacuna en detalle
         return view('vacunas.show', compact('vacuna'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacuna  $vacuna
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacuna $vacuna)
    {
        //Mostrar la vista editar vacuna
        return view('vacunas.edit', compact('vacuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacuna  $vacuna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacuna $vacuna)
    {
        //guardar los cambios realizados en la base de datos
        $vacuna->nombre = $request->nombre;
        $vacuna->indicaciones = $request->indicaciones;
        $vacuna->save();
        return redirect('/vacunas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacuna  $vacuna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacuna $vacuna)
    {
        //Eliminar la vacuna de la base de datos
        $vacuna->delete();
        return redirect('/vacunas');

    }
}
