<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="text-xl font-semibold leading-tight text-gray-800">
            Lista de vacunas
            </span>
            <a href="{{ route('vacunas.create') }}"
            class="text-center p-2 text-white bg-black rounded-md hover:text-blue-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                    Nueva Vacuna
        </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Mostrar en una tabla la lista de vacunas -->
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Indicaciones</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vacunas as $vacuna)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $vacuna->nombre }}</td>
                                    <td class="px-4 py-2 border">{{ $vacuna->indicaciones }}</td>
                                    <td class="px-4 py-2 border">
                                        <a href="{{ route('vacunas.edit', $vacuna->id) }}"
                                                class="p-2 text-white bg-cyan-500 rounded-lg hover:text-blue-100">Editar</a>
                                           <a href="{{ route('vacunas.show', ["vacuna" => $vacuna->id, "confirmar_eliminado" => 1]) }}"
                                                class="p-2 text-white bg-black rounded-lg hover:text-red-100">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr class="m-4">
                    {{ $vacunas->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
