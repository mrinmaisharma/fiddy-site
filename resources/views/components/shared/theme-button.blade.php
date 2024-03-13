<button {!! $attributes->merge(['class' => 'flex items-center gap-2 bg-[#D61D4A] hover:bg-[#D61D4A]/90 text-white px-4 py-2 text-sm font-medium']) !!}>
    {{$slot}}
</button>