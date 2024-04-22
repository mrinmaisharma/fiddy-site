<div class="my-20">
    <div class="flex flex-wrap gap-2 sm:gap-5 mb-5 mt-10 justify-center">
        <button id="all" class="py-2 px-4 bg-black text-white focus:outline-none">ALL</button>
        <button id="furniture" class="py-2 px-4 focus:outline-none">KITCHENS</button>
        <button id="wardrobe" class="py-2 px-4 focus:outline-none">WARDROBES</button>
        <button id="kitchen" class="py-2 px-4 focus:outline-none">BEDROOMS</button>
        <button id="kitchen" class="py-2 px-4 focus:outline-none">FURNITURES</button>
    </div>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 px-5 md:px-20 lg:px-52" style="width: 100vw;">
        @foreach ($images as $image)
            <div class="relative cursor-pointer">
                <div class="bg-center bg-cover bg-no-repeat h-64 md:h-72 lg:h-80" style="background-image:url('{{ $image }}')"></div>
                <div class="absolute inset-0 bg-black opacity-0 hover:opacity-50 transition-opacity"></div>
            </div>
        @endforeach
    </div>
</div>
