<x-guest-layout>
    @section('title', 'Career')
    <div class="max-w-screen-lg mx-auto mt-16">
        <div class="flex flex-wrap flex-col">
            <div class="relative w-full h-[400px] bg-no-repeat bg-center bg-cover"
                style="background-image:url('{{ asset('images/fiddy/career/main-career.png') }}');">
                <div class="absolute w-full h-full top-0 left-0 bg-black/50">
                </div>
                <div class="flex flex-col items-center justify-center relative z-10 mt-24">
                    <h1 class="text-white text-2xl font-bold">Want to start your career ?</h1>
                    <p class="text-white text-center text-lg mt-4 font-medium">If you are interested in making a career in modular
                        <br />kitchen
                        industry, FIDDY will be the <br>Best for You.
                    </p>
                    <button class="bg-[#F1C63A] rounded-md mt-4">
                        <div class="flex lg:flex-col sm:flex-row gap-1 items-center px-5 py-2">
                            <p class="leading-4">View <br> Openings</p>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center gap-1 mt-12">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Why Fiddy?
            </h1>
            <div class="h-1 bg-primary w-20"></div>
        </div>
        <div class="flex flex-wrap sm:mt-12 mt-6 sm:gap-4 gap-2 justify-between">
            <div class="flex flex-col gap-4 items-center sm:flex-row sm:items-start sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center">
                    <img src="{{ asset('images/fiddy/career/feature-1-career.png') }}" class="sm:w-20 w-28" />
                </div>
                <div class="flex flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-xl text-center sm:text-left ">Improve Experience</h2>
                    <p class="sm:text-sm text-xs sm:px-0 px-10 text-center sm:text-left text-primaryText ">We are committed to improving
                        the culinary
                        experience of
                        modular
                        kitchen
                        experience, ensuring that each design not only transforms spaces but enhances the joy of cooking
                        and living in your home.</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center sm:flex-row sm:items-start sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center">
                    <img src="{{ asset('images/fiddy/career/feature-2-career.png') }}" class="sm:w-20 w-28" />
                </div>
                <div class="flex  flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-lg text-center sm:text-left">Our Strong Values</h2>
                    <p class="sm:text-sm text-xs sm:px-0 px-10 text-center sm:text-left text-primaryText "> We are dedicated to integrity,
                        quality craftsmanship,
                        and customer satisfaction,
                        ensuring that each kitchen we create reflects a commitment to excellence and enduring style.</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center sm:flex-row sm:items-start sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center">
                    <img src="{{ asset('images/fiddy/career/feature-3-career.png') }}" class="sm:w-20 w-28" />
                </div>
                <div class="flex  flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-lg text-center sm:text-left">Our Open Culture</h2>
                    <p class="sm:text-sm text-xs sm:px-0 px-10 text-center sm:text-left text-primaryText ">We foster a dynamic environment
                        that values creativity,
                        innovation, and a shared
                        commitment to crafting spaces that inspire connection and functionality.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center gap-1 my-12">
            <h1 class="text-xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Current Openings
            </h1>
            <div class="h-1 bg-primary w-20"></div>
        </div>

        <div class="bg-primary2 p-20 h-[400px] flex flex-col justify-center ">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 md:space-x-4 mb-8 ">
                <div class="flex items-center bg-white p-2 rounded shadow flex-1">
                    <input type="text" placeholder="Search" class="outline-none p-2 border-transparent">
                    <button class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
                        </svg>
                    </button>
                </div>
                <select class="bg-white p-2 rounded shadow flex-1 h-14 border-gray-300 text-primaryText">
                    <option>All Job Category</option>
                </select>
                <select class="bg-white p-2 rounded shadow flex-1 h-14 border-gray-300 text-primaryText">
                    <option class="">All Job Type</option>
                </select>
                <select class="bg-white p-2 rounded shadow flex-1 h-14 border-gray-300 text-primaryText">
                    <option>All Job Location</option>
                </select>
            </div>
            <div class="bg-white p-4 rounded shadow w-full flex">
                <div class="text-xl">Sales Executive – Key Accounts Management (KAM)</div>
                <div class="flex gap-4 ml-auto">
                    <span>Sales</span>
                    <span>Kanpur</span>
                    <span>More Details </span>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center gap-1 mt-12">
            <h1 class="text-xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Join Our Team
            </h1>
            <div class="h-1 bg-primary w-20"></div>
            <p class="text-center mt-10 text-primaryText">If you don’t find a job that suits you the best, share your details with us and
                we
                will consider you on
                priority.</p>
            <div class="w-full sm:w-3/4 bg-white rounded-sm drop-shadow-2xl my-12 py-5 px-2">
                @livewire('forms.team-form')
            </div>
        </div>

    </div>
</x-guest-layout>
