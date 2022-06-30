@props([
    'valor'=> '',
    'texto'=>'',
    'id'=> '',
    'required'=> false,

])
 <div class="col-span-1">
    <label for="{{ $id }}" class="block text-sm font-medium leading-5 text-blue-700">
        {{ $texto }}
    </label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <input
         type="text"
        id="{{ $id }}" name="{{ $id }}" value="{{ $valor }}"
        class="form-input block w-full sm:text-sm sm:leading-5 p-4 focus:border focus:border-red-500"
        {{ $required ? 'required' : '' }}>
    </div>
</div>
