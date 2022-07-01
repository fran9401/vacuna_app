<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
           Actualizar datos de una Vacuna
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('vacunas.update', $vacuna->id) }}" method="POST">

                          @csrf
                          @method('PUT')
                          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
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

