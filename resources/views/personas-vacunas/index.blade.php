<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <span class="text-xl font-semibold leading-tight text-gray-800">
                Dosis
            </span>
            <a href="{{ route('personas-vacunas.create') }}"
                class="p-2 text-center text-white bg-black rounded-md hover:text-blue-100">
                <!-- incluir un icono en formato svg: plus -->
                <svg class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Nueva Dosis
            </a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    <!-- mostrar el detalle de las vacunas de personas -->
                    <div>
                        <h3 class="p-2 mt-4 text-xl font-semibold text-center text-black ">
                            Vacunas
                        </h3>
                        <div class="mt-6">
                            <div class="overflow-x-auto">
                                <table class="min-w-full">
                                    <thead>
                                        <tr>
                                            <th
                                            class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-black uppercase border-b border-gray-500 bg-cyan-500 selection:text-left">
                                            Persona
                                        </th>
                                        <th
                                            class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-black uppercase border-b border-gray-500 bg-cyan-500 selection:text-left">
                                            Vacuna
                                        </th>
                                            <th
                                                class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-left text-black uppercase border-b border-gray-500 bg-cyan-500">
                                                Dosis
                                            </th>

                                            <th
                                                class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-left text-black uppercase border-b border-gray-500 bg-cyan-500">
                                                Fecha de aplicación
                                            </th>
                                            <th
                                                class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-left text-black uppercase border-b border-gray-500 bg-cyan-500">
                                                Laboratorio
                                            </th>
                                            <th
                                                class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-black uppercase border-b border-gray-500 bg-cyan-500 selection:text-left">
                                                Lote
                                            </th>

                                            <th
                                                class="px-5 py-3 text-xs font-bold leading-4 tracking-wider text-left text-black uppercase border-b border-gray-500 bg-cyan-500">
                                                Acciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($persona_vacuna as $personaVacuna)
                                            <tr>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    {{ $personaVacuna->persona->nombre }}
                                                </td>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    {{ $personaVacuna->vacuna->nombre }}
                                                </td>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    {{ $personaVacuna->dosis }}
                                                </td>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    {{ $personaVacuna->fecha }}
                                                </td>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    {{ $personaVacuna->laboratorio }}
                                                </td>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    {{ $personaVacuna->lote }}
                                                </td>
                                                <td
                                                    class="px-5 py-5 text-sm leading-5 text-gray-900 bg-white border-b border-gray-200">
                                                    <a href="{{ route('personas-vacunas.edit', $personaVacuna->id) }}"
                                                        class="text-blue-500 hover:text-blue-700">
                                                        @svg('gmdi-edit-note-tt', 'h-6 w-6 text-black inline')
                                                    </a>
                                                    <form
                                                        action="{{ route('personas-vacunas.destroy', $personaVacuna->id) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                                            @svg('gmdi-delete-forever','h-6 w-6 text-cyan-400 inline' )
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr
                                             @endforeach
                                    </tbody>

                                </table>
                                {{ $persona_vacuna->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
