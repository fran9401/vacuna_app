<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="text-xl font-semibold leading-tight text-gray-800">
            Lista de personas
            </span>
            <a href="{{ route('personas.create') }}"
            class="text-center p-2 text-white bg-black rounded-md hover:text-blue-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                    Crear Nuevo
        </a>
     </div>

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">

                <!-- Mostrar en una tabla la lista de persona -->
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-cyan-500">
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Apellido</th>
                                <th class="px-4 py-2">Cedula</th>
                                <th class="px-4 py-2"># de Vacunas</th>

                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr>
                                    <td class="px-4 py-2 border">
                                        @svg('gmdi-content-paste-search' , 'h-6 w-6 text-cyan-600 inline')

                                        <a href="{{ route('personas.show', $persona->id) }}"
                                            class="text-sm text-gray-900 hover:underline font-bold">
                                            {{ $persona->nombre }}
                                    </td>
                                    <td class="px-4 py-2 border">{{ $persona->apellido }}</td>
                                    <td class="px-4 py-2 border">{{ $persona->cedula }}</td>
                                    <td class="px-4 py-2 border">{{ $persona->vacunas->count() }}
                                        
                                    </td>

                                    <td class="px-4 py-2 border">
                                        <a href="{{ route('personas.edit', $persona->id) }}"
                                             class="p-2 bg-cyan-500 rounded-lg hover:text-blue-100">@svg('gmdi-edit-note-tt', 'h-6 w-6 text-blackq inline') </a>
                                        <a href="{{ route('personas.show', ["persona" => $persona->id, "confirmar_eliminado" => 1]) }}"
                                             class=" p-2 bg-black rounded-lg hover:text-red-100 ml-2">@svg('gmdi-delete-forever','h-6 w-6 text-cyan-400 inline' )</a>
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
