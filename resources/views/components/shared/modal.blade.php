@props(['id' => null, 'size'=>'2xl'])
<!-- Open the modal using ID.showModal() method -->
@php
$maxWidth = [
    'sm' => '!max-w-sm',
    'md' => '!max-w-md',
    'lg' => '!max-w-lg',
    'xl' => '!max-w-xl',
    '2xl' => '!max-w-2xl',
][$size ?? '2xl'];
@endphp
<dialog id="{{$id}}" class="du-modal du-modal-middle dark:text-gray-700">
  <div class="du-modal-box bg-white {{$maxWidth}} scrollbar">
    <form method="dialog">
      <button class="du-btn du-btn-sm du-btn-circle text-gray-700 du-btn-ghost absolute right-2 top-2">✕</button>
    </form>
    @if (isset($title))
        <h3 class="font-bold text-lg text-gray-700">{{$title}}</h3>
    @endif
    {{$content}}
  </div>
</dialog>

@push('styles')
    <style>
        @media (min-width: 640px) {
            .sm\:du-modal-middle {
                place-items: start center;
                margin-top: 5rem;
            }
        }
    </style>
@endpush