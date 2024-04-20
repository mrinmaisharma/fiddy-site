<x-guest-layout>
    @section('title', 'Job Details')
    <div class="max-w-screen-lg mx-auto">
        <div class="w-full">
            <div class="bg-[#F5F5F5] py-4">
                <div class="container flex sm:flex-row flex-col gap-2 justify-between px-8 py-8">
                    <div>
                        <h2 class="text-xl">Sales Executive – Key Accounts Management (KAM)</h2>
                    </div>
                    <div class="hidden sm:block">
                        <div class="flex gap-2">
                            <button><x-fas-house class="w-4 hover:text-[#DEB71F]" /></button>
                            <span class="sm:mt-2 mt-7"><x-microns-right class="w-4 h-4 text-[#CECECE]" /></span>
                            <button class="transition-colors duration-300 ease-in-out">
                                <span class="text-black hover:text-[#DEB71F] text-xs">Job Openings</span>
                            </button>
                            <span class="sm:mt-2 mt-7"><x-microns-right class="w-4 h-4 text-[#CECECE]" /></span>
                            <button class="transition-colors duration-300 ease-in-out">
                                <span class="text-black hover:text-[#DEB71F] text-xs">Sales Executive – Key Accounts
                                    Management
                                    (KAM)</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex gap-2 sm:px-0 px-4 visible sm:invisible mt-4">
                <button><x-fas-house class="w-4 hover:text-[#DEB71F]" /></button>
                <span class="sm:mt-2 mt-4"><x-microns-right class="w-4 h-4 text-[#CECECE]" /></span>
                <button class="transition-colors duration-300 ease-in-out">
                    <span class="text-black hover:text-[#DEB71F] text-xs">Job Openings</span>
                </button>
                <span class="sm:mt-2 mt-4"><x-microns-right class="w-4 h-4 text-[#CECECE]" /></span>
                <button class="transition-colors duration-300 ease-in-out">
                    <span class="text-black hover:text-[#DEB71F] text-xs">Sales Executive – Key Accounts
                        Management
                        (KAM)</span>
                </button>
            </div>
            <div class="text-[34px] mt-8 font-bold sm:text-left">Sales Executive – Key Accounts Management (KAM)
            </div>
            <div class="border-t border-gray-300 mt-6 sm:w-3/4 w-full"></div>
            <div class="mt-4 text-lg font-bold">
                <p class="text-[#4A4A4A]">About the Job:</p>
            </div>
            <div class="text-base text-[#4A4A4A] italic sm:text-left sm:w-3/4 w-full mt-4">We are looking for
                skilled
                Sales professionals
                in <span class="font-bold">KAM / Project
                    Sales</span>
                to oversee the relationships of the company with its most important clients. This role will be
                responsible to develop and maintain strong relationships with construction contractors (known as General
                contractors) and builders (primarily involved in builder floor apartment construction).
            </div>
            <div class="text-base text-[#4A4A4A] italic sm:text-left sm:w-3/4 w-full mt-4">
                These contractor customers typically work on turnkey construction projects and purchase variety of
                building materials during construction.
            </div>
            <div class="text-base text-[#4A4A4A] sm:text-left sm:w-3/4 w-full mt-4 flex flex-col gap-4">
                <h3 class="font-bold">Responsibilities :</h3>
                <p>1. Key account management – Handling builders / General contractors / Contractors in Construction
                    space,</p>
                <p>2. Responsible for all contractors – Acquisition, Growth & Retention of Contractors.</p>
                <p>3. Sales Management – Concept sale, Consultative selling, BoQ optimization.</p>
                <p>4. Explain schemes and offers, handle customer queries, drive self-ordering, customer relationship
                    management.</p>
                <p>5. Key accounts negotiations.</p>
                <p>6. Providing Feedback to category managers on products / SKUs.</p>
                <p>7. Building potential contractors database through reference, including them in CML, Generating
                    business from them.</p>
                <p>Technical and Professional Requirements : :</p>
                <p class="font-bold">Preferred Skills:</p>
                <p>1. Should have at least 3-10 years of experience in <span class="font-bold">Field Sales & Business
                        Development</span></p>
                <p>2. Must have good Communication Skills (Hindi/English)</p>
                <p>3. Must have good Convincing Skills</p>
                <p>4. Go Getter & Energetic</p>
                <p>5. Willing to take up field sales assignment.</p>
            </div>
            <div class="text-left mt-8">
                <p><span class="font-bold">Job Category:</span> Sales</p>
                <p><span class="font-bold">Job Type:</span> Full Time</p>
                <p><span class="font-bold">Job Location:</span> Kanpur</p>
            </div>
            <div class="sm:w-3/4 w-full mt-6 border-[#EEEEEE] border">
                @livewire('forms.apply-for-position-form')
            </div>
        </div>
    </div>
</x-guest-layout>
