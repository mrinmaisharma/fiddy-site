<x-guest-layout>
    @section('title', 'Contact')
    <div class="max-w-screen-lg mx-auto px-4">
        <div class="flex flex-col items-center gap-1">
            <h1 class="sm:text-4xl text-2xl font-bold text-gray-800 dark:text-gray-800 text-center">
                Contact Us
            </h1>
            <div class="h-1 bg-primary sm:w-24 w-12">
            </div>
        </div>
        <div class="flex group flex-wrap flex-col sm:flex-row sm:gap-28 gap-16 justify-center w-full mt-8">
            <div class="flex flex-col gap-2 group items-center justify-center">
                <div
                    class=" mt-4 sm:w-24 sm:h-24 w-16 h-16 flex items-center justify-center rounded-full bg-[#F6F5F1] hover:bg-[#DEB71F] group-hover:text-[#F6F5F1] hover:text-[#F6F5F1]">
                    <x-heroicon-s-phone class="sm:w-8 sm:h-8 w-6 h-6 text-[#DEB71F] hover:text-[#F6F5F1]" />
                </div>

                <div class="flex flex-col items-center justify-center mt-6">
                    <h2 class="font-bold">PHONE</h2>
                    <p class="text-xs sm:text-base">+91-7408348080</p>
                    <p class="text-xs sm:text-base">+91-9454854190</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 items-center justify-center">
                <div
                    class="sm:w-24 sm:h-24 w-16 h-16 flex items-center justify-center rounded-full bg-[#F6F5F1] hover:bg-[#DEB71F] group-hover:text-[#F6F5F1] hover:text-[#F6F5F1]">
                    <x-go-mail-16 class="sm:w-8 sm:h-8 w-6 h-6 text-[#DEB71F] hover:text-[#F6F5F1]" />
                </div>
                <div class="flex flex-col items-center justify-center mt-6">
                    <h2 class="font-bold">EMAIL ADDRESS</h2>
                    <p class="text-xs sm:text-base">info.fiddy@gmail.com</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 items-center justify-center">
                <div
                    class="sm:w-24 sm:h-24 w-16 h-16 flex items-center justify-center rounded-full bg-[#F6F5F1] hover:bg-[#DEB71F] group-hover:text-[#F6F5F1] hover:text-[#F6F5F1]">
                    <x-zondicon-calendar class="sm:w-8 sm:h-8 w-6 h-6 text-[#DEB71F] hover:text-[#F6F5F1]" />
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h2 class="font-bold">BUSINESS HOURS</h2>
                    <p class="text-xs sm:text-base">(Mon-Fri) 8am - 6pm</p>
                </div>
            </div>
            <div class="sm:w-48 w-72 flex flex-col gap-6 items-center justify-center text-center">
                <h2 class="font-bold sm:text-xl text-lg">
                    Want to Re-Design your home?
                </h2>
                <button class="bg-[#EBC31F] text-xs px-6 py-2 mt-4">Click Here</button>
            </div>
        </div>
        <div class="flex flex-col mt-12 w-full md:flex-row items-center justify-center">
            <div class="w-full sm:w-1/2 flex-1">
                <h1 class="text-2xl font-bold flex justify-center mt-10">Get in Touch</h1>
                @livewire('forms.contact-form')
            </div>
            <div class="w-1/2 flex-1">
                *image placeholder*
            </div>
        </div>
    </div>
</x-guest-layout>
