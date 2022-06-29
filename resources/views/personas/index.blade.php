<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
           Lista de personas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <!-- Mostrar en una tabla la lista de persona -->
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Apellido</th>
                                <th class="px-4 py-2">Cedula</th>

                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $persona->nombre }}</td>
                                    <td class="px-4 py-2 border">{{ $persona->apellido }}</td>
                                    <td class="px-4 py-2 border">{{ $persona->cedula }}</td>

                                    <td class="px-4 py-2 border">
                                        <a href="{{ route('personas.edit', $persona->id) }}" class="p-2 text-white bg-blue-900 rounded-lg hover:text-blue-100">Editar</a>
                                        <a href="{{ route('personas.destroy', $persona->id) }}" class="p-2 text-white bg-red-900 rounded-lg hover:text-red-100">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr class="m-4">
                    {{ $personas->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
