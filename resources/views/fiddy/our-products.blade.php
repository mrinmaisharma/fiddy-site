<x-guest-layout>
    @section('title', 'Our Products')

    <div class="max-w-screen-lg mx-auto">
        <div class="flex flex-col items-center gap-1">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Our Products
            </h1>
            <div class="h-1 bg-primary w-20"></div>
        </div>
        <div class="flex justify-center items-center">
            @livewire('photo-galary')
        </div>
    </div>
</x-guest-layout>
