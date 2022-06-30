@props([
    'datos' => '',
    'texto' => '',
    'id' => '',
    'required' => false,
])
<div class="col-span-1">
    <label for="{{ $id }}" class="block text-sm font-medium leading-5 text-blue-700">
        {{ $texto }}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <select
            id="{{ $id }}"
            name="{{ $id }}"
            class="form-input block w-full sm:text-sm sm:leading-5 p-4 focus:border focus:border-blue-500"
            {{ $required ? 'required' : '' }}>
            @foreach($datos as $numero => $dato)
                <option value="{{ $numero }}">{{ $dato }}</option>
            @endforeach
        </select>
    </div>
</div>
