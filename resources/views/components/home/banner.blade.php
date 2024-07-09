<div class="banner swiper w-full h-full relative">
    <!-- Additional required wrapper -->
    @php
        $slides = [
            [
                'image' => 'images/fiddy/home/banner1.png',
                'sub-title' => 'MODULAR KITCHEN',
                'title' =>
                    '<span class="text-amber-400 my-4">Elevate</span> your cooking <span class="text-amber-400">style</span>',
                'description' => 'Fiddy modern kitchens will make you want to cook every day',
            ],
            [
                'image' => 'images/fiddy/home/banner2.png',
                'sub-title' => 'WARDROBE',
                'title' =>
                    '<span class="text-amber-400 my-4">Fashioning</span> your storage <span class="text-amber-400">dreams</span>',
                'description' =>
                    'Step into a world where organization meets opulence, showcasing your style effortlessly.',
            ],
            [
                'image' => 'images/fiddy/home/banner3.png',
                'sub-title' => 'FURNITURE',
                'title' =>
                    '<span class="text-amber-400 my-4">Display</span> elegance at every <span class="text-amber-400">turn</span>',
                'description' =>
                    'Turn your treasures into art with our stunning shoe racks, where sophistication meets showcase.',
            ],
            [
                'image' => 'images/fiddy/home/banner4.png',
                'sub-title' => 'BEDROOM',
                'title' => '<span class="text-amber-400 my-4">Style</span> meets Functionality',
                'description' =>
                    'Transform your space with sleek side tables that marry fashion and practicality seamlessly.',
            ],
        ];
    @endphp
    <div class="swiper-wrapper m-0">
        @foreach ($slides as $s)
            <div class="swiper-slide m-0 bg-center bg-no-repeat bg-cover"
                style="background-image: url('{{ asset($s['image']) }}')">
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 justify-center items-center min-h-[88vh] max-w-screen-xl px-5 lg:px-20 mx-auto">
                    <div class="text-white lg:text-left text-center lg:w-4/5 py-20">
                        <p class="text-slate-400 text-xs my-4">{{ $s['sub-title'] }}</p>
                        <h1 class="text-4xl lg:text-[3.5rem] font-bold leading-[3rem]">{!! $s['title'] !!}</h1>
                        <p class="my-4 px-10 lg:px-0">{{ $s['description'] }}</p>
                        <div class="mt-5 flex justify-center lg:justify-start">
                            <x-shared.theme-button class="mt-10 lg:mt-3">
                                Get Free Consultation
                            </x-shared.theme-button>
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <button class="banner-prev absolute top-[50%] left-3 lg:left-5 sm:left-10 text-white hover:drop-shadow-md z-10">
        <x-heroicon-s-chevron-left class="w-7 h-7 lg:w-10 lg:h-10" />
    </button>
    <button class="banner-next absolute top-[50%] right-3 lg:right-5 sm:right-10 text-white hover:drop-shadow-md z-10">
        <x-heroicon-s-chevron-right class="w-7 h-7 lg:w-10 lg:h-10" />
    </button>

    {{-- form --}}
    <div class="absolute hidden lg:block right-40 top-14 z-10 px-20 max-w-screen-md">
        <div class="flex justify-center items-center flex-col bg-white p-7 w-full">
            <h1 class="font-bold text-2xl">Get in Touch</h1>
            @livewire('forms.contact-form')
        </div>
    </div>
</div>
