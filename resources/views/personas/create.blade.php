<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
           Registrar persona
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('personas.store')}}" method="POST">

                          @csrf

                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                              <x-app-input
                              texto="Nombre"
                              valor="{{ old('nombre') }}"
                              required="true"
                              id="nombre"
                              />
                              <x-app-input
                              texto="Apellido"
                              valor="{{ old('apellido')}}"
                              required="true"
                              id="apellido"
                               />

                               <x-app-input
                              texto="Fecha de Nacimiento"
                              valor="{{ old('fecha_nacimiento')}}"
                                id="fecha_nacimiento"
                                />

                                <x-app-input
                              texto="Cedula"
                              valor="{{ old('cedula')}}"
                                required="true"
                                id="cedula"/>


                              <x-app-input
                              texto="Barrio"
                              valor="{{ old('barrio')}}"
                               id="barrio"
                              />

                              <x-app-input
                              texto="Ciudad"
                              valor="{{ old('ciudad')}}"
                               id="ciudad"
                              id="ciudad"
                              />

                              <x-app-input
                              texto="Pais"
                              valor="{{ old('pais')}}"
                               id="pais"
                              />

                                <x-app-select
                                texto="sexo"
                                :datos="$sexos"
                                id="sexo"/>

                        </div>

                        <div class="mt-2">
                           <x-button>
                            Guardar
                           </x-button>

                            <!-- Crear un boton para regresar a la lista de personas -->
                            <a href="{{ route('personas.index') }}"
                            class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-orange-500 hover:text-white">
                               REGREASAR
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
