@props(['parentClass'=>""])

<div class="overflow-x-auto {{$parentClass}}">
    <table {!! $attributes->merge(['class' => 'w-full whitespace-no-wrap']) !!}>
        {{ $slot }}
    </table>
</div>