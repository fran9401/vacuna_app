<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-serif font-bold leading-tight text-gray-800">
            Lista de vacunas
            </span>
            <a href="{{ route('vacunas.create') }}"
            class="p-2 text-center text-white bg-black rounded-md hover:text-blue-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                    Nueva Vacuna
        </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Add a search bar -->
            @php
                $search = isset($_GET['search']) ? $_GET['search'] : '';
            @endphp
            <div class="flex justify-between">
                <div class="w-full">
                    <div class="flex justify-between p-4 mb-2 bg-white rounded-lg">
                        <div class="w-full">
                            <form action="{{ route('vacunas.index') }}" method="GET">
                                <div class="flex items-center">
                                    <input class="w-full px-2 py-2 mr-3 leading-tight text-gray-700 bg-transparent border-none appearance-none focus:outline-none" type="text" placeholder="Buscar" name="search" value="{{ $search }}">
                                    <button class="flex-shrink-0 px-2 py-1 text-sm text-white bg-blue-500 border-4 border-blue-500 rounded-md hover:bg-blue-700 hover:border-blue-700" type="submit">
                                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
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
                                                class="p-2 text-white rounded-lg bg-cyan-500 hover:text-black">@svg('gmdi-edit-note-tt', 'h-6 w-6 text-black inline')</a>
                                           <a href="{{ route('vacunas.show', ["vacuna" => $vacuna->id, "confirmar_eliminado" => 1]) }}"
                                                class="p-2 ml-2 text-white bg-black rounded-lg hover:text-red-100">@svg('gmdi-delete-forever','h-6 w-6 text-cyan-400 inline' )</a>
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
