@props(['disabled' => false, 'placeholder'=>"", 'id'=>""])

<label
    for={{$id}}
    class="relative w-full block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
>
    <textarea
    {{ $disabled ? 'disabled' : '' }}
    placeholder="{{$placeholder}}"
    {!! $attributes->merge(['class' => 'peer w-full border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 py-3 px-3']) !!}
    ></textarea>

    <span class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white py-0.5 px-1 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
    {{$placeholder}}
    </span>
</label>