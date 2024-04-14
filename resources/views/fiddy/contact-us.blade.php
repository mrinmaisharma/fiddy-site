<x-guest-layout>
    @section('title', 'Contact')
    <div class="max-w-screen-lg mx-auto px-4">
        <div class="flex flex-col items-center gap-1">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Contact Us
            </h1>
            <div class="h-1 bg-primary w-24">
            </div>
        </div>
        <div class="flex flex-wrap sm:mt-12 mt-6 gap-4">
            <div class="flex flex-col gap-4 items-center sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center bg-yellow-400 rounded-full p-10">
                    meow
                </div>
                <div class="flex items-center flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-xl">PHONE</h2>
                    <p class="text-sm text-center sm:text-left">+91-7408348080</p>
                    <p class="text-sm text-center sm:text-left">+91-9454854190</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center bg-yellow-400 rounded-full p-10">
                    meow
                </div>
                <div class="flex items-center flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-xl">EMAIL ADDRESS</h2>
                    <p class="text-sm text-center sm:text-left">info.fiddy@gmail.com</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center sm:gap-4">
                <div class="mt-12 sm:flex sm:flex-col sm:items-center bg-yellow-400 rounded-full p-10">
                    meow
                </div>
                <div class="flex items-center flex-col gap-2 w-full sm:w-56">
                    <h2 class="font-bold text-xl">BUSINESS HOURS</h2>
                    <p class="text-sm text-center sm:text-left">(Mon-Fri) 8am - 6pm</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 items-center sm:gap-4">
                Want to Re-design your <br /> home?
            </div>
        </div>
        <div class="flex flex-col mt-12 w-full md:flex-row">
            <div class="w-full sm:w-1/2 flex-1 sm:order-1 order-2">
                <h1 class="text-2xl font-bold flex justify-center mt-10">Get in Touch</h1>
                @livewire('forms.contact-form')
            </div>
            <div class="w-1/2 flex-1 sm:order-2 order-1">
                *image placeholder*
            </div>
        </div>
    </div>
</x-guest-layout>
