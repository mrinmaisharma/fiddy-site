<div class="px-6">
    <form wire:submit.prevent="submit">
        <div class="">
            <label for="name">Name <span>*</span></label>
            <div class="mt-1">
                <input wire:model="name" type="text" id="name" name="name" placeholder="Enter Your Name"
                    class="w-full border-[#EEEEEE] rounded-sm">
            </div>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="sm:flex gap-20 w-full mt-8">
            <div class="sm:w-1/2 w-full">
                <label for="phone">Phone Number <span>*</span></label>
                <div class="mt-1">
                    <input wire:model="phone" type="text" id="phone" name="phone"
                        placeholder="Your Phone Number" class="border-[#EEEEEE] rounded-sm w-full">
                </div>
                @error('phone')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="sm:w-1/2 w-full">
                <label for="whatsapp">Whatsapp</label>
                <div class="mt-1">
                    <input wire:model="whatsapp" type="text" id="whatsapp" name="whatsapp"
                        placeholder="Your WhatsApp Number" class="border-[#EEEEEE] rounded-sm w-full">
                </div>
            </div>
        </div>
        <div class="mt-8">
            <label for="email">Email Address</label>
            <div class="mt-1">
                <input wire:model="email" type="email" id="email" name="email" placeholder="john@doe.com"
                    class="w-full border-[#EEEEEE] rounded-sm">
            </div>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-8">
            <label for="description">Describe yourself in 70 words</label>
            <textarea wire:model="description" id="description" name="description"
                placeholder="Write something interesting about you"
                class="resize-none border rounded-md mt-1 w-full p-2 h-32 border-[#EEEEEE]"></textarea>
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-8">
            <label for="resume">Upload your resume <span>*</span></label>
            <div class="mt-1 flex items-center">
                <span class="bg-[#EFC43B] px-4 py-3 rounded-sm text-sm">
                    Choose File
                </span>
                <input wire:model="resume" type="file" id="resume" name="resume" class="sr-only">
            </div>
            @error('resume')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-6">
            <label>
                <input wire:model="checkbox" type="checkbox" name="checkbox">
                By checking this box, you allow Fiddy to connect with you any time .
            </label>
            @error('checkbox')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button class="bg-[#EFC43B] px-7 py-3 rounded-sm text-sm mt-6 mb-10" type="submit">Submit</button>
    </form>
</div>
