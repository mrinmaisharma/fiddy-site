<x-guest-layout>
    @section('title', 'About Us')
    <main>
        <div class="flex flex-col items-center sm:px-32">
            <div class="relative w-full h-[330px] bg-no-repeat bg-center"
                style="background-image:url('{{ asset('images/fiddy/about/about-us-main.jpeg') }}')">
                <p class="absolute flex text-white font-bold text-3xl pl-2 mt-[280px]">
                    Our Journey
                </p>
            </div>
            <div class="mt-6">
                <p class="font-bold text-gray-900  dark:text-gray-800 sm:text-lg text-xs">
                    Welcome to Fiddy Modular Kitchen & Furniture Company, founded in 2018,
                    by Ar. Amol Srivastava and Ar. Anurag Deep Gupta with the vision of providing
                    one stop solution for current requirement of your space needs.
                </p>
                <br />
                <p class="text-gray-900  dark:text-gray-800 sm:text-lg text-sm">
                    At Fiddy, we believe that your space should be a reflection of your personality
                    and a canvas for your unique story. Our journey in the world of modular
                    kitchen and furniture is marked by a passion for creating environments
                    that not only catches the eye but also resonate with the soul.
                </p>
                <br />
                <p class="text-gray-900  dark:text-gray-800 sm:text-lg text-sm">
                    With a team of seasoned designers, architects, and creative minds, Fiddy
                    is committed to turning your design dreams into a tangible reality. We
                    understand that each space has its own personality, and our approach is
                    rooted in the belief that great design is a harmonious blend of aesthetics
                    and practicality. What makes us different is our unwavering commitment
                    to quality and attention to detail. From the initial concept to the final
                    finishing touches, we collaborate closely with our clients to understand
                    their vision, ensuring that every design element is curated to perfection.
                </p>
                <br />
                <p class="text-gray-900  dark:text-gray-800 sm:text-lg text-sm">
                    At Fiddy, we embrace the latest trends in interior design while staying
                    true to timeless principles. Our curated selection of materials, furnishings,
                    and finishes is a testament to our dedication to excellence. Your satisfaction
                    is our priority. Fiddy is committed to delivering not just exceptional
                    designs but also a seamless and enjoyable experience. We take pride in
                    our collaborative approach, working hand in hand with our clients to ensure
                    their vision is not only realized but exceeded.
                </p>
                <br />
                <p class="text-gray-900  dark:text-gray-800 sm:text-lg text-sm">
                    Step into the world of Fiddy and let us redefine the way you experience
                    your spaces. Welcome to a journey where design meets emotion, and where
                    every corner tells a story.
                </p>
            </div>
        </div>
        <div class="bg-[#F6F5F3] py-8 w-full mt-10 rounded-md">
            <div class="flex flex-col items-center gap-1">
                <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-800 text-center">
                    Why Us?
                </h1>
                <div class="h-1 bg-primary w-16">
                </div>
                <!--Parent Container for features-->
                <div class="my-4 flex-col md:px-10 lg:px-20 xl:px-32">
                    <div class="flex flex-col gap-8  md:flex-row py-8 pb-8">
                        <div
                            class="bg-[#FBFAF9] hover:bg-white shadow-md transition-shadow duration-300 hover:shadow-2xl flex-col items-center px-10 md:px-10 w-full">
                            <div class="px-6 md:px-10 md:gap-8 py-10 flex-col gap-8">
                                <img src="{{ asset('images/fiddy/about/space-utilization-about-us.png') }}"
                                    alt="utilization-logo" class="w-16" />
                                <h2 class="text-lg md:text-xl mt-4 text-[#252525]">
                                    Space Utilization
                                </h2>
                                <p class="text-[#727272] text-sm mt-4">
                                    Our innovative designs are crafted to maximize space utilization, ensuring
                                    that even the smallest corner becomes a functional and stylish element
                                    of your kitchen.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-[#FBFAF9] hover:bg-white shadow-md transition-shadow duration-300 hover:shadow-2xl flex-col items-center px-10 md:px-10 w-full">
                            <div class="px-6 md:px-10 md:gap-8 py-10 flex-col gap-8">
                                <img src="{{ asset('images/fiddy/about/customization-about-us.png') }}"
                                    alt="customization-logo" class="w-16" />
                                <h2 class="text-lg md:text-xl mt-4 text-[#252525">
                                    Customization
                                </h2>
                                <p class="text-[#727272] text-sm mt-4">
                                    To suit the individual needs and preferences of the homeowner. This includes
                                    adjustable shelves, modular cabinets, and the ability to choose materials
                                    and finishes.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-[#FBFAF9] hover:bg-white shadow-md transition-shadow duration-300 hover:shadow-2xl flex-col items-center px-10 md:px-10 w-full">
                            <div class="px-6 md:px-10 md:gap-8 py-10 flex-col gap-8">
                                <img src="{{ asset('images/fiddy/about/aesthetic-appeal-about-us.png') }}"
                                    alt="aesthetic-logo" class="w-16" />
                                <h2 class="text-lg md:text-xl mt-4 text-[#252525">
                                    Aesthetic Appeal
                                </h2>
                                <p class="text-[#727272] text-sm mt-4">
                                    With the integration of technology and innovative storage solutions, our
                                    designs become a celebration of style and convenience. Welcome to a realm
                                    where design meets daily life in perfect harmony.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8 md:flex-row py-8 pb-8">
                        <div
                            class="bg-[#FBFAF9] hover:bg-white shadow-md transition-shadow duration-300 hover:shadow-2xl flex-col items-center px-10 md:px-10 w-full">
                            <div class="px-6 md:px-10 md:gap-8 py-10 flex-col gap-8">
                                <img src="{{ asset('images/fiddy/about/easy-maintainance-about-us.png') }}"
                                    alt="maintainance-logo" class="w-16" />
                                <h2 class="text-lg md:text-xl mt-4 text-[#252525">
                                    Easy Maintenance
                                </h2>
                                <p class="text-[#727272] text-sm mt-4">
                                    Our designs prioritize convenience and efficiency, ensuring that every
                                    element is not only aesthetically pleasing but also easy to maintain.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-[#FBFAF9] hover:bg-white shadow-md transition-shadow duration-300 hover:shadow-2xl flex-col items-center px-10 md:px-10 w-full">
                            <div class="px-6 md:px-10 md:gap-8 py-10 flex-col gap-8">
                                <img src="{{ asset('images/fiddy/about/safety-about-us.png') }}" alt="safety-logo"
                                    class="w-16" />
                                <h2 class="text-lg md:text-xl mt-4 text-[#252525">
                                    Safety
                                </h2>
                                <p class="text-[#727272] text-sm mt-4">
                                    Consideration of safety features, such as rounded edges on countertops,
                                    childproof cabinets, and non-slip flooring, is essential, especially in
                                    homes with children
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-[#FBFAF9] hover:bg-white shadow-md transition-shadow duration-300 hover:shadow-2xl flex-col items-center px-10 md:px-10 w-full">
                            <div class="px-6 md:px-10 md:gap-8 py-10 flex-col gap-8">
                                <img src="{{ asset('images/fiddy/about/durability-about-us.png') }}"
                                    alt="durability-logo" class="w-16" />
                                <h2 class="text-lg md:text-xl mt-4 text-[#252525">
                                    Durability
                                </h2>
                                <p class="text-[#727272] text-sm mt-4">
                                    Great designs are built to withstand the rigors of daily use. Durable
                                    materials, robust hardware, and quality construction contribute to the
                                    longevity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <div>
                <div class="flex flex-col items-center gap-1">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-800 text-center">
                        Meet The Founders
                    </h1>
                    <div class="h-1 bg-primary w-16">
                    </div>
                </div>
                <div class="flex-wrap flex mt-10 gap-5 justify-center">
                    <div class="group w-[500px] h-[600px] bg-cover bg-no-repeat bg-center hover:bg-left ease-in duration-150 relative"
                        style="background-image:url('{{ asset('images/fiddy/about/co-founder-1-about-us.jpeg') }}')">
                        <p
                            class="absolute flex mt-[510px] justify-center inset-0 text-[#F5C93C] text-xl font-bold group-hover:mt-[450px] ease-in duration-300">
                            Ar. Amol Srivastava
                        </p>
                        <p
                            class="absolute flex mt-[550px] justify-center opacity-0 inset-0 text-white text-base font-bold group-hover:mt-[500px] ease-in duration-300 group-hover:opacity-100">
                            Co-Founder
                        </p>
                    </div>
                    <div class="group w-[500px] h-[600px] bg-cover bg-no-repeat bg-center hover:bg-left ease-in duration-150 relative"
                        style="background-image:url('{{ asset('images/fiddy/about/co-founder-2-about-us.jpeg') }}')">
                        <p
                            class="absolute flex mt-[510px] justify-center inset-0 text-[#F5C93C] text-xl font-bold group-hover:mt-[450px] ease-in duration-300">
                            Ar. Anurag Gupta
                        </p>
                        <p
                            class="absolute flex mt-[550px] justify-center opacity-0 inset-0 text-white text-base font-bold group-hover:mt-[500px] ease-in duration-300 group-hover:opacity-100">
                            Co-Founder
                        </p>
                    </div>
                </div>
            </div>
    </main>
</x-guest-layout>
