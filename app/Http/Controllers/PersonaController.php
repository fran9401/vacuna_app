<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{  //lista de sexos para el select de la vista
    public $sexos = [
        'M' => 'Masculino', 'F' => 'Femenino'];

        public function index()
    {

            //Extraer todas las personas de la base de datos con el término buscado
            $termino = isset($_GET['search']) ? $_GET['search'] : null;

            $personas = Persona::query()->when($termino, function ($query) use ($termino) {
                return $query->where('nombre', 'like', '%' . $termino . '%');
            })->paginate(20);

            // Devolver la vista y pasar las personas
            return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar el formulario para crear una nueva persona
        $sexos = $this->sexos;
        return view('personas.create', compact('sexos'));
    }


    public function store(Request $request)
    {
        //insertar una nueva persona en la base de datos
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->cedula = $request->cedula;
        $persona->barrio= $request->barrio;
        $persona->ciudad = $request->ciudad;
        $persona->pais = $request->pais;
        $persona->sexo = $request->sexo;
        $persona->save();
        return redirect('/personas');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //mostrar la persona en detalle
        return view('personas.show', compact('persona'));
    }


    public function edit(Persona $persona)
    {

       //mostrar la vist de editar una persona
       $sexos = $this->sexos;
         return view('personas.edit', compact('persona', 'sexos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //Guardar los cambios en la base de datos
        $persona->update($request->all());
        //Redireccionar al index de personas
        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //Eliminar la persona de la base de datos
        $persona->delete();
        //Redireccionar al index de personas
        return redirect()->route('personas.index');
    }
}
