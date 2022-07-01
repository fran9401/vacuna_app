<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <span class="text-xl font-semibold leading-tight text-gray-800">
            Dosis
            </span>
            <a href="{{ route('personas-vacunas.create') }}"
            class="text-center p-2 text-white bg-black rounded-md hover:text-blue-100">
                 <!-- incluir un icono en formato svg: plus -->
                <svg class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
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
                                            </th>
                                        </tr>
                                    </thead>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

