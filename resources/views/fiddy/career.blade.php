<x-guest-layout>
    @section('title', 'Career')
    <div class="max-w-screen-lg mx-auto">
        <div class="flex flex-wrap flex-col">
            <div class="relative w-full h-[330px] bg-no-repeat bg-center bg-cover"
                style="background-image:url('{{ asset('images/fiddy/career/main-career.png') }}');">
                <div class="absolute w-full h-full top-0 left-0 bg-black/50">
                </div>
                <div class="flex flex-col items-center justify-center relative z-10 mt-24">
                    <h1 class="text-white text-2xl font-bold">Want to start your career ?</h1>
                    <p class="text-white text-center text-lg mt-4">If you are interested in making a career in modular
                        <br />kitchen
                        industry, FIDDY will be the Best for You.</p>
                    <button class="bg-[#F1C63A] rounded-lg mt-4">
                        <div class="flex lg:flex-col items-center px-5 py-2">
                            <span class="text-sm">View</span>
                            <span class="text-sm">Openings</span>
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
        <div class="flex flex-wrap sm:mt-12 mt-6 gap-4">
            <div class="flex flex-col gap-4 items-center sm:flex-row sm:items-start sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center">
                    <img src="{{ asset('images/fiddy/career/feature-1-career.png') }}" class="sm:w-20 w-28" />
                </div>
                <div class="flex items-center flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-lg">Improve Experience</h2>
                    <p class="text-sm text-center sm:text-left">We are committed to improving the culinary experience of
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
                <div class="flex items-center flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-lg">Our Strong Values</h2>
                    <p class="text-sm text-center sm:text-left"> We are dedicated to integrity, quality craftsmanship,
                        and customer satisfaction,
                        ensuring that each kitchen we create reflects a commitment to excellence and enduring style.</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center sm:flex-row sm:items-start sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center">
                    <img src="{{ asset('images/fiddy/career/feature-3-career.png') }}" class="sm:w-20 w-28" />
                </div>
                <div class="flex items-center flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-lg">Our Open Culture</h2>
                    <p class="text-sm text-center sm:text-left">We foster a dynamic environment that values creativity,
                        innovation, and a shared
                        commitment to crafting spaces that inspire connection and functionality.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center gap-1 mt-12">
            <h1 class="text-xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Current Openings
            </h1>
            <div class="h-1 bg-primary w-20"></div>
        </div>
        <div class="flex flex-col items-center gap-1 mt-12">
            <h1 class="text-xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Join Our Team
            </h1>
            <div class="h-1 bg-primary w-20"></div>
            <p class="text-center mt-10">If you don’t find a job that suits you the best, share your details with us and
                we
                will consider you on
                priority.</p>
            <div class="w-full sm:w-3/4 bg-white rounded-lg shadow-xl mt-6">
                @livewire('forms.team-form')
            </div>
        </div>

    </div>
</x-guest-layout>
