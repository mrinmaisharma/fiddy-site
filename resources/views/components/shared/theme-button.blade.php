<button {!! $attributes->merge([
    'class' => 'flex items-center gap-2 bg-primary text-xs font-bold px-6 py-3 hover:bg-primary2 text-gray-800',
]) !!}>
    {{ $slot }}
</button>
