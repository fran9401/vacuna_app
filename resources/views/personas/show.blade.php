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
                                       Estas seguro que deseas eliminar a: {{ $persona->nombre }} {{ $persona->apellido }}?
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="text-center w-24 p-2 text-white bg-red-800 rounded-lg hover:text-red-100">Si</button>
                                </form>
                                    <a href="{{ route('personas.index') }}"
                                    class="text-center w-24 ml-4 p-2 text-white bg-gray-800 rounded-lg hover:text-red-100">No</a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
