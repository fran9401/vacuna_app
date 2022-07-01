<?php

namespace App\Http\Controllers;

use App\Models\PersonaVacuna;
use Illuminate\Http\Request;

class PersonaVacunaController extends Controller
{
    //lista de vacunas para el select de la vista
    public $vacunas = [
        'BCG' => 'BCG', 'DPT' => 'DPT', 'HEPB' => 'HEPB', 'HIB' => 'HIB', 'HIV' => 'HIV', 'MMR' => 'MMR', 'RV' => 'RV', 'VAR' => 'VAR', 'VZV' => 'VZV'];

    public function index()
    {
        //extraer todos los registros de la tabla persona_vacuna
        $persona_vacuna= PersonaVacuna::paginate(20);
        //devolver la vista y pasar los registros
        return view('personas-vacunas.index', compact('persona_vacuna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //estraer la lista de personas
        $personas = \App\Models\Persona::all();

        //estraer la lista de vacunas
        $vacunas = \App\Models\Vacuna::all();

        //devolver la vista y pasar los datos
        return view('personas-vacunas.create', compact('personas', 'vacunas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //inserta una nueva dosis en la base de datos
        $persona_vacuna = new PersonaVacuna();
        $persona_vacuna->dosis= $request->dosis;
        $persona_vacuna->fecha = $request->fecha;
        $persona_vacuna->laboratorio = $request->laboratorio;
        $persona_vacuna->lote = $request->lote;
        $persona_vacuna->save();
        return redirect('/personas-vacunas');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonaVacuna  $personaVacuna
     * @return \Illuminate\Http\Response
     */
    public function show(PersonaVacuna $personaVacuna)
    {
        //mostrar el detalle de una dosis
        return view('personas-vacunas.show', compact('personaVacuna'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonaVacuna  $personaVacuna
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonaVacuna $personaVacuna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonaVacuna  $personaVacuna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonaVacuna $personaVacuna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonaVacuna  $personaVacuna
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonaVacuna $personaVacuna)
    {
        //
    }
}
