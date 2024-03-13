<footer class="bg-black text-white">
    <div class="max-w-screen-lg px-2 py-10 grid sm:grid-cols-3 grid-cols-1 mx-auto gap-5">
        <div class="">
            <img class="h-14" src="{{asset('images/fiddy-logo-white.png')}}" alt="Fiddy logo" />
        </div>
        <div class="">
            <h3 class=" font-bold">Quick Links</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 mt-5 text-xs gap-5">
                <a  href="https://www.fiddy.in/" class="hover:underline underline-offset-2">Home</a>
                <a  href="https://www.fiddy.in/studio/" class="hover:underline underline-offset-2 sm:col-span-2">About Us</a>
                <a  href="https://www.fiddy.in/products/" class="hover:underline underline-offset-2">Our Products</a>
                <a  href="https://www.fiddy.in/contact/" class="hover:underline underline-offset-2 sm:col-span-2">Contact Us</a>
                <a  href="https://www.fiddy.in/contact/" class="hover:underline underline-offset-2">Career</a>
            </div>
        </div>
        <div>
            <h3 class=" font-bold">Subscribe Now</h3>
            <p class="text-xs font-thin mt-5">Don’t miss our future updates! Check out our social pages.</p>
            <div class="mt-5 flex flex-wrap gap-2 text-gray-300">
                <a href="#" class="inline-flex items-center justify-center w-8 h-8 rounded-full border-[1px] border-gray-300 hover:text-white hover:bg-[#5E6D7E]">
                    <x-ri-facebook-fill class="w-5 h-5" />
                </a>
                <a href="#" class="inline-flex items-center justify-center w-8 h-8 rounded-full border-[1px] border-gray-300 hover:text-white hover:bg-[#5E6D7E]">
                    <x-ri-twitter-fill class="w-5 h-5" />
                </a>
                <a href="#" class="inline-flex items-center justify-center w-8 h-8 rounded-full border-[1px] border-gray-300 hover:text-white hover:bg-[#5E6D7E]">
                    <x-ri-linkedin-fill class="w-5 h-5" />
                </a>
                <a href="#" class="inline-flex items-center justify-center w-8 h-8 rounded-full border-[1px] border-gray-300 hover:text-white hover:bg-[#5E6D7E]">
                    <x-ri-instagram-line class="w-5 h-5" />
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="bg-primary w-full">
    <div class="max-w-screen-lg px-2 py-2 text-[0.7rem] mx-auto">
        &copy; {{date("Y")}} Fiddy. All Rights Reserved.
    </div>
</div>