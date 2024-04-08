<x-guest-layout>
    @section('title', 'Our Products')

    <div class="max-w-screen-lg mx-auto">
        <div class="flex flex-col items-center gap-1">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Our Products
            </h1>
            <div class="h-1 bg-primary w-20"></div>
        </div>
        <div class="flex flex-wrap gap-2 sm:gap-5 mb-5 mt-10 justify-center">


            <button id="all" class="py-2 px-4 bg-black text-white focus:outline-none">ALL</button>


            <button id="furniture" class="py-2 px-4 focus:outline-none">KITCHENS</button>


            <button id="wardrobe" class="py-2 px-4 focus:outline-none">WARDROBES</button>


            <button id="kitchen" class="py-2 px-4 focus:outline-none">BEDROOMS</button>


            <button id="kitchen" class="py-2 px- focus:outline-none">FURNITURES</button>


        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            @foreach ($imageUrls as $image)
                <div class="bg-center bg-cover h-64 bg-no-repeat" style="background-image:url('{{ $image }}')">
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
