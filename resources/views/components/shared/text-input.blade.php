@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-sm w-full bg-[#FAFAFA] border-[#EAEAEA]']) !!} />
