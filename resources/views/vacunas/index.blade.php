<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Vacunas
        </h2>
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
                                <th class="px-4 py-2">Descripcion</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vacunas as $vacuna)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $vacuna->nombre }}</td>
                                    <td class="px-4 py-2 border">{{ $vacuna->descripcion }}</td>
                                    <td class="px-4 py-2 border">
                                        <a href="{{ route('vacunas.edit', $vacuna->id) }}" class="p-2 text-white bg-blue-900 rounded-lg hover:text-blue-100">Editar</a>
                                        <a href="{{ route('vacunas.destroy', $vacuna->id) }}" class="p-2 text-white bg-red-900 rounded-lg hover:text-red-100">Eliminar</a>
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
