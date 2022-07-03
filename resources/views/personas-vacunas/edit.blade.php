<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          Registrar Vacuna
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('personas-vacunas.update', $personas_vacuna->id) }}" method="POST">
                        @method('PUT')
                          @csrf

                          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                              <x-app-select
                              texto="Personas"
                              :datos="$personas"
                              id="persona_id"
                                valor="{{ $personas_vacuna->persona_id }}"
                              />
                               <x-app-select
                                texto="Vacunas"
                                :datos="$vacunas"
                                id="vacuna_id"
                                valor="{{ $personas_vacuna->vacuna_id }}"
                                />

                                <x-app-input
                                texto="Dosis"
                                valor="{{ $personas_vacuna->dosis }}"
                                required="true"
                                id="dosis"
                                />
                                <x-app-input
                                type="date"
                              texto="Fecha de Vacunacion"
                              valor="{{$personas_vacuna->fecha }}"
                              required="true"
                              id="fecha"/>

                              <x-app-input
                              texto="Laboratorio"
                              valor="{{ $personas_vacuna->laboratorio }}"
                              required="true"
                              id="laboratorio"
                                />

                                <x-app-input
                                texto="Lote"
                                valor="{{ $personas_vacuna->lote }}"
                                required="true"
                                id="lote"
                                />

                            </div>

                            <div class="mt-2">
                               <x-button>
                                Guardar
                               </x-button>

                                <!-- Crear un boton para regresar a la lista de vacunas -->
                                <a href="{{ route('personas-vacunas.index') }}"
                                class="px-4 py-2 text-xs font-semibold text-white rounded-md bg-cyan-500 hover:text-white">
                                   REGRESAR
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
