@props([
    'valor'=> '',
    'texto'=>'',
    'id'=> '',
    'required'=> false,
    'type'=> 'text',

])
 <div class="col-span-1">
    <label for="{{ $id }}" class="block text-sm font-medium leading-5 text-blue-700">
        {{ $texto }}
    </label>
    <div class="relative mt-1 rounded-md shadow-sm">
        <input
         type="{{ $type }}"
        id="{{ $id }}" name="{{ $id }}" value="{{ $valor }}"
        class="block w-full p-4 form-input sm:text-sm sm:leading-5 focus:border focus:border-red-500"
        {{ $required ? 'required' : '' }}>
    </div>
</div>
