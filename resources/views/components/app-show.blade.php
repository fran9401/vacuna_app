@props([
    'valor'=> '',
    'texto'=>'',
])

<div class="col-span-1 p-2 flex justify-start border-b border-black">
    <span class="w-3/12 uppercase font-bold">{{ $texto }}:</span>
       <span class="w-9/12">{{ $valor }}</span>
</div>

