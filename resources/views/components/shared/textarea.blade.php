@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-sm w-full bg-[#FAFAFA] border-[#EAEAEA]']) !!}>
</textarea>
