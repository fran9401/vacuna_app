<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
           Actualizar datos de una Vacuna
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('vacunas.update', $vacuna->id) }}" method="POST">

                          @csrf
                          @method('PUT')
                          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                              <x-app-input
                              texto="Nombre"
                              valor="{{ $vacuna->nombre  }}"
                              required="true"
                              id="nombre"
                              />
                              <x-app-input
                              texto="Indicaciones"
                              valor="{{ $vacuna->indicacniones }}"
                              required="true"
                              id="indicaciones"
                               />
                            </div>

                            <div class="mt-2">
                               <x-button>
                                Guardar
                               </x-button>

                                <!-- Crear un boton para regresar a la lista de vacunas -->
                                <a href="{{ route('vacunas.index') }}"
                                class="text-white py-2 px-4 rounded-md font-semibold text-xs bg-cyan-500 hover:text-white">
                                   REGREASAR
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

