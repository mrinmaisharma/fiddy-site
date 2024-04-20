<x-guest-layout>
    @section('title', 'Job Openings')
    <div class="max-w-screen-lg mx-auto">
        <div class="bg-[#F5F5F5] py-4">
            <div class="container flex sm:flex-row flex-col justify-between px-8 py-8">
                <div>
                    <h2 class="text-2xl">Job Openings</h2>
                </div>
                <div class="hidden sm:block">
                    <div class="flex gap-2">
                        <button><x-fas-house class="w-4 hover:text-[#DEB71F]" /></button>
                        <span class="mt-2"><x-microns-right class="w-3 h-3" /></span>
                        <button class="transition-colors duration-300 ease-in-out"><span
                                class="text-black hover:text-[#DEB71F]">Job Openings</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-2 sm:invisible visible px-4 mt-8">
            <button><x-fas-house class="w-4 hover:text-[#DEB71F]" /></button>
            <span class="mt-2"><x-microns-right class="w-3 h-3" /></span>
            <button class="transition-colors duration-300 ease-in-out"><span class="text-black hover:text-[#DEB71F]">Job
                    Openings</span></button>
        </div>
        <div class="mt-8">
            <div class="">
                <button class="font-bold text-xl transition-colors duration-300 ease-in-out sm:text-left text-left">
                    <span class="text-black hover:text-[#DEB71F]">Sales Executive – Key Accounts Management
                        (KAM)</span>
                </button>
            </div>
            <div class="flex gap-1 mt-4">
                <x-heroicon-s-user-circle class="w-4" />
                <button class="hover:text-[#DEB71F]">Arbre Admin</button>
                <span>-</span>
                <x-heroicon-o-calendar-days class="w-4" />
                <span>January 23, 2024</span>
                <span>-</span>
                <x-heroicon-o-folder class="w-4" />
            </div>
            <div class="mt-8 sm:w-4/5 w-full">
                <p class="text-left text-[16px]">About The Job: We are looking for skilled Sales professionals in
                    KAM /
                    Project
                    Sales
                    to oversee the
                    relationships of the company with its most important clients. This role will be responsible to
                    develop…</p>
            </div>
            <div class="mt-4">
                <button
                    class="border border-gray-300 hover:border-yellow-200 hover:text-blue-300 py-2 transition-colors duration-300 ease-in-out px-6 text-xs">Continue
                    Reading ></button>
            </div>
            <div class="border-t border-gray-300 mt-6 sm:w-4/5 w-full"></div>
        </div>
    </div>
</x-guest-layout>
