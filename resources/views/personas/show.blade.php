<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles de la persona
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Crear una ventana modal para confirmar si desea eliminar -->
                    @if (isset($_GET['confirmar_eliminado']))
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">

                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-bold text-red-500">
                                        Estas seguro que deseas eliminar a: {{ $persona->nombre }}
                                        {{ $persona->apellido }}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-center w-24 p-2 text-white bg-cyan-500 rounded-lg hover:text-black">Si</button>
                                </form>
                                <a href="{{ route('personas.index') }}"
                                    class="text-center w-24 ml-4 p-2 text-white bg-gray-800 rounded-lg hover:text-white">No</a>
                            </div>
                        </div>
                    @else
                        <!-- mostrar los detalles de persona -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                            <x-app-show texto="Nombre" valor="{{ $persona->nombre }}"></x-app-show>
                            <x-app-show texto="Apellido" valor="{{ $persona->apellido }}"></x-app-show>
                            <x-app-show texto="Cedula" valor="{{ $persona->cedula }}"></x-app-show>
                            <x-app-show texto="Fecha de nacimiento" valor="{{ $persona->fecha_nacimiento }}">
                            </x-app-show>
                            <x-app-show texto="Barrio" valor="{{ $persona->barrio }}"></x-app-show>
                            <x-app-show texto="Ciudad" valor="{{ $persona->ciudad }}"></x-app-show>
                            <x-app-show texto="Pais" valor="{{ $persona->pais }}"></x-app-show>
                            <x-app-show texto="Sexo" valor="{{ $persona->sexo }}"></x-app-show>

                        </div>

                        <!-- mostrar el detalle de las vacunas de personas -->
                        <div>
                            <h3 class="p-2 text-center text-black font-semibold text-xl mt-4 ">
                                Vacunas
                            </h3>
                            <div class="mt-6">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-5 py-3 border-b border-gray-500 bg-cyan-500 text-left text-xs leading-4 font-bold text-black uppercase tracking-wider">
                                                    Dosis
                                                </th>

                                                <th
                                                    class="px-5 py-3 border-b border-gray-500 bg-cyan-500 text-left text-xs leading-4 font-bold text-black  uppercase tracking-wider">
                                                    Fecha de aplicación
                                                </th>
                                                <th
                                                    class="px-5 py-3 border-b border-gray-500 bg-cyan-500 text-left text-xs leading-4 font-bold text-black  uppercase tracking-wider">
                                                    Laboratorio
                                                </th>
                                                <th
                                                    class="px-5 py-3 border-b border-gray-500 bg-cyan-500 selection:text-left text-xs leading-4 font-bold text-black uppercase tracking-wider">
                                                    Lote
                                                </th>
                                                <th
                                                    class="px-5 py-3 border-b border-gray-500 bg-cyan-500 text-left text-xs leading-4 font-bold text-black uppercase tracking-wider">
                                                    Acciones
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($persona->vacunas as $vacuna)
                                                <tr>
                                                    <td
                                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm leading-5 font-medium text-gray-900">
                                                        {{ $vacuna->dosis }}
                                                    </td>

                                                    <td class="px-5 py-5 border-b border-gray-200">
                                                        {{ $vacuna->fecha }}
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200">
                                                        {{ $vacuna->laboratorio }}
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200">
                                                        {{ $vacuna->lote }}
                                                    </td>
                                                    <td class="px-5 py-5 border-b border-gray-200">
                                                        <a href="{{ route('vacunas.show', $vacuna->id) }}"
                                                            class="text-sm leading-5 font-medium text-gray-900">
                                                            @svg('gmdi-zoom-in-o', 'w-5 h-5 mr-1 inline')
                                                        </a>
                                                        <a href="{{ route('vacunas.edit', $vacuna->id) }}"
                                                            class="text-sm leading-5 font-medium text-gray-900">
                                                            @svg('gmdi-edit-note-r', 'w-5 h-5 mr-1 inline')
                                                        </a>
                                                        <a href="{{ route('vacunas.destroy', $vacuna->id) }}"
                                                            class="text-sm leading-5 font-medium text-gray-900">
                                                            @svg('gmdi-delete-forever-tt', 'w-6 h-5 mr-1 inline')
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
