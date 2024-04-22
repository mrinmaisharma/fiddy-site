<x-guest-layout>
    @section('title', 'Home')
    <div class="max-w-screen-lg">
       <!-- Slider main container -->
        <div class="swiper w-screen h-full">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper m-0">
                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center" style="background-image: url('{{ asset('images/fiddy/home/slidder-bg-2.png') }}')">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-left text-center" style="width: 18rem">
                            <p class="text-slate-400 text-xs tracking-widest my-4">MODULAR KITCHEN</p>
                            <h1 class="text-5xl"> <span class="text-amber-400 my-4">Elevate</span> your cooking <span class="text-amber-400">style</span></h1>
                            <p class="my-4">Fiddy modern kitchens will make you want to cook every day</p>
                            <button class="bg-amber-400 text-black p-4 font-bold tracking-wide">Get Free Consultation</button>
                        </div>
                        <div class="hidden md:flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                            <h1 class="font-bold text-2xl">Get in Touch</h1>
                            @livewire('forms.contact-form')
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center" style="background-image: url('{{ asset('images/fiddy/home/slidder-bg-1.png') }}')">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-left text-center" style="width: 24rem">
                            <p class="text-slate-400 text-xs tracking-widest my-4">WARDROBE</p>
                            <h1 class="text-5xl"> <span class="text-amber-400 my-4">Fashioning</span> your storage <span class="text-amber-400">dreams</span></h1>
                            <p class="my-4">Step into a world where organization meets opulence, showcasing your style effortlessly.</p>
                            <button class="bg-amber-400 text-black p-4 font-bold tracking-widest">Get Free Consultation</button>
                        </div>
                        <div class="hidden md:flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                            <h1 class="font-bold text-2xl">Get in Touch</h1>
                            @livewire('forms.contact-form')
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center" style="background-image: url('{{ asset('images/fiddy/home/slidder-bg-4.png') }}')">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-left text-center" style="width: 18rem">
                            <p class="text-slate-400 text-xs tracking-widest my-4">FURNITURE</p>
                            <h1 class="text-5xl"> <span class="text-amber-400 my-4">Display</span> elegance at every <span class="text-amber-400">turn</span></h1>
                            <p class="my-4">urn your treasures into art with our stunning shoe racks, where sophistication meets showcase.</p>
                            <button class="bg-amber-400 text-black p-4 font-bold tracking-widest">Get Free Consultation</button>
                        </div>
                        <div class="hidden md:flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                            <h1 class="font-bold text-2xl">Get in Touch</h1>
                            @livewire('forms.contact-form')
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center" style="background-image: url('{{ asset('images/fiddy/home/slidder-bg-3.png') }}')">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-left text-center" style="width: 18rem">
                            <p class="text-slate-400 text-xs tracking-widest my-4">BEDROOM</p>
                            <h1 class="text-5xl"> <span class="text-amber-400 my-4">Style</span> meets Functionality</h1>
                            <p class="my-4">Transform your space with sleek side tables that marry fashion and practicality seamlessly.</p>
                            <button class="bg-amber-400 text-black p-4 font-bold tracking-widest">Get Free Consultation</button>
                        </div>
                        <div class="hidden md:flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                            <h1 class="font-bold text-2xl">Get in Touch</h1>
                            @livewire('forms.contact-form')
                        </div>
                    </div>
                </div>
            
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
        </div>
        
        <div class="whyUs flex justify-center items-center flex-col" style="width: 100vw">
            <div class="section1 flex justify-center items-center my-24 gap-5 flex-col md:flex-row" style="width: 100vw">
                <img src="{{ asset('images/fiddy/home/why-us-bg-1.jpeg') }}" alt="" style="width:33rem">
                <div class="flex items-start flex-col justify-start ml-28" style="height: 100%;">
                    <h1 class="text-4xl font-black tracking-wide relative">Why Us
                        <div class="absolute left-0 top-12 w-full h-1 bg-amber-400"></div>
                    </h1>

                    <h1 class="text-lg font-black tracking-wide my-8">We are a one-stop solution for your dream space.</h1>

                    <p class="text-slate-600" style="width:40rem">We provide comprehensive design and installation services for your perfect space.Customizations from scratch according to the client’s specifications.</p>
                </div>
            </div>

            <div class=" section2 flex justify-between items-center px-64 flex-col md:flex-row gap-6" style="width: 100vw">
                <div class="flex justify-center items-center flex-col md:flex-row">
                    <img src="{{ asset('images/fiddy/home/why-us-icon-1.png') }}" alt="" style="width: 5rem">
                    <div class="mx-10 text-center md:text-left" style="width: 15rem">
                        <h1 class="text-lg font-black tracking-wide">Expert & Efficient Installation</h1>
                        <p class="text-slate-600">Our team of professionals will help you to plan, design and successful installations</p>
                    </div>
                </div>

                <div class="flex justify-center items-center flex-col md:flex-row">
                    <img src="{{ asset('images/fiddy/home/why-us-icon-2.png') }}" alt="" style="width: 5rem">
                    <div class="mx-10 text-center md:text-left" style="width: 15rem">
                        <h1 class="text-lg font-black tracking-wide">Aesthetic Designs</h1>
                        <p class="text-slate-600">A collection of 100s of designs of all types, that matches with your personality and aura</p>
                    </div>
                </div>

                <div class="flex justify-center items-center flex-col md:flex-row">
                    <img src="{{ asset('images/fiddy/home/why-us-icon-3.png') }}" alt="" style="width: 5rem">
                    <div class="mx-10 text-center md:text-left" style="width: 15rem">
                        <h1 class="text-lg font-black tracking-wide">Personalized Estimates</h1>
                        <p class="text-slate-600">Tailored pricing to make your wish possible and  as unique as you are.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="workingProcess flex justify-center items-center gap-10 my-20 p-11 md:p-32 flex-col md:flex-row" style="width: 100vw; background-color:#161515; color:white">
            <div class="flex justify-center items-center flex-col md:items-left">
                <h1 class="text-3xl md:text-4xl font-bold">Our Working Process</h1>
                <img class="my-8" src="{{ asset('images/fiddy/home/working-process-bg.jpeg') }}" alt="" style="width: 33rem">
                <button class="bg-amber-400 text-black px-4 py-3 font-bold tracking-wide">Get a quick call back</button>
            </div>

            <div class="flex justify-center items-start flex-col gap-5 ">
                <div class="flex justify-center items-center gap-20 flex-col md:flex-row">
                    <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left md:max-w-[17rem]">
                        <img src="{{ asset('images/fiddy/home/working-process-icon-1.png') }}" alt="" style="width: 4rem">
                        <h1 class="text-xl font-bold mb-5">Get Your Kitchen Designed</h1>
                        <p class="text-sm text-gray-400">Following our meeting and consultation, we collaboratively design a kitchen that reflects your unique ideas and brings to life the vision of your perfect kitchen, ensuring a seamless blend of functionality and aesthetics.</p>
                    </div>

                    <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left md:max-w-[17rem]">
                        <img src="{{ asset('images/fiddy/home/working-process-icon-2.png') }}" alt="" style="width: 4rem">
                        <h1 class="text-xl font-bold mb-5">Design Consultation</h1>
                        <p class="text-sm text-gray-400">Experience a harmonious collaboration between our innovative AI model and skilled design experts. Engage in a dynamic conversation where your ideas, preferences, and vision seamlessly converge with the knowledge and expertise of our talented designers.</p>
                    </div>
                </div>

                <div class="flex justify-center items-center gap-20 flex-col md:flex-row">
                    <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left md:max-w-[17rem]">
                        <img src="{{ asset('images/fiddy/home/working-process-icon-3.png') }}" alt="" style="width: 4rem">
                        <h1 class="text-xl font-bold mb-5">Installations</h1>
                        <p class="text-sm text-gray-400">Embark on the journey from concept to reality as we enter the installation phase, a hands-on process where your envisioned kitchen begins to take shape. Serving as the vital bridge between concept and functionality, our expert team ensures precision and excellence in every detail.</p>
                    </div>

                    <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left md:max-w-[17rem]">
                        <img src="{{ asset('images/fiddy/home/working-process-icon-4.png') }}" alt="" style="width: 4rem">
                        <h1 class="text-xl font-bold mb-5">Design Consultation</h1>
                        <p class="text-sm text-gray-400">Experience a harmonious collaboration between our innovative AI model and skilled design experts. Engage in a dynamic conversation where your ideas, preferences, and vision seamlessly converge with the knowledge and expertise of our talented designers.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ourNumbers flex justify-center items-center flex-col" style="width: 100vw">
            <div class="section1 flex flex-col justify-center items-center">
                <h1 class="text-4xl font-black tracking-wide">Our Numbers
                    <div class="absolute left-0 top-12 w-full h-1 bg-amber-400"></div>
                </h1>
                <div class="flex flex-col md:flex-row justify-center items-center my-10 gap-10 md:gap-40">
                    <div class="flex gap-40">
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-4xl md:text-7xl font-black tracking-wide text-gray-600">100+</h1>
                            <h1 class="text-sm md:text-lg tracking-wide text-gray-700">Kitchen</h1>
                        </div>
    
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-4xl md:text-7xl font-black tracking-wide text-gray-600">100+</h1>
                            <h1 class="text-sm md:text-lg tracking-wide text-gray-700">Bedrooms</h1>
                        </div>
                    </div>

                    <div class="flex gap-40">
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-4xl md:text-7xl font-black tracking-wide text-gray-600">250+</h1>
                            <h1 class="text-sm md:text-lg tracking-wide text-gray-700">Furnitures</h1>
                        </div>
    
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-4xl md:text-7xl font-black tracking-wide text-gray-600">200+</h1>
                            <h1 class="text-sm md:text-lg tracking-wide text-gray-700">Wardrobes</h1>
                        </div>
                    </div>

                </div>
            </div>

            @livewire('photo-galary')
        </div>

        <div class="blackStrip bg-black my-20 flex flex-col md:flex-row justify-center items-center p-10 gap-10 md:gap-64" style="width: 100vw;">
            <h1 class="text-xl md:text-4xl text-white text-center font-bold" style="width: 28rem">Fiddy makes your dream home come to life</h1>
            <img src="{{@asset('images/fiddy/home/blackStrip.jpeg')}}" alt="" style="width: 20rem">
        </div>

        <div class="swiper w-screen h-full px-10">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-700">Our Happy Clients</h1>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper ">
                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-center text-center flex flex-col justify-center items-center">
                            <h1 class="text-base md:text-2xl text-black font-bold tracking-widest">Meticulous, communicative, excellent!</h1>
                            <p class="text-slate-400 text-xs md:text-sm tracking-widest my-10 mt-5" style="width: 50rem">Fiddy Design is meticulous, in constant contact during the project, informed us on specifics as the project was underway, kept close to the project time-line, has reliable and highly qualified workers who explain their job, and enjoy conversing with the homeowner. At no time did we feel dissatisfied or in-the-dark. The entire project from initial discussion of the project to the very end was smooth. I give them a 5+ rating!!</p>
                            <img class="" src="{{@asset('images/fiddy/home/rating.png')}}" alt="" width="120rem">
                            <p class="text-slate-400 text-sm tracking-widest" style="margin-top: -1.5rem">7 days ago</p>
                            <p class="text-black p-4 font-normal tracking-wide text-sm ">JITENDRA RAI</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-center text-center flex flex-col justify-center items-center">
                            <h1 class="text-base md:text-2xl text-black font-bold tracking-widest">AImpressive, transparent, seamless!</h1>
                            <p class="text-slate-400 text-xs md:text-sm tracking-widest my-10 mt-5" style="width: 50rem">Fiddy Design is meticulous, in constant contact during the project, informed us on specifics as the project was underway, kept close to the project time-line, has reliable and highly qualified workers who explain their job, and enjoy conversing with the homeowner. At no time did we feel dissatisfied or in-the-dark. The entire project from initial discussion of the project to the very end was smooth. I give them a 5+ rating!!.</p>
                            <img class="" src="{{@asset('images/fiddy/home/rating.png')}}" alt="" width="120rem">
                            <p class="text-slate-400 text-sm tracking-widest" style="margin-top: -1.5rem">7 days ago</p>
                            <p class="text-black p-4 font-normal tracking-wide text-sm ">ANNU PANDAY</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide h-full m-0 bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center">
                    <div class="slider-bg flex justify-center items-center gap-60 m-12">
                        <div class="text-white md:text-center text-center flex flex-col justify-center items-center">
                            <h1 class="text-base md:text-2xl text-black font-bold tracking-widest">Attentive, creative exemplary!</h1>
                            <p class="text-slate-400 text-xs md:text-sm tracking-widest my-10 mt-5" style="width: 50rem">We had two incredible experience with Fiddy Design. Both times they took the time to listen and understand what we wanted and needed from our projects. Then came up with solutions inline with our expectations with much more creativity than we anticipated. All timelines were met and their customer service was excellent. We wanted our addition to match our 100+ year old home. The finish carpentry was unbelievable. I highly recommend this team.</p>
                            <img class="" src="{{@asset('images/fiddy/home/rating.png')}}" alt="" width="120rem">
                            <p class="text-slate-400 text-sm tracking-widest" style="margin-top: -1.5rem">7 days ago</p>
                            <p class="text-black p-4 font-normal tracking-wide text-sm ">ANNU PANDAY</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="blackStrip bg-black my-20 flex flex-col justify-center items-center p-10" style="width: 100vw; background-color:#161515;">
            <h1 class="text-3xl md:text-5xl text-white text-center font-extrabold w-screen">What else we can do for you</h1>
            <div class="flex flex-row md:flex-col justify-center items-center gap-20 md:gap-0">
                <div class="flex flex-col md:flex-row justify-center items-center gap-16 my-16">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-1.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Modular Kitchen</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-2.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Wardrobe</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-3.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Side Table</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-4.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Shoe Racks</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-5.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Puja Ghar</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-6.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">False Ceiling</p>
                    </div>
                </div>
    
                <div class="flex flex-col md:flex-row justify-center items-center gap-16">
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-7.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Study Table</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-8.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Kids Bedroom</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-9.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Living Room Interiors</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-10.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Crockery Units</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-11.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">Bathroom</p>
                    </div>
    
                    <div class="flex flex-col justify-center items-center">
                        <img src="{{ asset('images/fiddy/home/what-else-icons-12.png') }}" alt="" style="width:3rem">
                        <p class="text-white text-center">TV Cabinate</p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="getInTouch flex flex-col md:flex-row justify-center items-center w-screen my-24 md:gap-16">
            <div class="flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                <h1 class="font-bold text-2xl">Get in Touch</h1>
                @livewire('forms.contact-form')
            </div>

            <div class="flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                <h1 class="font-bold text-sm md:text-lg">PHONE</h1>
                <p>+91-7408348080</p>
                <p>+91-9454854190</p>
            </div>

            <div class="flex justify-center items-center flex-col" style="background-color: white; padding:4rem 3rem; ">
                <div class="">
                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg></span>
                </div>
                <h1 class="font-bold text-sm md:text-lg">EMAIL ADDRESS</h1>
                <p>info.fiddy@gmail.com</p>
            </div>
        </div>
    </div>
</x-guest-layout>
