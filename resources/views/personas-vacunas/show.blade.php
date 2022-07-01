<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Dosis
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Crear una ventana modal para confirmar si desea eliminar -->
                    @if (isset($_GET['confirmar_eliminado']))
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">

                                <div class="ml-3">
                                    <p class="text-sm font-bold leading-5 text-red-500">
                                       Estas seguro que deseas eliminar a: {{ $personas_vacunas->nombre }} {{ $vacuna->indicaiones }}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('personas-vacunas.destroy', $vacuna->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="w-24 p-2 text-center text-white rounded-lg bg-cyan-500 hover:text-white">Si</button>
                                </form>
                                    <a href="{{ route('vacunas.index') }}"
                                    class="w-24 p-2 ml-4 text-center text-white bg-gray-800 rounded-lg hover:text-red-100">No</a>
                            </div>
                        </div>
                    @endif


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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($persona->vacunas as $vacuna)
                                            <tr>
                                                <td
                                                    class="px-5 py-5 text-sm font-medium leading-5 text-gray-900 bg-white border-b border-gray-200">
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
                                                        class="text-sm font-medium leading-5 text-gray-900">
                                                        @svg('gmdi-zoom-in-o', 'w-5 h-5 mr-1 inline')
                                                    </a>
                                                    <a href="{{ route('vacunas.edit', $vacuna->id) }}"
                                                        class="text-sm font-medium leading-5 text-gray-900">
                                                        @svg('gmdi-edit-note-r', 'w-5 h-5 mr-1 inline')
                                                    </a>
                                                    <a href="{{ route('vacunas.destroy', $vacuna->id) }}"
                                                        class="text-sm font-medium leading-5 text-gray-900">
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

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
