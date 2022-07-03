<?php

namespace App\Http\Controllers;

use App\Models\PersonaVacuna;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class PersonaVacunaController extends Controller
{
    //lista de vacunas para el select de la vista
    public $vacunas = [
        'BCG' => 'BCG', 'DPT' => 'DPT', 'HEPB' => 'HEPB', 'HIB' => 'HIB', 'HIV' => 'HIV', 'MMR' => 'MMR', 'RV' => 'RV', 'VAR' => 'VAR', 'VZV' => 'VZV'];

    public function index()
    {
        //extraer todos los registros de la tabla usando el termino buscado
        $termino = isset($_GET['search']) ? $_GET['search'] : null;
        $persona_vacuna= PersonaVacuna::query()->when($termino, function ($query) use ($termino) {
            return $query->where('persona_id', 'like', '%' . $termino . '%');
        })->paginate(20);
        //devolver la vista y pasar los registros
        return view('personas-vacunas.index', compact('persona_vacuna'));
    }


    public function create()
    {

        //extraer la lista de personas
        $personas = \App\Models\Persona::query()
        ->select('id', 'nombre')
        ->get()
        ->pluck('nombre', 'id');

        $vacunas = \App\Models\Vacuna::query()
        ->select('id', 'nombre')
        ->get()
        ->pluck('nombre', 'id');

        //devolver la vista y pasar los datos
        return view('personas-vacunas.create', compact('personas', 'vacunas'));
    }


    public function store(Request $request)
    {

        //inserta una nueva dosis en la base de datos
        $persona_vacuna = new PersonaVacuna();
        $persona_vacuna->persona_id = $request->persona_id;
        $persona_vacuna->vacuna_id = $request->vacuna_id;
        $persona_vacuna->dosis= $request->dosis;
        $persona_vacuna->fecha = $request->fecha;
        $persona_vacuna->laboratorio = $request->laboratorio;
        $persona_vacuna->lote = $request->lote;
        $persona_vacuna->save();
        return redirect('/personas-vacunas');

    }

    public function show(PersonaVacuna $personas_vacuna)
    {
        //mostrar el detalle de una dosis
        return view('personas-vacunas.show', compact('personas_vacuna'));

    }


    public function edit(PersonaVacuna $personas_vacuna)
    {
        //extraer la lista de personas
        $personas = \App\Models\Persona::query()
        ->select('id', 'nombre')
        ->get()
        ->pluck('nombre', 'id');

        $vacunas = \App\Models\Vacuna::query()
        ->select('id', 'nombre')
        ->get()
        ->pluck('nombre', 'id');

        //devolver la vista y pasar los datos
        return view('personas-vacunas.edit', compact('personas_vacuna','personas', 'vacunas'));
    }


    public function update(Request $request, PersonaVacuna $personas_vacuna)
    {
        //guardar los cambios realizados en la dosis
        $personas_vacuna->persona_id = $request->persona_id;
        $personas_vacuna->vacuna_id = $request->vacuna_id;
        $personas_vacuna->dosis= $request->dosis;
        $personas_vacuna->fecha = $request->fecha;
        $personas_vacuna->laboratorio = $request->laboratorio;
        $personas_vacuna->lote = $request->lote;
        $personas_vacuna->save();
        return redirect('/personas-vacunas');

    }


    public function destroy(PersonaVacuna $personas_vacuna)
    {
        //eliminar una dosis de la base de datos
        $personas_vacuna->delete();
        return redirect('/personas-vacunas');

    }
}
