<x-guest-layout>
    @section('title', 'Home')

    <x-home.banner />

    <div
        class="bg-white max-w-screen-xl px-5 lg:px-20 mx-auto whyUs grid grid-cols-1 lg:grid-cols-2 gap-10 py-14 items-center">
        <div>
            <img src="{{ asset('images/fiddy/home/why-us-bg-1.jpeg') }}" class="w-full resize" alt="">
        </div>
        <div class="">
            <div>
                <h2 class="text-2xl font-bold lg:text-3xl relative">Why Us</h2>
                <div class="w-20 h-1 bg-primary mt-1"></div>
            </div>

            <h3 class="text-lg mt-5 font-semibold">We are a one-stop solution for your dream space.
            </h3>

            <p class="text-slate-600 mt-4">We provide comprehensive design and installation
                services for your perfect space.Customizations from scratch according to the client’s
                specifications.</p>
        </div>
    </div>
    <div
        class="bg-white max-w-screen-xl px-5 lg:px-20 mx-auto whyUs grid grid-cols-1 lg:grid-cols-3 gap-5 items-center pb-14">
        <div class="flex justify-center items-center flex-col lg:flex-row gap-5">
            <img src="{{ asset('images/fiddy/home/why-us-icon-1.png') }}"
                class="w-24 resize shadow-lg shadow-gray-700/50 rounded-full bg-[#232323]" alt="">
            <div class="text-center md:text-left flex-1">
                <h3 class="text-xl font-bold leading-5">Expert & Efficient Installation</h3>
                <p class="text-slate-600">Our team of professionals will help you to plan, design and successful
                    installations</p>
            </div>
        </div>
        <div class="flex justify-center items-center flex-col lg:flex-row gap-5">
            <img src="{{ asset('images/fiddy/home/why-us-icon-2.png') }}"
                class="w-24 resize shadow-lg shadow-gray-700/50 rounded-full bg-[#232323]" alt="">
            <div class="text-center md:text-left flex-1">
                <h3 class="text-xl font-bold leading-5">Aesthetic Designs</h3>
                <p class="text-slate-600">A collection of 100s of designs of all types, that matches with your
                    personality and aura</p>
            </div>
        </div>
        <div class="flex justify-center items-center flex-col lg:flex-row gap-5">
            <img src="{{ asset('images/fiddy/home/why-us-icon-3.png') }}"
                class="w-24 resize shadow-lg shadow-gray-700/50 rounded-full bg-[#232323]" alt="">
            <div class="text-center md:text-left flex-1">
                <h3 class="text-xl font-bold leading-5">Personalized Estimates</h3>
                <p class="text-slate-600">Tailored pricing to make your wish possible and as unique as you are.</p>
            </div>
        </div>
    </div>

    <div class="text-white bg-[#161515] py-14">
        <div class="max-w-screen-xl px-5 lg:px-20 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10">
            <div>
                <h3 class="text-3xl md:text-4xl font-bold">Our Working Process</h3>
                <img class="w-full resize mt-5 mb-10" src="{{ asset('images/fiddy/home/working-process-bg.jpeg') }}"
                    alt="">
                <x-shared.theme-button>Get a quick call back</x-shared.theme-button>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10">
                @php
                    $steps = [
                        [
                            'icon' => 'healthicons-o-group-discussion-meeting',
                            'title' => 'Design Consultation',
                            'description' => 'Experience a harmonious collaboration between our innovative AI model and skilled design experts.
                                Engage in a dynamic conversation where your ideas, preferences, and vision seamlessly converge with the
                                knowledge and expertise of our talented designers.',
                        ],
                        [
                            'icon' => 'heroicon-o-paint-brush',
                            'title' => 'Get Your Kitchen Designed',
                            'description' => 'Following our meeting and consultation, we collaboratively design a kitchen that reflects your unique 
                                ideas and brings to life the vision of your perfect kitchen, ensuring a seamless blend of functionality 
                                and aesthetics.',
                        ],
                        [
                            'icon' => 'heroicon-o-wrench-screwdriver',
                            'title' => 'Installations',
                            'description' => 'Embark on the journey from concept to reality as we enter the
                                installation phase, a hands-on process where your envisioned kitchen begins to take shape.
                                Serving as the vital bridge between concept and functionality, our expert team ensures
                                precision and excellence in every detail.',
                        ],
                        [
                            'icon' => 'heroicon-o-building-office-2',
                            'title' => 'Handover',
                            'description' => 'Welcome to your newly completed dream space – a perfect sanctuary
                            awaiting your presence. Our meticulous installations ensure every detail meets the highest
                            standards. Your residence is now prepared for occupancy.',
                        ],
                    ];
                @endphp
                @foreach ($steps as $s)
                    <div class="flex flex-col items-center lg:items-start gap-3">
                        {{ svg($s['icon'], 'w-14 h-14') }}
                        <h3 class="text-lg font-bold">{{ $s['title'] }}</h3>
                        <p class="text-sm text-gray-300">
                            {{ $s['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="max-w-screen-xl px-5 lg:px-20 mx-auto py-14 bg-white relative">
        <div class="flex flex-col items-center">
            <h2 class="text-2xl font-bold lg:text-4xl relative">Our Numbers</h2>
            <div class="w-20 h-1 bg-primary mt-1"></div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mt-5 lg:mt-10">
            <div class="flex flex-col justify-center items-center">
                <h3 class="font-bold text-3xl lg:text-5xl text-gray-700">100+</h3>
                <p class="text-sm md:text-lg tracking-wide text-gray-700 pr-2">Kitchen</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <h3 class="font-bold text-3xl lg:text-5xl text-gray-700">100+</h3>
                <p class="text-sm md:text-lg tracking-wide text-gray-700 pr-2">Bedrooms</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <h3 class="font-bold text-3xl lg:text-5xl text-gray-700">250+</h3>
                <p class="text-sm md:text-lg tracking-wide text-gray-700 pr-2">Furnitures</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <h3 class="font-bold text-3xl lg:text-5xl text-gray-700">200+</h3>
                <p class="text-sm md:text-lg tracking-wide text-gray-700 pr-2">Wardrobes</p>
            </div>
        </div>
    </div>

    <div>
        <div class="w-full bg-[#080808] h-[40px] relative -z-10 -mt-1">
            <svg class="w-full h-[40px] relative overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="fill-white origin-center"
                    d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z">
                </path>
            </svg>
        </div>
        <div class="bg-[#080808] py-10 lg:py-14 border border-[#080808]">
            <div
                class="max-w-screen-xl relative px-5 lg:px-20 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-10 text-gray-100 items-center">
                <h3 class="font-bold text-center text-2xl lg:text-[2.5rem] leading-10 mb-28 lg:mb-0">Fiddy makes your
                    dream home
                    come to
                    life.</h3>
                <div class="flex justify-center absolute lg:relative -bottom-24 lg:bottom-0 z-10">
                    <img class="w-[70%] lg:w-[60%] resize" src="{{ @asset('images/fiddy/home/blackStrip.jpeg') }}"
                        alt="">
                </div>
            </div>
        </div>
        <div class="w-full bg-[#080808] h-[40px] relative border-b border-white">
            <svg class="w-full h-[40px] rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
                preserveAspectRatio="none">
                <path class="fill-white origin-center"
                    d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z">
                </path>
            </svg>
        </div>
    </div>
    <div class="relative -mt-2 bg-white my-14"></div>

    <div class="max-w-screen-xl px-5 lg:px-20 mx-auto py-14 bg-white relative">
        <div class="flex flex-col items-center mb-5">
            <h2 class="text-2xl font-bold lg:text-4xl relative">Our Happy Clients</h2>
            <div class="w-20 h-1 bg-primary mt-1"></div>
        </div>
        <div class="testimonial swiper max-w-screen-lg">
            <div class="swiper-wrapper py-10">
                @php
                    $testimonials = [
                        [
                            'name' => 'JITENDRA RAI',
                            'title' => 'Meticulous, communicative, excellent!',
                            'description' => "Fiddy Design is meticulous, in constant contact during the
                                project, informed us on specifics as the project was underway, kept close to the project
                                time-line, has reliable and highly qualified workers who explain their job, and enjoy
                                conversing with the homeowner. At no time did we feel dissatisfied or in-the-dark. The
                                entire project from initial discussion of the project to the very end was smooth. I give
                                them a 5+ rating!!",
                        ],
                        [
                            'name' => 'JITENDRA RAI',
                            'title' => 'Meticulous, communicative, excellent!',
                            'description' => "Fiddy Design is meticulous, in constant contact during the
                                project, informed us on specifics as the project was underway, kept close to the project
                                time-line, has reliable and highly qualified workers who explain their job, and enjoy
                                conversing with the homeowner. At no time did we feel dissatisfied or in-the-dark. The
                                entire project from initial discussion of the project to the very end was smooth. I give
                                them a 5+ rating!!",
                        ],
                        [
                            'name' => 'JITENDRA RAI',
                            'title' => 'Meticulous, communicative, excellent!',
                            'description' => "Fiddy Design is meticulous, in constant contact during the
                                project, informed us on specifics as the project was underway, kept close to the project
                                time-line, has reliable and highly qualified workers who explain their job, and enjoy
                                conversing with the homeowner. At no time did we feel dissatisfied or in-the-dark. The
                                entire project from initial discussion of the project to the very end was smooth. I give
                                them a 5+ rating!!",
                        ],
                    ];
                    $testimonials = json_decode(json_encode($testimonials));
                @endphp
                @foreach ($testimonials as $t)
                    <div class="swiper-slide relative px-3 lg:px-36">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-lg text-center font-semibold">{{ $t->title }}</h3>
                            <p class="text-center font-light text-sm text-gray-500">{{ $t->description }}</p>
                            <div class="flex gap-1 justify-center">
                                <x-heroicon-s-star class="text-yellow-500 h-3 w-3" />
                                <x-heroicon-s-star class="text-yellow-500 h-3 w-3" />
                                <x-heroicon-s-star class="text-yellow-500 h-3 w-3" />
                                <x-heroicon-s-star class="text-yellow-500 h-3 w-3" />
                                <x-heroicon-s-star class="text-yellow-500 h-3 w-3" />
                            </div>
                            <p class="text-xs text-center text-gray-500">{{ '7 days ago' }}</p>
                            <p class="mt-3 uppercase text-center">{{ $t->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination bottom-0"></div>

            <!-- If we need navigation buttons -->
            <button
                class="testimonial-prev absolute top-[50%] left-3 lg:left-5 sm:left-10 text-yellow-500 hover:text-blue-500 z-10">
                <x-zondicon-cheveron-outline-left class="w-4 h-4 lg:w-7 lg:h-7" />
            </button>
            <button
                class="testimonial-next absolute top-[50%] right-3 lg:right-5 sm:right-10 text-yellow-500 hover:text-blue-500 z-10">
                <x-zondicon-cheveron-outline-right class="w-4 h-4 lg:w-7 lg:h-7" />
            </button>
        </div>
    </div>

    <div class="bg-[#161515]">
        <div class="max-w-screen-xl px-5 lg:px-20 mx-auto py-14">
            <div class="flex flex-col items-center mb-10">
                <h2 class="text-2xl font-bold lg:text-4xl relative text-white">What else we can do for you</h2>
                <div class="w-20 h-1 bg-primary mt-1"></div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-6 gap-5 mb-5">
                @php
                    $services = [
                        ['image' => 'images/fiddy/home/what-else-icons-1.png', 'name' => 'Modular Kitchen'],
                        ['image' => 'images/fiddy/home/what-else-icons-2.png', 'name' => 'Wardrobe'],
                        ['image' => 'images/fiddy/home/what-else-icons-3.png', 'name' => 'Side Table'],
                        ['image' => 'images/fiddy/home/what-else-icons-4.png', 'name' => 'Shoe Racks'],
                        ['image' => 'images/fiddy/home/what-else-icons-5.png', 'name' => 'Puja Ghar'],
                        ['image' => 'images/fiddy/home/what-else-icons-6.png', 'name' => 'False Ceiling'],
                        ['image' => 'images/fiddy/home/what-else-icons-7.png', 'name' => 'Study Table'],
                        ['image' => 'images/fiddy/home/what-else-icons-8.png', 'name' => 'Kids Bedroom'],
                        ['image' => 'images/fiddy/home/what-else-icons-9.png', 'name' => 'Living Room Interiors'],
                        ['image' => 'images/fiddy/home/what-else-icons-10.png', 'name' => 'Crockery Units'],
                        ['image' => 'images/fiddy/home/what-else-icons-11.png', 'name' => 'Bathroom'],
                        ['image' => 'images/fiddy/home/what-else-icons-12.png', 'name' => 'TV Cabinet'],
                    ];
                @endphp
                @foreach ($services as $s)
                    <div class="flex flex-col items-center">
                        <img class="w-10 resize" src="{{ asset($s['image']) }}" alt="">
                        <h3 class="text-white">{{ $s['name'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-screen-xl px-5 lg:px-20 mx-auto py-14">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div class="lg:px-20">
                    <h1 class="font-bold text-2xl text-gray-800 mb-5 text-center">Get in Touch</h1>
                    @livewire('forms.contact-form')
                </div>
                <div class="lg:px-20 grid grid-cols-1 sm:grid-cols-2 gap-5 items-center">
                    <div class="flex flex-col items-center">
                        <span
                            class="rounded-full bg-[#F6F5F2] hover:bg-[#DEB820] hover:text-[#F6F5F2] text-[#DEB820] w-20 h-20 flex items-center justify-center">
                            <x-heroicon-s-phone class="h-7 w-7" />
                        </span>
                        <span class="text-sm mt-2">+91-7408348080</span>
                        <span class="text-sm">+91-9454854190</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span
                            class="rounded-full bg-[#F6F5F2] hover:bg-[#DEB820] hover:text-[#F6F5F2] text-[#DEB820] w-20 h-20 flex items-center justify-center">
                            <x-heroicon-s-envelope class="h-7 w-7" />
                        </span>
                        <span class="text-sm mt-2">info.fiddy@gmail.com</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
