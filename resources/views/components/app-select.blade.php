@props([
    'datos' => '',
    'texto' => '',
    'id' => '',
    'required' => false,
    'valor' => '',
])
<div class="col-span-1">
    <label for="{{ $id }}" class="block text-sm font-medium leading-5 text-blue-700">
        {{ $texto }}
    </label>
    <div class="relative mt-1 rounded-md shadow-sm">
        <select
            id="{{ $id }}"
            name="{{ $id }}"
            class="block w-full p-4 form-input sm:text-sm sm:leading-5 focus:border focus:border-blue-500"
            {{ $required ? 'required' : '' }}>
            @foreach($datos as $numero => $dato)
                <option @selected ($numero == $valor) value="{{ $numero }}">{{ $dato }}</option>
            @endforeach
        </select>
    </div>
</div>
