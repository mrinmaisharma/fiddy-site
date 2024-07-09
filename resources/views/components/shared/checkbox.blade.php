@props(['disabled' => false])

<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'ring-0 outline-none checked:ring-0 focus:ring-0']) !!} />
